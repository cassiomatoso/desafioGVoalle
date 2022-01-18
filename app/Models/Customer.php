<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company', 
        'email', 
        'cnpj', 
        'city', 
        'uf', 
        'district', 
        'street', 
        'nro', 
        'complement'
    ];

    public function purchases()
    {
        return $this->hasOne(Purchase::class, 'customer_id');
    }
    
}
