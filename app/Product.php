<?php

namespace App;
use App\Product;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
   'id',
   'name',
   'description',
   'price',
   'imageurl'
   ];
}
