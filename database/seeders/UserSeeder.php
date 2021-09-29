<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=factory(\App\Models\User::factory()->count(100)->create());
        $userDomicilio=factory(\App\Models\UserDomicilio::factory()->count(100)->create());
    }
}
