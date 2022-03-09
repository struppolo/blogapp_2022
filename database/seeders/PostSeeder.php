<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'titolo' => 'Prova post',
            'descrizione' => 'ciao mamma',
            'user_id' =>1
        ]);
        DB::table('posts')->insert([
            'titolo' => 'Prova post 2',
            'descrizione' => 'ciao mamma',
            'user_id' =>1
        ]);
        DB::table('posts')->insert([
            'titolo' => 'Prova post 3',
            'descrizione' => 'ciao mamma',
            'user_id' =>1
        ]);
    }
}
