<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complain;
class ComplainController extends Controller
{
public function index()
{
	return view('index');
}

 public function store(Request $request)
{
	 $obj=new Complain;
      $obj->complains=$request->complains;
      $obj->save();
      return redirect()->back();
}
}
