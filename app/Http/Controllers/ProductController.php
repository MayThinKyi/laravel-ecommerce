<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
      //Product List Page
    public function productListPage(){
        $products=Product::when(request('searchKey'),function($query){
            $query->where('product_name','like','%'.request('searchKey').'%');
        })->select('products.*','categories.category_name')
        ->leftJoin('categories','products.product_category','categories.id')
        ->orderBy('products.created_at','desc')->paginate(5);

        return view('admin.product.List',compact('products'));
    }
    //Product Create Page
    public function productCreatePage(){
        $categories=Category::get();
        $sizes=Size::get();
        $colors=Color::get();
        return view('admin.product.createPage',compact('categories','sizes','colors'));
    }
    //Product Create
    public function productCreate(Request $request){

        $this->checkProductValidation($request,'create');
       $productData=$this->setProductData($request);
       $productData['sizes'] = $request->input('sizes');
        $productData['colors'] = $request->input('colors');
      /*  $imgArray=[];
       if($request->file('productImages')){
        foreach ($request->file('productImages') as $image) {
         array_push( $imgArray,uniqid().$image->getClientOriginalName());
         $productData['product_images']=$imgArray;
         $image->storeAs('public/images',uniqid().$image->getClientOriginalName());
        }
        */
        if($request->file('productImages')){

            foreach ($request->file('productImages') as $image) {
                $img=['image'=>$image];
               $this->validateImage($img);
              $name=uniqid().$image->getClientOriginalName();
              $image->storeAs('public',$name);
              $data[]=$name;
            }
        }

       $productData['product_images']=json_encode($data);;

       Product::create($productData);
        return redirect()->route('product#list')->with(['createSuccess'=>"Product created successfully!"]);




        }
        //Validate each image from array
        public function validateImage($request){
            Validator::make($request,[
                'image'=>'required|mimes:jpeg,tiff,webp,png,jpg',
            ])->validate();
        }

    //Product Edit Page
    public function productEditPage($id){
         $categories=Category::get();
        $sizes=Size::get();
        $colors=Color::get();
       $product=Product::where('id',$id)->first();
       return view('admin.product.editPage',compact('product','categories','sizes','colors'));
    }
    //Product Update
    public function productUpdate(Request $request,$id){

       $this->checkProductValidation($request,'update');
       $productUpdatedData=$this->setProductData($request);
       $productUpdatedData['sizes'] = $request->input('sizes');
        $productUpdatedData['colors'] = $request->input('colors');


         if($request->file('productImages')){
              $oldImagesArray=Product::where('id',$id)->first()->toArray()['product_images'];


                       foreach (json_decode($oldImagesArray) as $image) {
                       Storage::delete('public/'.$image);

                       }
            foreach ($request->file('productImages') as $image) {
              $name=uniqid().$image->getClientOriginalName();
              $image->storeAs('public',$name);
              $data[]=$name;
            }
            $productUpdatedData['product_images']=json_encode($data);;

        }



       Product::where("id",$id)->update($productUpdatedData);
        return redirect()->route('product#list')->with(['updateSuccess'=>"Product updated successfully!"]);
    }
    //Product Delete
    public function deleteProduct($id){
        Product::where('id',$id)->delete();
        return redirect()->route('product#list')->with(['deleteSuccess'=>'Product deleted successfully!']);
    }
    //Check Product Validation
    private function checkProductValidation($request,$status){
        Validator::make($request->all(),[
            'productName'=>'required|',
            'productCategory'=>'required|',
            'productDescription'=>'required|',
            'productPrice'=>'required|',
            'productImages'=>$status=='create'?'required':''
        ])->validate();
    }
    //Set Product Data
   private function setProductData($request){
        return [
            'product_name'=>$request->productName,
            'product_category'=>$request->productCategory,

            'product_description'=>$request->productDescription,
            'product_price'=>$request->productPrice,

        ];

    }

}
