<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('divisions')->insert([
            ['id' => 1, 'name' => 'manager'],
            ['id' => 2, 'name' => 'purchasing'],
            ['id' => 3, 'name' => 'HR'],
            ['id' => 4, 'name' => 'IT'],
            ['id' => 5, 'name' => 'Finance'],
        ]);
    }
}

