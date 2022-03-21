<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index(){
        $categories=Category::all();
        $product=Product::all();

        return view('backend.product.index')->with([
            'product'=>$product,
            'categories'=>$categories,
        ]);
    }

    public function createProduct(){
        $categories= Category::all();
        // dd($categories);
        return view('backend.product.create')->with([
            'categories'=>$categories,
        ]);
    }

    public function postProduct(ProductRequest $request){
        
        //  dd(Category::where('name',$request->category)->first()->id);
        $product= new Product();
        $product->name = $request->name;
        $product->category_id = Category::where('name',$request->category)->first()->id;
        $product->description = $request->description;
        $product->quantity= $request->quantity;
        $product->origin_price = $request->origin_price;
        $product->sale_price = $request->sale_price;
        $product->origin_price = $request->origin_price;
        $product->status = $request->status;
        $product->user_id= $request->user_id;
        $product->image=  $request->image;
        $product->save();

        return redirect()->back()->with('success','Tạo sản phẩm thành công');


    }

    public function searchProduct(Request $request){
            $categories = Category::all();
            $products= Product::where('name','LIKE','%'.$request->keywork.'%')->get();
            
        return view('backend.product.show')->with([
            'products'=>$products,
            'categories'=>$categories
        ]);    
        
    }
    public function getProduct($slug){
        $categories = Category::all();
        $id_categories=DB::table('categories')->where('slug',$slug)->first()->id;
        
        $products= Product::where('category_id',$id_categories)->get();
        return view('backend.product.show')->with([
            'products'=>$products,
            'categories'=>$categories
        ]);
    }

    public function deleteProduct($id){
        $products= Product::find($id);
        $products->delete();

        return response()->json(['success'=>'đã xóa thành công']);


    }
    public function getEditProduct($id){
        $product= Product::find($id);
        
        return response()->json($product);
    }
}
