<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class CashSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $category = ['Sumbangan Pembangunan', 'Tromol Harian', "Tromol Jum'at", 'Dana Santunan']


        $n_debit    = ['Sumbangan Pembangunan', 'Koperasi', 'Tromol Harian', 'Sumbangan', 'Sumbangan Kegiatan', 'Dana Sisa Kegiatan'];
        $n_kredit   = ['Santunan', 'Kajian', 'Daurah', 'Restorasi Masjid', 'Gaji Karywan', 'Logistik'];

        $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 72; $i++){

            $shuffle = $faker->numberBetween(0,5);

            $d = $i;
            $m = "";
            if ($i < 31) {
                $m = "10";
            } elseif ($i < 61) {
                $m = "11";
                $d = $i - 30;
            } else {
                $m = "12";
                $d = $i - 60;
            }

    	    // insert data ke table cash menggunakan Faker
                if ( $shuffle % 2 == 0) {
                    DB::table('cashes')->insert([
                        'name'      => 'Abdullah',
                        'debit'     => $faker->numberBetween(500,10000)*1000,
                        'note'      => $n_debit[$shuffle],
                        'created_at'=> "2022-" . $m . "-" . $d . " " . $faker->time('H:i:s'),
                    ]);
                }

                if ( $shuffle % 2 == 1) {
                    DB::table('cashes')->insert([
                        'name'      => 'DKM Masjid',
                        'kredit'    => $faker->numberBetween(150,5000)*1000,
                        'note'      => $n_kredit[$shuffle],
                        'created_at'=> "2022-" . $m . "-" . $d . " " . $faker->time('H:i:s'),
                    ]);
                }

                if ( $i % 7 == 0) {
                    DB::table('cashes')->insert([
                        'note'      => 'Tromol Jum\'at',
                    ]);
                }
    	}
    }
}
