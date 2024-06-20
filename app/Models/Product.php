<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   public static function listall(){
    return [

            [
            'id'=>1,
            'image'=>'images/laptop.jpg',
            'product_name'=>'Laptop',
            'model'=>'lenovo',
            'price'=>20000,
            'quantity'=>3
            ],
            [
            'id'=>2,
            'image'=>'images/apple2.png',
            'product_name'=>'Mobile',
            'model'=>'Apple',
            'price'=>500000,
            'quantity'=>1
            ],
            [
             'id'=>3,
             'image'=>'images/mivi2.jpg',
             'product_name'=>'Speaker',
             'model'=>'Mivi',
             'price'=>1400,
             'quantity'=>3
            ],
            [
                'id'=>4,
                'image'=>'images/sensor4.png',
                'product_name'=>'Sensor',
                'model'=>'Ultra Sonic',
                'price'=>640,
                'quantity'=>6
            ],
            [
                'id'=>5,
                'image'=>'images/ac.jpg',
                'product_name'=>'Air Cooler',
                'model'=>'BlueStar',
                'price'=>15999,
                'quantity'=>3
                ]


            ];
   }

   public static function findproduct($name){
       $pro=self::listall();
       foreach($pro as $product){
        if($product['product_name']==$name){
            return $product;
        }
       }
   }
}
