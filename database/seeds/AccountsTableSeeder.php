<?php

use App\Models\Account;
use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::create([
            'number'    => '12345',
            'balance'   =>  200.00,
            'user_id'   => 1,
            'agency_id' => 1
        ]);

        Account::create([
            'number'    => '54321',
            'balance'   =>  100.00,
            'user_id'   => 2,
            'agency_id' => 2
        ]);
    }
}
