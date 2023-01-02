<?php

namespace Database\Seeders;

use App\Models\Cash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Cash::factory(102)->create();

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CashSeeder::class,
            KajianSeeder::class,
            DashboardTableSeeder::class,
            AgendaSeeder::class,
        ]);
    }
}
