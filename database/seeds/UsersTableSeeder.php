<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Capgemini',
            'email'     => 'capgemini@gmail.com',
            'password'  => bcrypt('capgemini123'),
            'cpf'       => '44794125062',
            'phone'     => '(85) 98709-1067',
            'address'   => 'Rua teste, 123, centro - Fortaleza-CE'
        ]);

        User::create([
            'name'      => 'teste',
            'email'     => 'teste@gmail.com',
            'password'  => bcrypt('capgemini123'),
            'cpf'       => '34777419002',
            'phone'     => '(85) 98709-1067',
            'address'   => 'Rua teste, 123, centro - Fortaleza-CE'
        ]);
    }
}
