<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory; 
    
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
       'amount', 'created_at', 'customer_id', 'product_id', 'user_id'
    ];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
