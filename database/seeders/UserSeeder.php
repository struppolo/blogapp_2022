<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Emanuele',
            'email' => 'e.speca@infobasic.it',
            'created_at' => \Carbon\Carbon::now(),
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Mario',
            'email' => 'mario@infobasic.it',
            'created_at' => \Carbon\Carbon::now(),
            'password' => Hash::make('password'),
        ]);
    }
}
