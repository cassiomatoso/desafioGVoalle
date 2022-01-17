<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CreateCustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * attributes: company, email, cnpj, address
     * @return void
     */
    public function run()
    {
        $customer = [
            [
                'company'=>'Sulnet',
                'email'=>'zilio@redesulnet.com.br',
                'cnpj'=>'10.220.038/0001-23',
                'address'=>'Avenida Tuparandi, 1741 Santa Rosa/RS'
            ],
            [
                'company'=>'Sygo',
                'email'=>'contabilidade@sygo.com.br',
                'cnpj'=>'08.411.698/0001-40',
                'address'=>'Rua Marechal Deodoro, 2130 Santo Cristo/RS'
            ],
            [
                'company'=>'Benderson Provedor de Internet',
                'email'=>'contato@benderson.com.br',
                'cnpj'=>'10.454.392/0001-12',
                'address'=>'Rua Tiradentes, 1234 Santo Ângelo/RS'
            ]
            
        ];

        foreach ($customer as $key => $value){
            Customer::create($value);
        }
    }
}
