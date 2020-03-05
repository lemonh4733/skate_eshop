<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Item;
use App\Order;
use File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $items = Item::all();
        $orders = Order::all();
        $user = auth()->user();
        return view('admin.pages.dashb', compact('user', 'items', 'users', 'orders'));
    }
    public function profile() {
        $user = auth()->user();
        return view('admin.pages.profile', compact('user'));
    }
    public function profileUpdate(User $user, Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        if($request->hasFile('img') && $user->img != "usrimg/none.jpg") {
            File::delete('../storage/app/public/'.$user->img);
            $path=$request->file('img')->store('public/usrimg');
            $filename = str_replace('public/',"", $path);
            User::where('id',$user->id)->update(['img' => $filename]);
        }
        User::where('id',$user->id)->update($request->except(['_token', 'img']));
        return redirect('/goods');
    }
}
