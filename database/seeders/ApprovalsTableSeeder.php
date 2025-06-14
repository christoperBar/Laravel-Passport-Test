<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ApprovalsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('approvals')->insert([
            ['id' => 1, 'request_id' => 1, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-04-14 18:00:14'), 'status' => 'rejected', 'notes' => 'rejected by manager'],
            ['id' => 2, 'request_id' => 2, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-04-11 18:00:14'), 'status' => 'approved', 'notes' => 'approved by manager'],
            ['id' => 3, 'request_id' => 3, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-11 18:00:14'), 'status' => 'approved', 'notes' => 'approved by manager'],
            ['id' => 4, 'request_id' => 4, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-18 18:00:14'), 'status' => 'approved', 'notes' => 'approved by manager'],
            ['id' => 5, 'request_id' => 5, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-22 18:00:14'), 'status' => 'approved', 'notes' => 'approved by manager'],
            ['id' => 6, 'request_id' => 6, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-23 18:00:14'), 'status' => 'approved', 'notes' => 'approved by manager'],
            ['id' => 7, 'request_id' => 7, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-17 02:00:00'), 'status' => 'approved', 'notes' => 'Auto approved'],
            ['id' => 8, 'request_id' => 8, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-12 02:00:00'), 'status' => 'approved', 'notes' => 'Auto approved'],
            ['id' => 9, 'request_id' => 9, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-21 02:00:00'), 'status' => 'approved', 'notes' => 'Auto approved'],
            ['id' => 10, 'request_id' => 10, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-04 02:00:00'), 'status' => 'rejected', 'notes' => 'Auto rejected'],
            ['id' => 11, 'request_id' => 11, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-30 02:00:00'), 'status' => 'approved', 'notes' => 'Auto approved'],
            ['id' => 12, 'request_id' => 12, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-13 02:00:00'), 'status' => 'rejected', 'notes' => 'Auto rejected'],
            ['id' => 13, 'request_id' => 13, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-14 02:00:00'), 'status' => 'rejected', 'notes' => 'Auto rejected'],
            ['id' => 14, 'request_id' => 14, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-10 02:00:00'), 'status' => 'rejected', 'notes' => 'Auto rejected'],
            ['id' => 15, 'request_id' => 15, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-11 02:00:00'), 'status' => 'approved', 'notes' => 'Auto approved'],
            ['id' => 16, 'request_id' => 16, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-24 02:00:00'), 'status' => 'rejected', 'notes' => 'Auto rejected'],
            ['id' => 17, 'request_id' => 17, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-14 02:00:00'), 'status' => 'approved', 'notes' => 'Auto approved'],
            ['id' => 18, 'request_id' => 18, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-30 02:00:00'), 'status' => 'rejected', 'notes' => 'Auto rejected'],
            ['id' => 19, 'request_id' => 19, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-14 02:00:00'), 'status' => 'approved', 'notes' => 'Auto approved'],
            ['id' => 20, 'request_id' => 20, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-31 02:00:00'), 'status' => 'rejected', 'notes' => 'Auto rejected'],
            ['id' => 21, 'request_id' => 21, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-30 02:00:00'), 'status' => 'rejected', 'notes' => 'Auto rejected'],
            ['id' => 22, 'request_id' => 22, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-23 02:00:00'), 'status' => 'rejected', 'notes' => 'Auto rejected'],
            ['id' => 23, 'request_id' => 23, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-30 02:00:00'), 'status' => 'rejected', 'notes' => 'Auto rejected'],
            ['id' => 24, 'request_id' => 24, 'approver_id' => 3, 'approved_at' => Carbon::parse('2025-05-03 02:00:00'), 'status' => 'rejected', 'notes' => 'Auto rejected'],
        ]);
    }
}
