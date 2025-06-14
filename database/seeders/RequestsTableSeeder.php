<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequestsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('requests')->insert([
            ['id' => 1, 'user_id' => 1, 'description' => 'Auto-generated request 1', 'created_at' => '2025-04-14 17:00:14'],
            ['id' => 2, 'user_id' => 1, 'description' => 'Auto-generated request 2', 'created_at' => '2025-04-11 17:00:14'],
            ['id' => 3, 'user_id' => 4, 'description' => 'Auto-generated request 3', 'created_at' => '2025-05-11 17:00:14'],
            ['id' => 4, 'user_id' => 4, 'description' => 'Auto-generated request 4', 'created_at' => '2025-05-18 17:00:14'],
            ['id' => 5, 'user_id' => 5, 'description' => 'Auto-generated request 5', 'created_at' => '2025-05-22 17:00:14'],
            ['id' => 6, 'user_id' => 5, 'description' => 'Auto-generated request 6', 'created_at' => '2025-05-23 17:00:14'],
            ['id' => 7, 'user_id' => 1, 'description' => 'Extra request 7', 'created_at' => '2025-05-17 00:00:00'],
            ['id' => 8, 'user_id' => 1, 'description' => 'Extra request 8', 'created_at' => '2025-05-12 00:00:00'],
            ['id' => 9, 'user_id' => 1, 'description' => 'Extra request 9', 'created_at' => '2025-05-21 00:00:00'],
            ['id' => 10, 'user_id' => 1, 'description' => 'Extra request 10', 'created_at' => '2025-05-04 00:00:00'],
            ['id' => 11, 'user_id' => 1, 'description' => 'Extra request 11', 'created_at' => '2025-05-30 00:00:00'],
            ['id' => 12, 'user_id' => 1, 'description' => 'Extra request 12', 'created_at' => '2025-05-13 00:00:00'],
            ['id' => 13, 'user_id' => 4, 'description' => 'Extra request 13', 'created_at' => '2025-05-14 00:00:00'],
            ['id' => 14, 'user_id' => 4, 'description' => 'Extra request 14', 'created_at' => '2025-05-10 00:00:00'],
            ['id' => 15, 'user_id' => 4, 'description' => 'Extra request 15', 'created_at' => '2025-05-11 00:00:00'],
            ['id' => 16, 'user_id' => 4, 'description' => 'Extra request 16', 'created_at' => '2025-05-24 00:00:00'],
            ['id' => 17, 'user_id' => 4, 'description' => 'Extra request 17', 'created_at' => '2025-05-14 00:00:00'],
            ['id' => 18, 'user_id' => 4, 'description' => 'Extra request 18', 'created_at' => '2025-05-30 00:00:00'],
            ['id' => 19, 'user_id' => 5, 'description' => 'Extra request 19', 'created_at' => '2025-05-14 00:00:00'],
            ['id' => 20, 'user_id' => 5, 'description' => 'Extra request 20', 'created_at' => '2025-05-31 00:00:00'],
            ['id' => 21, 'user_id' => 5, 'description' => 'Extra request 21', 'created_at' => '2025-05-30 00:00:00'],
            ['id' => 22, 'user_id' => 5, 'description' => 'Extra request 22', 'created_at' => '2025-05-23 00:00:00'],
            ['id' => 23, 'user_id' => 5, 'description' => 'Extra request 23', 'created_at' => '2025-05-30 00:00:00'],
            ['id' => 24, 'user_id' => 5, 'description' => 'Extra request 24', 'created_at' => '2025-05-03 00:00:00'],
        ]);
    }
}
