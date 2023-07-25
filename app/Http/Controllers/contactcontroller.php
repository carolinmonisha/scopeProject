<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class contactcontroller extends Controller
{
    public function contact(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $subject=$request->input('subject');
        $message=$request->input('message');
        $to="antojoseph2000dec@gmail.com";
        $message="name:$name,email:$email,subject:$subject,message:$message";
        Mail::raw($message,function($email)use($to){
            $email->to($to)->subject('contact details');
        });
        return redirect('/');
    
}
public function changepass(Request $request){
    $email=$request->input('email');
    $to=$email;
    $pass=rand(1000,9999);
    $message="your new password:$pass";
    $emailcheck=User::where('email',$email)->get();
    if(count($emailcheck)){
          
        Mail::raw($message,function($email)use($to){
            $email->to($to)->subject('subject');

           
        });
        $pass1=Hash::make($pass);
        user::where('email',$email)->update(['password'=>$pass1]);
        return redirect('/login');
    }else{
        session()->flash('success','Incorrect Email');
        return redirect('/changepassword');
    }
    
}}