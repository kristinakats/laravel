<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
   'id',
   'first_name',
   'last_name',
   'city',
   'address',
   'postcode',
   'telephone_number',
   'card_number'
    ];
     public function user()
    {
        return $this->belongsTo('App\User');
    }
 
    public function orderItems()
    {
        return $this->hasMany('App\OrderItem');
    }
}
