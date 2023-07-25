<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class registercontroller extends Controller
{
    public function submit(Request $request){
      
        $validate=$request->validate([
            'image'=>'required',
            'firstname'=>'required','lastname'=>'required',
            'gender'=>'required','dateofbirth'=>'required',
            'phonenumber'=>'required','email'=>'required',
            'country'=>'required','state'=>'required',
            'city'=>'required','hobbies'=>'required',
            
        ]);
        $profilename=$request->input('Avatar');
        $fname=$request->input('firstname');
        $lname=$request->input('lastname');
        $gender=$request->input('gender');
        $dateofbirth=$request->input('dateofbirth');
        $phone=$request->input('phonenumber');
        $mail=$request->input('email');
        $country=$request->input('country'); 
        $city=$request->input('city');
        $states=$request->input('state');
        $hobbies=$request->input('hobbies');
        $hobbies=implode(",",$hobbies); 
        $image=$request->file('image');
        $image_name=$image->getClientOriginalName();
        $image->storeAs('public/uploads',$image_name);
        $pass=rand(1000,10000);
        $check=User::where('email',$mail)->get();
        $ccc="Your password:$pass";
        Mail::raw($ccc,function($email)use($mail){
            $email->to($mail)->subject('password');
        });
        if(count($check)){
            @session()->flash('success','You exit already');
            return redirect('/Registration');
        }else{
            User::create(['name'=>$fname,'email'=>$mail,'password'=>Hash::make($pass)]);
            $u_id=User::where('email',$mail)->pluck('id');
           

        }
        
        

        
        register::create(['FirstName'=>$fname,'LasstName'=>$lname,'Gender'=>$gender,'Date_of_Birth'=>$dateofbirth,'PhoneNumber'=>$phone,'email'=>$mail,'Country'=>$country,'city'=>$city,'state'=>$states,'image'=> $image_name,'Hobbies'=>$hobbies]);
        @session()->flash('success','great'); 
       return redirect('/login');
}

    public function login(Request $request){

        $check=$request->only('email','password');
        if (Auth::attempt($check)){
            return redirect('/');
        }
        else{
            return redirect('/login');
        }



        
        
    }
    public function logout(){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenaratetoken();
        
    
        
        
    }
}

