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
        $message = [];
        return view('admin.pages.orders', compact('user', 'orders', 'message'));
    }

    public function order(Order $order)
    {
        Order::where('id',$order->id)->update(['status' => 'Užsakymas Ruošiamas']);
        return redirect('/orders');
    }
    public function orderDone(Order $order)
    {
        $item = Item::select('*')->where('id',$order->item_id)->get();
        if($order->quantity <= $item[0]->count) {
            Order::where('id',$order->id)->update(['status' => 'Išsiųsta']);
            Item::where('id',$item[0]->id)->update(['count' => ($item[0]->count-$order->quantity)]);
        } elseif($order->quantity > $item[0]->count) {
            $message = ['Tiek šios prekės sandėlyje nėra '];
            $user = auth()->user();
            $orders = Order::select('*', 'title as item', 'orders.id as id')->join('items','items.id','=','item_id')->get();
           return view('admin.pages.orders', compact('message', 'orders', 'user'));
        }
        return redirect('/orders');
    }


}
