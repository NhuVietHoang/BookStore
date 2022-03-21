<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ShopController extends Controller
{
    //
    public function getShop(){
        $categories = Category::all();
        $products   = Product::paginate(9);
        return view('frontend.pages.shop')->with([
            'products'   => $products,
            'categories' => $categories,
        ]);
    }

    public function getShopSlug($slug){
        $categories = Category::all();
        $id_category = Category::where('slug',$slug)->first()->id;
        $products= Product::where('category_id',$id_category)->get();

        return view('frontend.pages.shop')->with([
            'products'=> $products,
            'categories'=>$categories
        ]);


    }
    public function getProduct($id){
        $products = Product::where('id',$id)->first();
       
        

        return view('frontend.pages.product')->with([
            'products'=> $products,
        ]);
    }
    
    public function addTocart($id){
        // session()->forget('cart');
        // print_r(session()->get('cart'));
        // dd('end');
        // session()->flush('cart');
        $product= Product::find($id);
        $cart = session()->get('cart');
        if(isset($cart[$id])){
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        }
        else{
            $cart[$id] =[
                'name'     => $product->name,
                'price'    => $product->origin_price,
                'rent'     => $product->rent_price,
                'quantity' => 1,
                'image'    => $product ->image
            ];

        session()->put('cart',$cart);
       return response()->json([
                'code'=>200,
                'message'=>'success',
       ],200);
            

        }
    }

    public function checkout(Request $request){
       $carts = session()->get('cart');
        return view('frontend.pages.checkout')->with([
            'carts'=>$carts,
        ]);
        
    }
    

    
}
