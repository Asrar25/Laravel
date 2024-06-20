<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

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
Route::get('/home',function(){
    return view('layout.layoutdesign',[
        'title'=>'Welcome To All',
        'body'=>'Product Table',
        'details'=>Product::listall()
    ]);
});

Route::get('/product/{name}',function($name){
    return view('getproduct',[
    'product'=>Product::findproduct($name)
]);
});

Route::get('/layout',function(){
    return view('layout.layoutdesign');
});
?>
