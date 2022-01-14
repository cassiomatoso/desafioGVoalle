<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Admin',
                'email'=>'admin@grupovoalle.com.br',
                'is_admin'=>'1',
                'password'=>bcrypt('admin@123')
            ],
            [
                'name'=>'Cliente',
                'email'=>'cliente@gmail.com.br',
                'is_admin'=>'0',
                'password'=>bcrypt('cliente@123')]
        ];

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
