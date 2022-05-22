<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image')->insert([
            'gender_id' => '1',
            'cloth_id' => '1',
            'pose_id' => '1',
            'view_id' => '1',
            'url' => 'https://chto-takoe-lyubov.net/wp-content/uploads/2020/04/Risunki-dlya-srisovki-karandashom-lyudi-30.jpg',
        ]);
    }
}
