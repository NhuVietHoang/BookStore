<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Product_supplier;
use App\Models\Supplier;
use Carbon\Carbon;

class WarehouseController extends Controller
{
    //
    public function getWarehouse(){
        $categories=Category::all();
        $product=Product::all();
        return view('backend.warehouse.index')->with([
            'categories'=>$categories,
            'product'=>$product
        ]);
    }

    public function getSupplier(){
        $products = Product::all();
        $supplier = Supplier::all();

        return view('backend.warehouse.supplier')->with([
            'products'=> $products,
            'supplier'=> $supplier,
        ]);
    }
    public function postSupplier(Request $request){
        $supplier = new Supplier();
        $supplier->name     = $request->name;
        $supplier->phone    = $request->phone;
        $supplier->email    = $request->email;
        $supplier->address  = $request->address;
        $supplier ->save();

        $id_supplier = Supplier::where('name',$request->name)->first();
        $id_prd = $request->id_product;
        foreach($id_prd as $id){
            $supplier_prd = new Product_supplier();
            $supplier_prd->product_id = $id;
            $supplier_prd->supplier_id= $id_supplier->id;
            $supplier_prd->save();
            
        }
        return redirect()->back()->with('success','tạo nhà cung cấp thành công');
    }
}
