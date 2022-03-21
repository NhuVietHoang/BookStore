<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class CategoryController extends Controller
{
    public function index(){
     
        
        $categories= Category::paginate(10);  
      
        return view('backend.category.index')
        ->with([
            'categories'=> $categories,
            
        ]);
    }


    public function createCategory(){
        return view('backend.category.create');
    }

    public function postCategory(CategoryRequest $request){
        $category=new Category();
        $category->name= $request->name;
        $category->phone=$request->phone;
        $category->descriptions=$request->description;
        $category->save();

        return redirect()->back()->with('success','Tạo danh mục thành công');
    }

    public function getEditCategory($id){
        $category= Category::find($id);
        return response()->json($category);
    }

    public function editCategory(Request $request){
            // dd($request);
            $category= Category::find($request->id);
            $category->name= $request->name;
            $category->phone=$request->phone;
            $category->descriptions=$request->description;
            $category->save();
            return redirect('admin/category');
            

    }

    public function deleteCategory($id){
            $categories= Category::find($id);
            $categories->delete();
            return response()->json(['success'=>'Xóa thành công']);
    }
}
