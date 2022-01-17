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
       'amount', 'created_at', 'costumer_id', 'product_id', 'user_id'
    ];
}