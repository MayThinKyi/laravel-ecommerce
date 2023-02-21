<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    //User Contact Page
    public function userContactPage(){
        if(Auth::user()){
            $carts=Cart::where('user_id',Auth::user()->id)->get();
        }else{
            $carts='';
        }
        $categories=Category::orderBy('created_at','desc')->get();
        return view('user.contact',compact('categories','carts'));
    }
    //Send User Contact
    public function sendUserContact(Request $request){
        $this->checkContactValidation($request);
        $userContactData=$this->setContactData($request);
        Contact::create($userContactData);
        return back()->with(['createSuccess'=>'Your message was sent successfully!']);
    }
    //Admin Contact Details Page
    public function contactDetailsPage($id){
      $contact=Contact::where('id',$id)->first();
      return view('admin.contact.details',compact('contact'));
    }
    //Admin Contact List Page
    public function adminContactList(){
        $contacts=Contact::orderBy('id','desc')->paginate(8);
        return view('admin.contact.list',compact('contacts'));
    }
    //Check Contact Form Validation
    private function checkContactValidation($request){
        Validator::make($request->all(),[
            'username'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ])->validate();
    }
    //Set Contact Data
    private function setContactData($request){
        return [
            'username'=>$request->username,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message
        ];
    }
}
