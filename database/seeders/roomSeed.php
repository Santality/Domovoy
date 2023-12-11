<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roomSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            ['title_room' => '1 комната'],
            ['title_room' => '2 комнаты'],
            ['title_room' => '3 комнаты'],
            ['title_room' => '4 комнаты'],
            ['title_room' => '5 комнат и больше'],
            ['title_room' => 'Свободная планировка'],
            ['title_room' => 'Студия'],
        ]);
    }
}
