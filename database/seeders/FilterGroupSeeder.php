<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilterGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filter_group')->insert([
            'name' => 'Пол',
        ]);
        DB::table('filter_group')->insert([
            'name' => 'Одежда',
        ]);
        DB::table('filter_group')->insert([
            'name' => 'Поза',
        ]);
        DB::table('filter_group')->insert([
            'name' => 'Вид',
        ]);
    }
}
