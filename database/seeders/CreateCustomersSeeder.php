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
                'city' => 'Santa Rosa',
                'uf' => 'Rio Grande do Sul',
                'district' => 'Centro',
                'street'=>'Avenida Tuparandi',
                'nro' => '1741',
                'complement' => ''
            ],
            [
                'company'=>'Sygo',
                'email'=>'contabilidade@sygo.com.br',
                'cnpj'=>'08.411.698/0001-40',
                'city' => 'Santo Cristo',
                'uf' => 'Rio Grande do Sul',
                'district' => 'Centro',
                'street'=>'Rua Marechal Deodoro',
                'nro' => '2130',
                'complement' => ''
            ],
            [
                'company'=>'Benderson Provedor de Internet',
                'email'=>'contato@benderson.com.br',
                'cnpj'=>'10.454.392/0001-12',
                'city' => 'Santo Ângelo',
                'uf' => 'Rio Grande do Sul',
                'district' => 'Centro',
                'street'=>'Rua Tiradentes',
                'nro' => '1234',
                'complement' => ''
            ],
            [
                'company'=>'MKSNET INFORMATICA LTDA',
                'email'=>'contato@mksnet.com.br',
                'cnpj'=>'03.435.851/0001-55',
                'city' => 'Palmeira das Missões',
                'uf' => 'Rio Grande do Sul',
                'district' => 'Centro',
                'street'=>'Rua General Firmino',
                'nro' => '51',
                'complement' => 'Sala 3'
            ],
            [
                'company'=>'San Internet Brasil LTDA',
                'email'=>'suporte@saninternet.com',
                'cnpj'=>'02.390.594/0001-10',
                'city' => 'Santo Ângelo',
                'uf' => 'Rio Grande do Sul',
                'district' => 'Centro',
                'street'=>'25 de Julho',
                'nro' => '343',
                'complement' => 'Sala 3'
            ],
            [
                'company'=>'CIACOM Provedor de Internet',
                'email'=>'contato@ciacom.com.br',
                'cnpj'=>'05.121.961/0001-78',
                'city' => 'Santo Antônio das Missões',
                'uf' => 'Rio Grande do Sul',
                'district' => 'Centro',
                'street'=>'Rua Adriano Dorneles',
                'nro' => '3259',
                'complement' => 'Sala 1'
            ]
            
        ];

        foreach ($customer as $key => $value){
            Customer::create($value);
        }
    }
}
