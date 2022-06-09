<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++) {
            DB::table('asset')->insert([
                'id' => $i,
                'name' => Str::random(10),
                'author' => Str::random(10).'@gmail.com',
            ]);

            DB::table('asset')->insert([
                'id' => $i,
                'path' => Str::random(36),
            ]);

            DB::table('aidata')->insert([
                'id' => $i,
                'scheme' => Str::random(10),
                'a_color' => Str::random(3),
                'b_color' => Str::random(3),
                'c_color' => Str::random(3),
                'd_color' => Str::random(3),
                'e_color' => Str::random(3),
            ]);

            DB::table('asset_aidata')->insert([

                'asset_id' => $i,
                'aidata_id' => $i,
            ]);

            DB::table('asset_image')->insert([

                'asset_id' => $i,
                'image_id' => $i,
            ]);

        }



    }
}
