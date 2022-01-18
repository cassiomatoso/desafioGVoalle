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
            ],
            [
                'title'=>'VoalleAcademy',
                'description'=>'Plataforma de cursos para estudantes de tecnologia.',
                'price'=>'15000',
            ],
            [
                'title'=>'VoalleParking',
                'description'=>'Sistema para administração de estacionamento rotativo',
                'price'=>'2000',
            ],
            [
                'title'=>'VoalleGym',
                'description'=>'Plataforma com informações sobre saúde para os colaboradores do Grupo Voalle',
                'price'=>'2000',
            ],
            [
                'title'=>'BlogVoalle',
                'description'=>'Blog completo com hospedagem gratuita.',
                'price'=>'1000',
            ],
            [
                'title'=>'VoalleHelp',
                'description'=>'Plataforma focada em atender demandas e organizar chamados para TI.',
                'price'=>'3000',
            ],
            [
                'title'=>'CMSVoalle',
                'description'=>'Sistema de Gestão de Conteúdos. Mais que um blog.',
                'price'=>'11000',
            ],
            [
                'title'=>'VoalleKids',
                'description'=>'Plataforma gameficada com foco no desenvolvimento infantil',
                'price'=>'12000',
            ]
        ];

        foreach ($product as $key => $value){
            Product::create($value);
        }

    }
}
