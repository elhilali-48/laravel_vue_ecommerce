<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    //protected $fillable = ['order_number',"user_id",'shipped_at'];



    // Relationship 

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }

    public function products() 
    {
        return $this->belongsToMany(Product::class)->withPivot('total_quantity','total_price');
    }
}
