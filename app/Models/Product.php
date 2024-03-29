<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;    
    
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
       'title', 'description', 'price'
    ];

    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'product_id');
    }
}
