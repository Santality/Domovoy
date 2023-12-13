<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['lastname' => 'elder','firstname' => 'admin','email' => 'adminDomovoy@gmail.com','phone' => '89173522600','password' => 'elderAdmin2004'],
        ]);
    }
}
