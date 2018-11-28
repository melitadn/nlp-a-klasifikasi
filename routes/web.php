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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/prediction', function () {
    return view('prediction');
})->name('animal.prediction');

Route::get('/predict',function(){
    if(Request::ajax()){
      return 'getRequest has loaded complete';
    }
  });
  
Route::post('/predict/store','ZooController@store')->name('predict.store');