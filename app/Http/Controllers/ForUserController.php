<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Item;
use App\Order;

class ForUserController extends Controller
{
    public function category(){
        return response()->json(Category::get(), 200);
    }
    public function singleCategory($id){
        return response()->json(Item::select('*')->where('items.cat_id',$id)->get(), 200);
    }
    public function item(){
        return response()->json(Item::select('*', 'categories.name as kategorija', 'items.id as id')->join('categories','categories.id','=','items.cat_id')->get(), 200);
    }
    public function singleItem($id){
        return response()->json(Item::select('*', 'categories.name as kategorija', 'items.id as id')->join('categories','categories.id','=','items.cat_id')->find($id), 200);
    }
    public function postOrder(Request $request) {
        return response()->json(Order::create($request->all()), 201);
    }
}
