<?php

namespace App\Http\Controllers;

use App\Order;
use App\Item;
use App\Category;
use Illuminate\Http\Request;
use Auth;
use App\User;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $orders = Order::select('*', 'title as item', 'orders.id as id')->join('items','items.id','=','item_id')->get();
        return view('admin.pages.orders', compact('user', 'orders'));
    }

    public function order(Order $order)
    {
        Order::where('id',$order->id)->update(['status' => 'Užsakymas Ruošiamas']);
        return redirect('/orders');
    }

    
}
