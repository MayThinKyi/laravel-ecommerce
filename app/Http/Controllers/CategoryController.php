<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    // Category List Page
    public function categoryListPage(){
        $categories=Category::when(request('searchKey'),function($query){
            $query->where('category_name','like','%'.request('searchKey').'%');
        })->orderBy('created_at','desc')->paginate(5);
        return view('admin.category.list',compact('categories'));
    }
    // Category Create Page
    public function categoryCreatePage(){
        return view('admin.category.CreatePage');
    }
    //Category Create
    public function categoryCreate(Request $request){
       $this->checkCategoryValidation($request);
       $categoryData=$this->setCategoryData($request);
       Category::create($categoryData);
       return redirect()->route('category#list')->with(['createSuccess'=>'Category created successfully!']);

    }
    //Category Delete
    public function categoryDelete($id){
       Category::where('id',$id)->delete();
       return redirect()->route('category#list')->with(['deleteSuccess'=>'Category deleted successfully!']);
    }
    //Category Edit Page
    public function categoryEditPage($id){
        $category=Category::where('id',$id)->first();
       return view('admin.category.editPage',compact('category'));
    }
    //Category Update
    public function categoryUpdate(Request $request,$id){
       $this->checkCategoryValidation($request);
       $categoryUpdatedData=$this->setCategoryData($request);
       Category::where('id',$id)->update($categoryUpdatedData);
       return redirect()->route('category#list')->with(['updateSuccess'=>'Category updated successfully!']);
    }
    //Check Category
    private function checkCategoryValidation($request){
        Validator::make($request->all(),[
            'categoryName'=>'required',
        ])->validate();
    }
    //Set Category Data
    private function setCategoryData($request){
        return [
            'category_name'=>$request->categoryName
        ];
    }
}
