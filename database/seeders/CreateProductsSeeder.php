<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class CreateProductsSeeder extends Seeder
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
                'price'=>'10000',
            ],
            [
                'title'=>'VoallePay',
                'description'=>'Plataforma de pagamento para gestão de recebíveis. Simples, ágil e segura.',
                'price'=>'5000',
            ]
        ];

        foreach ($product as $key => $value){
            Product::create($value);
        }

    }
}
