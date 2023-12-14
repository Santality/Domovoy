<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentDate = Carbon::now();
        DB::table('users')->insert([
            'lastname' => 'elder',
            'firstname' => 'admin',
            'email' => 'adminDomovoy@gmail.com',
            'phone' => '89173522600',
            'role' => 1,
            'password' => Hash::make('elderAdmin2004'),
            'created_at' => $currentDate,
            'updated_at' => $currentDate,
        ]);
    }
}
