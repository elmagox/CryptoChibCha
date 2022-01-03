<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Crypto',
            'last_name' => 'Chibcha Test',
            'email' => 'test@chibchaapps.com',
            'password' => bcrypt('password'),
        ]);
    }
}
