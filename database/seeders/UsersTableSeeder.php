<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Alice',
                'email' => 'alice@example.com',
                'password' => Hash::make('password'),
                'divisions_id' => 3,
            ],
            [
                'id' => 2,
                'name' => 'Bob',
                'email' => 'bob@example.com',
                'password' => Hash::make('password'),
                'divisions_id' => 2,
            ],
            [
                'id' => 3,
                'name' => 'Charlie',
                'email' => 'charlie@example.com',
                'password' => Hash::make('password'),
                'divisions_id' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Diana',
                'email' => 'diana@example.com',
                'password' => Hash::make('password'),
                'divisions_id' => 4,
            ],
            [
                'id' => 5,
                'name' => 'Evan',
                'email' => 'evan@example.com',
                'password' => Hash::make('password'),
                'divisions_id' => 5,
            ],
        ]);
    }
}
