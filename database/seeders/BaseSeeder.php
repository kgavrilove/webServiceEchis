<?php

namespace Database\Seeders;

use Faker\Factory;
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
        $faker=Factory::create();
        for($i=0;$i<10;$i++) {
            DB::table('asset')->insert([
                'id' => $i,
                'name' => $faker->word(),
                'author' => $faker->name().'@gmail.com',
            ]);

            DB::table('asset')->insert([
                'id' => $i,
                'path' => $faker->word(),
            ]);

            DB::table('aidata')->insert([
                'id' => $i,
                'scheme' => $faker->word(),
                'a_color' => $faker->numberBetween(0,255),
                'b_color' => $faker->numberBetween(0,255),
                'c_color' => $faker->numberBetween(0,255),
                'd_color' => $faker->numberBetween(0,255),
                'e_color' => $faker->numberBetween(0,255),
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
