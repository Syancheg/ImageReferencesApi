<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filter')->insert([
            'name' => 'Мужчина',
            'group_id' => '1',
        ]);
        DB::table('filter')->insert([
            'name' => 'Женщина',
            'group_id' => '1',
        ]);
        DB::table('filter')->insert([
            'name' => 'Одетые',
            'group_id' => '2',
        ]);
        DB::table('filter')->insert([
            'name' => 'Раздетые',
            'group_id' => '2',
        ]);
        DB::table('filter')->insert([
            'name' => 'Статичные',
            'group_id' => '3',
        ]);
        DB::table('filter')->insert([
            'name' => 'В движении',
            'group_id' => '3',
        ]);
        DB::table('filter')->insert([
            'name' => 'Спереди',
            'group_id' => '4',
        ]);
        DB::table('filter')->insert([
            'name' => 'Сзади',
            'group_id' => '4',
        ]);
        DB::table('filter')->insert([
            'name' => 'Сбоку',
            'group_id' => '4',
        ]);
    }
}
