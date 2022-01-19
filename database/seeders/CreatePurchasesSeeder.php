<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Purchase;

class CreatePurchasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $purchase = [
            [
                'obs'=>'Não há',
                'user_id'=>'1',
                'product_id'=>'1',
                'customer_id'=>'1'
            ],  
            [
                'obs'=>'Contrato de 3 meses para o BarraShopping',
                'user_id'=>'1',
                'product_id'=>'2',
                'customer_id'=>'2'
            ],  
            [
                'obs'=>'Com todos os módulos',
                'user_id'=>'1',
                'product_id'=>'1',
                'customer_id'=>'3'
            ]          
        ];

        foreach ($purchase as $key => $value){
            Purchase::create($value);
        } 
    }
}
