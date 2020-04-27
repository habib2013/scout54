<?php

use Illuminate\Database\Seeder;
use App\User;
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => str_random(10),
            'fullname' => str_random(10),
            'phone' => '09102929292',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);


    }
    }

