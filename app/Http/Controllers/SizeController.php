<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SizeController extends Controller
{
    //Size List Page
    public function sizeListPage(){
        $sizes=Size::when(request('searchKey'),function($query){
            $query->where('size_name','like','%'.request('searchKey').'%');
        })->orderBy('created_at','desc')->get();
        return view('admin.sizes.list',compact('sizes'));
    }
    //Size Create Page
    public function sizeCreatePage(){
        return view('admin.sizes.createPage');
    }
    //Size Create
    public function sizeCreate(Request $request){
        $this->checkSizeValidation($request);
        $sizeData=$this->setSizeData($request);
        Size::create($sizeData);
        return redirect()->route('size#list')->with(['createSuccess'=>"Size created successfully!"]);
    }
    //Size Edit Page
    public function sizeEditPage($id){
        $size=Size::where('id',$id)->first();
       return view('admin.sizes.editPage',compact('size'));
    }
    //Size Update
    public function updateSize(Request $request,$id){
        $this->checkSizeValidation($request);
        $sizeUpdatedData=$this->setSizeData($request);
        Size::where('id',$id)->update($sizeUpdatedData);
        return redirect()->route('size#list')->with(['updateSuccess'=>"Size updated successfully!"]);
    }
    //Size Delete
    public function deleteSize($id){
        Size::where('id',$id)->delete();
    return redirect()->route('size#list')->with(['deleteSuccess'=>"Size deleted successfully!"]);

    }
    //Check Size Validation
    private function checkSizeValidation($request){
        Validator::make($request->all(),[
            'sizeName'=>'required'
        ])->validate();
    }
    //Set Size Data
    private function setSizeData($request){
        return [
            'size_name'=>$request->sizeName
        ];
    }
}
