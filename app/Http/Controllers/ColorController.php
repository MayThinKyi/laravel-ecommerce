<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ColorController extends Controller
{
    //Color List Page
    public function colorListPage(){
        $colors=Color::when(request('searchKey'),function($query){
            $query->where('color_name','like','%'.request('searchKey').'%');
        })->orderBy('created_at','desc')->get();
        return view('admin.colors.list',compact('colors'));
    }
    //Color Create Page
    public function colorCreatePage(){
        return view('admin.colors.createPage');
    }
    //Color Create
    public function colorCreate(Request $request){
        $this->checkColorValidation($request);
        $colorData=$this->setColorData($request);
        Color::create($colorData);
        return redirect()->route('color#list')->with(['createSuccess'=>"Color created successfully!"]);
    }
    //Color Edit Page
    public function colorEditPage($id){
        $color=Color::where('id',$id)->first();
       return view('admin.colors.editPage',compact('color'));
    }
    //Color Update
    public function updateColor(Request $request,$id){
        $this->checkColorValidation($request);
        $colorUpdatedData=$this->setColorData($request);
        Color::where('id',$id)->update($colorUpdatedData);
        return redirect()->route('color#list')->with(['updateSuccess'=>"Color updated successfully!"]);
    }
    //Color Delete
    public function deleteColor($id){
        Color::where('id',$id)->delete();
    return redirect()->route('color#list')->with(['deleteSuccess'=>"Color deleted successfully!"]);

    }
    //Check Color Validation
    private function checkColorValidation($request){
        Validator::make($request->all(),[
            'colorName'=>'required'
        ])->validate();
    }
    //Set Color Data
    private function setColorData($request){
        return [
            'color_name'=>$request->colorName
        ];
    }
}
