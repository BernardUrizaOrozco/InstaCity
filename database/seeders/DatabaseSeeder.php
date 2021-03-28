<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call([
            PostSeeder::class,
            UserSeeder::class,
            ProfileSeeder::class,
            ProfileUserPivotSeeder::class,
        ]);
        
        DB::table('users')->insert([
            'name' => "Bernard Uriza",
            'username' => "insacity_iscool",
            'email' => "bernarduriza@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('12341234'), // password
            'remember_token' => Str::random(11),
        ]);
    }
}
