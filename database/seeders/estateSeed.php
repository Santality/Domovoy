<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class estateSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estates')->insert([
            ['title_estate' => 'Дом'],
            ['title_estate' => 'Участок'],
            ['title_estate' => 'Квартира'],
            ['title_estate' => 'Комната'],
        ]);
    }
}
