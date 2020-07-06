<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Image;
use DB;
class ProductController extends Controller
{
    public function index(){
        $categories = Category::where('publication_status',1)->get();
        $brands = Brand::where('publication_status',1)->get();
        return view('admin.product.add-product',[
            'categories'=>$categories,
            'brands'=>$brands
        ]);
    }
    public function productInfoValidate($request){
        $this->validate($request,[
            'product_name'=>'required|unique:products,product_name',
            'product_price'=>'required',
            'product_quantity'=>'required',
            'product_image'=>'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
    }
    public function productImageUpload($request){
        $productImage = $request->file('product_image');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'product-images/';
        $imageUrl = $directory.$imageName;
        if(file_exists($imageUrl)){
            die('Image alreay exits');
        }else{
            Image::make($productImage)->resize(270,343)->save($imageUrl);
            return $imageUrl;
        }


    }
    public function productInfoSaveBasic($request,$imageUrl){
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->product_short_description = $request->product_short_description;
        $product->product_long_description = $request->product_long_description;
        $product->product_image = $imageUrl;
        $product->publication_status = $request->publication_status;
        $product->save();
    }
    public function saveProduct(Request $request){
        $this->productInfoValidate($request);
        $imageUrl = $this->productImageUpload($request);
        $this->productInfoSaveBasic($request,$imageUrl);
        return redirect('/product/add')->with('message','Save product info successfully.');
    }
    public function manageProduct(){
        $products = DB::table('products')
                ->join('categories','products.category_id','=','categories.id')
                ->join('brands','products.brand_id','=','brands.id')
                ->select('products.*','categories.category_name','brands.brand_name')
                ->get();
        return view('admin.product.manage-product',['products'=>$products]);
    }
    public function unpublishProduct($id){
        $product = Product::find($id);
        $product->publication_status = 0;
        $product->save();
        return redirect('/product/manage')->with('message','Product Info Unpublished Successfully.');

    }
    public function publishProduct($id){
        $product = Product::find($id);
        $product->publication_status = 1;
        $product->save();
        return redirect('/product/manage')->with('message','Product Info Published Successfully.');
    }
    public function viewProduct($id){
        $product = Product::find($id);
        $category = Category::find($product->category_id);
        $brand = Brand::find($product->brand_id);
        return view('admin.product.view-product',[
            'product'=>$product,
            'category'=>$category,
            'brand'=>$brand
        ]);
    }
    public function editProduct($id){
        $product = Product::find($id);
        $categories = Category::where('publication_status',1)->get();
        $brands =  Brand::where('publication_status',1)->get();
        return view('admin.product.edit-product',[
            'product'=>$product,
            'categories'=>$categories,
            'brands'=>$brands
        ]);
    }
    public function updateProductBasic($request,$product,$imageUrl=null){
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->product_short_description = $request->product_short_description;
        $product->product_long_description = $request->product_long_description;
        if($imageUrl){
            $product->product_image = $imageUrl;
        }
        $product->publication_status = $request->publication_status;
        $product->save();
    }
    public function updateProduct(Request $request){
        $productImage = $request->file('product_image');
        $product = Product::find($request->id);
        if($productImage){
            $product = Product::find($request->id);
            if(file_exists($product->product_image)){
                unlink($product->product_image);
            }
            $imageUrl = $this->productImageUpload($request);
            $this->updateProductBasic($request,$product,$imageUrl);

        }
        else
            {
                $this->updateProductBasic($request,$product);
        }
        return redirect('/product/manage')->with('message','Update product info successfully.');

    }
    public function deleteProduct($id){
        $product = Product::find($id);
        unlink($product->product_image);
        $product->delete();
        return redirect('/product/manage')->with('message','Delete product info successfully.');
    }

}
