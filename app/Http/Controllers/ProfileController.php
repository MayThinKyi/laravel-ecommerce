<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
     //Change Password Page
    public function changePasswordPage(){
        return view('admin.profile.ChangePasswordPage');
    }
    //Change Password
    public function changePassword(Request $request){
        $this->checkPasswordChangeValidation($request);
       $oldHashedPassword=User::where('id',Auth::user()->id)->first()->toArray()['password'];
       if(password_verify($request->oldPassword,$oldHashedPassword)){
        $newHashedPassword=Hash::make($request->newPassword);
        User::where('id',Auth::user()->id)->update(['password'=>$newHashedPassword]);
        return back()->with(['changePasswordSuccess'=>"Password has changed successfully!"]);
      }else{
        return back()->with(['oldPasswordError'=>'Your old password does not credential!']);
      }
    }
    //Admin Profile Page
    public function adminProfilePage(){
        $user=User::where('id',Auth::user()->id)->first()->toArray();
        return view('admin.profile.profile',compact('user'));
    }
    //Admin Edit Profile Page
    public function adminEditProfilePage(){
        $user=User::where('id',Auth::user()->id)->first()->toArray();
        return view("admin.profile.editProfile",compact('user'));
    }
    //Admin Update Profile
    public function adminUpdateProfile(Request $request){
        $this->checkUpdateProfileValidation($request);
        $profileUpdatedData=$this->setUpdateProfileData($request);
        if($request->file('image')){
            $oldFileName=User::where('id',Auth::user()->id)->first()->toArray()['image'];
            if($oldFileName!=null){
                Storage::delete('public/'.$oldFileName);
            }
            $fileName=uniqid().$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public',$fileName);
            $profileUpdatedData['image']=$fileName;
        }
        User::where('id',Auth::user()->id)->update($profileUpdatedData);
        return redirect()->route('profile#page')->with(['updateSuccess'=>'Profile updated successfully!']);
    }
    //Validation for Admin Update Profile
    private function checkUpdateProfileValidation($request){
        Validator::make($request->all(),[
            'image'=>'mimes:png,jpg,svg,jpeg,webp',
            'name'=>'required|',
            'email'=>'required|',
            'phone'=>'required|',
            'address'=>'required|'
        ])->validate();
    }
    //Set Update Profile Data
    private function setUpdateProfileData($request){
       return [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
        ];
    }
    //Validation for Change Password Data
    private function checkPasswordChangeValidation($request){
        Validator::make($request->all(),[
            'oldPassword'=>'required|min:6',
            'newPassword'=>'required|min:6',
            'confirmPassword'=>'required|min:6|same:newPassword'
        ])->validate();
    }

}
