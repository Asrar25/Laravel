<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_details extends Model
{
   public $table='product_details';
   public $primaryKey='id';
   public $incrementing =true;
   public $timestamps=false;

}
