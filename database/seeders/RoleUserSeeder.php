<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);
        $user->roles()->attach(1);
        $user2 = User::find(2);
        $user2->roles()->attach(2);
    }
}
