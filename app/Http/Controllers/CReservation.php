<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
class CReservation extends Controller
{
    public function index()
{
	return view('index');
}

 public function store(Request $request)
{
	 $obj=new Reservation;
      $obj->DT=$request->DT;
      $obj->peoples=$request->peoples;
      
      $obj->save();
      return redirect()->back();
}
}
