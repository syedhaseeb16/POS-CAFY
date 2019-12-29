<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoginModal;
class LoginController extends Controller
{
  
  public function index()
  {
   if(session()->get('user') =="")
   {
    return view('LoginBootstrap');
  } else{
    return view('index');
  }

}
public function store(Request $request)
{
  $obj=new LoginModal;
  $obj->pass=$request->pass;
  $obj->email=$request->email;
  $obj->save();
  return redirect()->back();
}
public function find(Request $request)
{   
 $tests=LoginModal::all();
 $tests = $tests->values()->all();
 
      // $test = LoginModal::where('pass','=',$request->pass)->get();
 
 $test = LoginModal::where('pass' ,$request->pass)->where('email', $request->email)->get();
 foreach($test as $value){
   $request->session()->put('user',$request->pass);

      // echo "$value->email";
   return view('index');
   
 }

 return redirect()->back();

}







}
