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
                'amount'=>'5000',
                'user_id'=>'1',
                'product_id'=>'1',
                'customer_id'=>'1'
            ],  
            [
                'amount'=>'5000',
                'user_id'=>'1',
                'product_id'=>'1',
                'customer_id'=>'2'
            ],  
            [
                'amount'=>'5000',
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
