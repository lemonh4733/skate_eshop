<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Auth;
use App\User;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = auth()->user();
        $categories = Category::all();
        return view('admin.pages.add-cat', compact('user', 'categories'));
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'pavadinimas' => 'required',
        ]);
        $item = Category::create([
            'name' => request('pavadinimas'),
        ]);
        return redirect('/addcat');
    }
    public function destroy(Category $category)
    {
       $category->delete();
        return redirect('/addcat');
    }
}
