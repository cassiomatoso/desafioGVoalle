<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company', 'email', 'cnpj', 'address'
    ];

    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'costumer_id');
    }
    
}
