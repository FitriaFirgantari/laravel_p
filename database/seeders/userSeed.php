<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;


class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'admin1',
            'email' => 'admin1@min.com',
            'password' => bcrypt('admin1'),
            'remember_token' => Str::random(60),
        ]);
    }
}
