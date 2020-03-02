<?php

namespace App\Http\Controllers;

use App\Item;
use App\Category;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Gate;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = auth()->user();
        $categories = Category::all();
        return view('admin.pages.add', compact('user', 'categories'));
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'pavadinimas' => 'required',
            'kaina' => 'required|max:3',
            'kiekis' => 'required',
            'category' => 'required',
            'foto' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'aprasymas' => 'required',
        ]);
        $path=$request->file('foto')->store('public/adimg');
        $filename = str_replace('public/',"", $path);
        $item = Item::create([
            'title' => request('pavadinimas'),
            'price' => request('kaina'),
            'count' => request('kiekis'),
            'img' => $filename,
            'description' => request('aprasymas'),
            'cat_id' => request('category'),
            'user_id' => auth()->user()->id
        ]);
        return redirect('/addnew');
    }
    public function goods()
    {
        $categories = Category::all();
        $user = auth()->user();
        $items = Item::select('*' ,'categories.name as category', 'items.id as id')->join('categories', 'categories.id','=','cat_id')->get();
        return view('admin.pages.goods', compact('user', 'items', 'categories'));
    }
    public function edit(Item $item)
    {
        $user = auth()->user();
        $categories = Category::all();
        if (Gate::allows('edit-delete', $item)) {
            return view('admin.pages.edit', ['item' => $item], compact('user', 'categories'));
        }
        else if (Gate::denies('edit-delete', $item)) {
            return view('admin.pages.error', compact('user'));
        }
    }
    public function update(Request $request, Item $item)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'count' => 'required',
            'description' => 'required',
            'cat_id' => 'required',
        ]);
        if($request->hasFile('img')) {
            File::delete('../storage/app/public/'.$item->img);
            $path=$request->file('img')->store('public/adimg');
            $filename = str_replace('public/',"", $path);
            Item::where('id',$item->id)->update(['img' => $filename]);
        }
        Item::where('id',$item->id)->update($request->except(['_token', 'img']));
        return redirect('/goods');
    }
    public function destroy(Item $item)
    {
        
        if (Gate::allows('edit-delete', $item)) {
            $item->delete();
        }
        else if (Gate::denies('edit-delete', $item)) {
            $user = auth()->user();
            return view('admin.pages.error', compact('user'));
        }
        return redirect('/goods');
    }
}
