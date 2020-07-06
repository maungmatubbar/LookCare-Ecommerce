<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.add-category');
    }
    public function saveCategory(Request $request){
        $this->validate($request,[
            'category_name'=>'required|regex:/^[\pL\s\-]+$/u|max:15|unique:categories,category_name',
            'category_description'=>'required',
            'publication_status'=>'required'
        ]);
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('/category/add')->with('message','Save Category Info successfully');
    }
    public function manageCategory(){
        $categories = Category::all();
        return view('admin.category.manage-category',['categories'=>$categories]);
    }
    public function unpublishCategory($id){
            $category = Category::find($id);
            $category->publication_status = 0;
            $category->save();
            return redirect('/category/manage')->with('message','Category info unpublished successfully');
    }
    public function publishCategory($id){
            $category = Category::find($id);
            $category->publication_status = 1;
            $category->save();
            return redirect('/category/manage')->with('message','Category info published successfully');
    }
    public function editCategory($id){
            $category = Category::find($id);
            return view('admin.category.edit-category',['category'=>$category]);
    }
    public function updateCategory(Request $request){
        $this->validate($request,[
            'category_name'=>'required|regex:/^[\pL\s\-]+$/u|max:15|unique:categories,category_name',
            'category_description'=>'required',
            'publication_status'=>'required'
        ]);
        $category = Category::find($request->id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('/category/manage')->with('message','Category info update successfully');
    }
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/category/manage')->with('message','Category info delete successfully');
    }
}
