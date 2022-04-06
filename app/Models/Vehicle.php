<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
         'vehicle_title' ,
         'vehicle_overview' ,
         'price' ,
         'fule_type' ,
         'model_year' ,
         'capacity' ,
         'image1' ,
         'image2' ,
         'image3' ,
         'image4' ,
         'image5' 
       
    ];
}
