<?php

namespace Database\Seeders;

use App\Models\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\Http;

class KajianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nov = json_decode(Http::get('https://api.myquran.com/v1/sholat/jadwal/1204/2022/11'));
        $des = json_decode(Http::get('https://api.myquran.com/v1/sholat/jadwal/1204/2022/12'));

        $faker = Faker::create('id_ID');

    	for($i = 0; $i <= 58; $i++){

            $shuffle = $faker->numberBetween(0,5);

    	    // insert data ke table cash menggunakan Faker
                if ( $i % 7 == 0 && $i <= 29) {
                    DB::table('kajians')->insert([
                        'name'      => $faker->name(),
                        'title'     => $faker->sentence(),
                        'label'     => $nov->data->jadwal[$i]->tanggal,
                    ]);
                } elseif ( $i % 7 == 0 && $i > 29) {
                    DB::table('kajians')->insert([
                        'name'      => $faker->name(),
                        'title'     => $faker->sentence(),
                        'label'     => $des->data->jadwal[$i - 29]->tanggal,
                    ]);
                }
    	}
    }
}
