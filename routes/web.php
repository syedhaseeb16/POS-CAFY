<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/free', function () {
  return view('free');
});
Route::get('/', function () {
  return view('index');
});
Route::get('/welcome', function () {
  return view('welcome');
});

Route::get('/admin', function () {
 if(session()->get('user') =="")
 {
  return view('LoginBootstrap');
} 
else
{
  $items= \App\Item::all();
  return view('admin.index',compact('items'));
}
});


Route::get('/statistics', function () {
  $com= \App\Complain::all();
  return view('admin.statistics',compact('com'));
});
Route::resource('items', 'ItemController');
Route::resource('sales', 'SaleController');
Route::resource('management', 'MController');
Route::resource('reserve', 'ReserveController');

// Route::get('/reserve', function () {
//   return view('admin.reserve');
// });

// Route::resource('products', 'ItemController'); 
Route::resource('sub','lcontroller');
Route::get('/Logout', function () {
  session()->put('user',"");
  return redirect('/admin');
});




















// Route::get('/', function () {
//      if(session()->get('user') =="")
//      {
//     return view('LoginBootstrap');
// } else{
// return view('index');
// }}
// );

Route::get('/Max', function () {
  return view('Max');
});
Route::get('/Admin', function () {
	if(session()->get('user') =="")
 {
  return view('LoginBootstrap');
} else{
  return view('index');
}
return view('LoginBootstrap');
});

Route::get('/tabs', function () {
  return view('tabs');
});


Route::get('/LoginBootstrap','LoginController@Login');
Route::post('/subm','LoginController@store');
Route::resource('submit','LoginController@find');
Route::post('/submitC','ComplainController@store');

Route::post('/tableSubmit','CReservation@store');



Route::get('/nav', function () {
  return view('navbar	');
});
