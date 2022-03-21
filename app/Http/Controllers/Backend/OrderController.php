<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order_rent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //
    public function rent(){
        $products = Order_rent::all();
        return view('backend.order.orderrent')->with([
           'products' => $products, 
        ]);
    }

    public function orderrent(Request $request){
        $product_rent                  = new Order_rent();
        $product_rent->customer_id     = $request->customer_id;
        $product_rent->start_day        = $request->start_day;
        $product_rent->expiration_date = $request->expiration_date;
        $product_rent->name_product    = $request->name_product;
        $product_rent->price            = $request->total;
        $product_rent->type            = $request->type;
        $product_rent->save();

        return redirect()->back()->with('success','Thuê Hàng Thành Công');
    }
    public function editOrder(Request $request){
        $order = Order_rent::where('id',$request->id)->first();
        $order->status = $request->status;
        $order->save();
        return redirect()->back();
    }

    public function update(){
        $thisday = Carbon::today('Asia/Ho_Chi_Minh');
       
        // dd(Carbon::now('Asia/Ho_Chi_Minh'));
        $now= Order_rent::all();
       
        foreach($now as $n){
            dd(strtotime($thisday));
            if($thisday == $n->start_day){
                echo "oke";
            }
            if($thisday == $n->expiration_date){
                echo "okcc";
            }
        }
        
       
    }
}
