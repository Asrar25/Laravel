<?php

namespace App\Http\Controllers;

use App\Models\product_details;
use Illuminate\Http\Request;
use App\Models\Product;

class DataController extends Controller
{
    function DataIndex(){
        return view('addproduct');
    }
    function DataInsert(Request $request){
        $product_image =$request->input('image');
        $product_name=$request->input('product_name');
        $product_model=$request->input('model');
        $product_price=$request->input('price');
        $product_qunatity=$request->input('quantity');


        $isInsertSuccess= product_details::insert(['image'=>"$product_image",'product_name'=>"$product_name",'model'=>"$product_model",'price'=>$product_price,'quantity'=>$product_qunatity]);
    if($isInsertSuccess){
        $All_Products= product_details::all();
        echo '<script>alert("Data Added Successfully")</script>' ;
        return view('layout/layoutdesign',(['details'=>$All_Products]));

    }else{
        echo '<script>alert("Data Not Added")</script>';
        return view('addproduct');
    }
    }

    function GetAllProduct(){
        $All_Products= product_details::all();
        return view('layout/layoutdesign',(['details'=>$All_Products]));
    }

    function FindProduct($name){
        $All_Products= product_details::all();
        foreach($All_Products as $products){
            if($products['product_name']==$name){
                return view('getProduct',(['product'=>$products]));
            }
        }
    }

    function editproduct($name){
        $getproduct=product_details::where('product_name',$name)->first();
        return view('updateproduct',(['product'=>$getproduct]));
    }
}
