<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RequestStatusLogsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('request_status_logs')->insert([
            ['id' => 1, 'request_id' => 1, 'status' => 'submitted', 'updated_at' => '2025-04-14 17:00:14', 'updated_by' => 1, 'notes' => 'Submitted'],
            ['id' => 2, 'request_id' => 1, 'status' => 'rejected', 'updated_at' => '2025-04-14 18:00:14', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 3, 'request_id' => 2, 'status' => 'submitted', 'updated_at' => '2025-04-11 17:00:14', 'updated_by' => 1, 'notes' => 'Submitted'],
            ['id' => 4, 'request_id' => 2, 'status' => 'approved', 'updated_at' => '2025-04-11 18:00:14', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 5, 'request_id' => 3, 'status' => 'submitted', 'updated_at' => '2025-05-11 17:00:14', 'updated_by' => 4, 'notes' => 'Submitted'],
            ['id' => 6, 'request_id' => 3, 'status' => 'approved', 'updated_at' => '2025-05-11 18:00:14', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 7, 'request_id' => 4, 'status' => 'submitted', 'updated_at' => '2025-05-18 17:00:14', 'updated_by' => 4, 'notes' => 'Submitted'],
            ['id' => 8, 'request_id' => 4, 'status' => 'approved', 'updated_at' => '2025-05-18 18:00:14', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 9, 'request_id' => 5, 'status' => 'submitted', 'updated_at' => '2025-05-22 17:00:14', 'updated_by' => 5, 'notes' => 'Submitted'],
            ['id' => 10, 'request_id' => 5, 'status' => 'approved', 'updated_at' => '2025-05-22 18:00:14', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 11, 'request_id' => 6, 'status' => 'submitted', 'updated_at' => '2025-05-23 17:00:14', 'updated_by' => 5, 'notes' => 'Submitted'],
            ['id' => 12, 'request_id' => 6, 'status' => 'approved', 'updated_at' => '2025-05-23 18:00:14', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 13, 'request_id' => 7, 'status' => 'submitted', 'updated_at' => '2025-05-17 00:00:00', 'updated_by' => 1, 'notes' => 'Submitted'],
            ['id' => 14, 'request_id' => 7, 'status' => 'approved', 'updated_at' => '2025-05-17 02:00:00', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 15, 'request_id' => 8, 'status' => 'submitted', 'updated_at' => '2025-05-12 00:00:00', 'updated_by' => 1, 'notes' => 'Submitted'],
            ['id' => 16, 'request_id' => 8, 'status' => 'approved', 'updated_at' => '2025-05-12 02:00:00', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 17, 'request_id' => 9, 'status' => 'submitted', 'updated_at' => '2025-05-21 00:00:00', 'updated_by' => 1, 'notes' => 'Submitted'],
            ['id' => 18, 'request_id' => 9, 'status' => 'approved', 'updated_at' => '2025-05-21 02:00:00', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 19, 'request_id' => 10, 'status' => 'submitted', 'updated_at' => '2025-05-04 00:00:00', 'updated_by' => 1, 'notes' => 'Submitted'],
            ['id' => 20, 'request_id' => 10, 'status' => 'rejected', 'updated_at' => '2025-05-04 02:00:00', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 21, 'request_id' => 11, 'status' => 'submitted', 'updated_at' => '2025-05-30 00:00:00', 'updated_by' => 1, 'notes' => 'Submitted'],
            ['id' => 22, 'request_id' => 11, 'status' => 'approved', 'updated_at' => '2025-05-30 02:00:00', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 23, 'request_id' => 12, 'status' => 'submitted', 'updated_at' => '2025-05-13 00:00:00', 'updated_by' => 1, 'notes' => 'Submitted'],
            ['id' => 24, 'request_id' => 12, 'status' => 'rejected', 'updated_at' => '2025-05-13 02:00:00', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 25, 'request_id' => 13, 'status' => 'submitted', 'updated_at' => '2025-05-14 00:00:00', 'updated_by' => 4, 'notes' => 'Submitted'],
            ['id' => 26, 'request_id' => 13, 'status' => 'rejected', 'updated_at' => '2025-05-14 02:00:00', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 27, 'request_id' => 14, 'status' => 'submitted', 'updated_at' => '2025-05-10 00:00:00', 'updated_by' => 4, 'notes' => 'Submitted'],
            ['id' => 28, 'request_id' => 14, 'status' => 'rejected', 'updated_at' => '2025-05-10 02:00:00', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 29, 'request_id' => 15, 'status' => 'submitted', 'updated_at' => '2025-05-11 00:00:00', 'updated_by' => 4, 'notes' => 'Submitted'],
            ['id' => 30, 'request_id' => 15, 'status' => 'approved', 'updated_at' => '2025-05-11 02:00:00', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 31, 'request_id' => 16, 'status' => 'submitted', 'updated_at' => '2025-05-24 00:00:00', 'updated_by' => 4, 'notes' => 'Submitted'],
            ['id' => 32, 'request_id' => 16, 'status' => 'rejected', 'updated_at' => '2025-05-24 02:00:00', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 33, 'request_id' => 17, 'status' => 'submitted', 'updated_at' => '2025-05-14 00:00:00', 'updated_by' => 4, 'notes' => 'Submitted'],
            ['id' => 34, 'request_id' => 17, 'status' => 'approved', 'updated_at' => '2025-05-14 02:00:00', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 35, 'request_id' => 18, 'status' => 'submitted', 'updated_at' => '2025-05-30 00:00:00', 'updated_by' => 4, 'notes' => 'Submitted'],
            ['id' => 36, 'request_id' => 18, 'status' => 'rejected', 'updated_at' => '2025-05-30 02:00:00', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 37, 'request_id' => 19, 'status' => 'submitted', 'updated_at' => '2025-05-14 00:00:00', 'updated_by' => 5, 'notes' => 'Submitted'],
            ['id' => 38, 'request_id' => 19, 'status' => 'approved', 'updated_at' => '2025-05-14 02:00:00', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 39, 'request_id' => 20, 'status' => 'submitted', 'updated_at' => '2025-05-31 00:00:00', 'updated_by' => 5, 'notes' => 'Submitted'],
            ['id' => 40, 'request_id' => 20, 'status' => 'rejected', 'updated_at' => '2025-05-31 02:00:00', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 41, 'request_id' => 21, 'status' => 'submitted', 'updated_at' => '2025-05-30 00:00:00', 'updated_by' => 5, 'notes' => 'Submitted'],
            ['id' => 42, 'request_id' => 21, 'status' => 'rejected', 'updated_at' => '2025-05-30 02:00:00', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 43, 'request_id' => 22, 'status' => 'submitted', 'updated_at' => '2025-05-23 00:00:00', 'updated_by' => 5, 'notes' => 'Submitted'],
            ['id' => 44, 'request_id' => 22, 'status' => 'rejected', 'updated_at' => '2025-05-23 02:00:00', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 45, 'request_id' => 23, 'status' => 'submitted', 'updated_at' => '2025-05-30 00:00:00', 'updated_by' => 5, 'notes' => 'Submitted'],
            ['id' => 46, 'request_id' => 23, 'status' => 'rejected', 'updated_at' => '2025-05-30 02:00:00', 'updated_by' => 3, 'notes' => 'Reviewed'],
            ['id' => 47, 'request_id' => 24, 'status' => 'submitted', 'updated_at' => '2025-05-03 00:00:00', 'updated_by' => 5, 'notes' => 'Submitted'],
            ['id' => 48, 'request_id' => 24, 'status' => 'rejected', 'updated_at' => '2025-05-03 02:00:00', 'updated_by' => 3, 'notes' => 'Reviewed'],
        ]);
    }
}
