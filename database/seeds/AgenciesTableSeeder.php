<?php

use App\Models\Agency;
use Illuminate\Database\Seeder;

class AgenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agency::create([
            'name' => 'Agência Capgemini',
            'number' => '12345',
        ]); 

        Agency::create([
            'name' => 'Agência Teste',
            'number' => '54321',
        ]); 
    }
}
