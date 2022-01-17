<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class CreateProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'title'=>'ERPVoalle',
                'description'=>'Sistema de Gestão Empresarial Voalle',
                'price'=>'5000',
            ]
        ];

        foreach ($product as $key => $value){
            Product::create($value);
        }

    }
}
