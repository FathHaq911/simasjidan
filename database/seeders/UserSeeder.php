<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'      => 'Admin Role',
            'email'      => 'admin@idn.ac.id',
            'password'     => bcrypt('password'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name'      => 'User Role',
            'email'      => 'user@idn.ac.id',
            'password'     => bcrypt('password'),
        ]);

        $user->assignRole('user');
    }
}
