<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequestItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('request_items')->insert([
            ['id' => 1, 'request_id' => 1, 'item_id' => 5, 'quantity' => 4, 'notes' => 'Note 1'],
            ['id' => 2, 'request_id' => 1, 'item_id' => 6, 'quantity' => 10, 'notes' => 'Note 2'],
            ['id' => 3, 'request_id' => 1, 'item_id' => 5, 'quantity' => 2, 'notes' => 'Note 3'],
            ['id' => 4, 'request_id' => 2, 'item_id' => 1, 'quantity' => 2, 'notes' => 'Note 4'],
            ['id' => 5, 'request_id' => 2, 'item_id' => 3, 'quantity' => 2, 'notes' => 'Note 5'],
            ['id' => 6, 'request_id' => 3, 'item_id' => 5, 'quantity' => 10, 'notes' => 'Note 6'],
            ['id' => 7, 'request_id' => 3, 'item_id' => 5, 'quantity' => 4, 'notes' => 'Note 7'],
            ['id' => 8, 'request_id' => 4, 'item_id' => 5, 'quantity' => 2, 'notes' => 'Note 8'],
            ['id' => 9, 'request_id' => 4, 'item_id' => 1, 'quantity' => 10, 'notes' => 'Note 9'],
            ['id' => 10, 'request_id' => 5, 'item_id' => 5, 'quantity' => 10, 'notes' => 'Note 10'],
            ['id' => 11, 'request_id' => 5, 'item_id' => 2, 'quantity' => 10, 'notes' => 'Note 11'],
            ['id' => 12, 'request_id' => 5, 'item_id' => 3, 'quantity' => 10, 'notes' => 'Note 12'],
            ['id' => 13, 'request_id' => 6, 'item_id' => 6, 'quantity' => 3, 'notes' => 'Note 13'],
            ['id' => 14, 'request_id' => 6, 'item_id' => 5, 'quantity' => 8, 'notes' => 'Note 14'],
            ['id' => 15, 'request_id' => 6, 'item_id' => 1, 'quantity' => 5, 'notes' => 'Note 15'],
            ['id' => 16, 'request_id' => 7, 'item_id' => 5, 'quantity' => 6, 'notes' => 'Auto-note 16'],
            ['id' => 17, 'request_id' => 7, 'item_id' => 1, 'quantity' => 9, 'notes' => 'Auto-note 17'],
            ['id' => 18, 'request_id' => 8, 'item_id' => 6, 'quantity' => 9, 'notes' => 'Auto-note 18'],
            ['id' => 19, 'request_id' => 8, 'item_id' => 5, 'quantity' => 3, 'notes' => 'Auto-note 19'],
            ['id' => 20, 'request_id' => 8, 'item_id' => 2, 'quantity' => 5, 'notes' => 'Auto-note 20'],
            ['id' => 21, 'request_id' => 9, 'item_id' => 6, 'quantity' => 2, 'notes' => 'Auto-note 21'],
            ['id' => 22, 'request_id' => 9, 'item_id' => 1, 'quantity' => 9, 'notes' => 'Auto-note 22'],
            ['id' => 23, 'request_id' => 9, 'item_id' => 5, 'quantity' => 9, 'notes' => 'Auto-note 23'],
            ['id' => 24, 'request_id' => 10, 'item_id' => 4, 'quantity' => 8, 'notes' => 'Auto-note 24'],
            ['id' => 25, 'request_id' => 10, 'item_id' => 1, 'quantity' => 5, 'notes' => 'Auto-note 25'],
            ['id' => 26, 'request_id' => 11, 'item_id' => 5, 'quantity' => 2, 'notes' => 'Auto-note 26'],
            ['id' => 27, 'request_id' => 12, 'item_id' => 4, 'quantity' => 5, 'notes' => 'Auto-note 27'],
            ['id' => 28, 'request_id' => 12, 'item_id' => 1, 'quantity' => 3, 'notes' => 'Auto-note 28'],
            ['id' => 29, 'request_id' => 12, 'item_id' => 3, 'quantity' => 4, 'notes' => 'Auto-note 29'],
            ['id' => 30, 'request_id' => 13, 'item_id' => 1, 'quantity' => 4, 'notes' => 'Auto-note 30'],
            ['id' => 31, 'request_id' => 13, 'item_id' => 6, 'quantity' => 3, 'notes' => 'Auto-note 31'],
            ['id' => 32, 'request_id' => 13, 'item_id' => 2, 'quantity' => 9, 'notes' => 'Auto-note 32'],
            ['id' => 33, 'request_id' => 14, 'item_id' => 3, 'quantity' => 3, 'notes' => 'Auto-note 33'],
            ['id' => 34, 'request_id' => 14, 'item_id' => 2, 'quantity' => 4, 'notes' => 'Auto-note 34'],
            ['id' => 35, 'request_id' => 15, 'item_id' => 1, 'quantity' => 3, 'notes' => 'Auto-note 35'],
            ['id' => 36, 'request_id' => 15, 'item_id' => 4, 'quantity' => 7, 'notes' => 'Auto-note 36'],
            ['id' => 37, 'request_id' => 15, 'item_id' => 3, 'quantity' => 4, 'notes' => 'Auto-note 37'],
            ['id' => 38, 'request_id' => 16, 'item_id' => 1, 'quantity' => 9, 'notes' => 'Auto-note 38'],
            ['id' => 39, 'request_id' => 17, 'item_id' => 1, 'quantity' => 4, 'notes' => 'Auto-note 39'],
            ['id' => 40, 'request_id' => 17, 'item_id' => 2, 'quantity' => 5, 'notes' => 'Auto-note 40'],
            ['id' => 41, 'request_id' => 17, 'item_id' => 4, 'quantity' => 7, 'notes' => 'Auto-note 41'],
            ['id' => 42, 'request_id' => 18, 'item_id' => 2, 'quantity' => 10, 'notes' => 'Auto-note 42'],
            ['id' => 43, 'request_id' => 18, 'item_id' => 6, 'quantity' => 5, 'notes' => 'Auto-note 43'],
            ['id' => 44, 'request_id' => 18, 'item_id' => 1, 'quantity' => 9, 'notes' => 'Auto-note 44'],
            ['id' => 45, 'request_id' => 19, 'item_id' => 3, 'quantity' => 8, 'notes' => 'Auto-note 45'],
            ['id' => 46, 'request_id' => 20, 'item_id' => 5, 'quantity' => 9, 'notes' => 'Auto-note 46'],
            ['id' => 47, 'request_id' => 21, 'item_id' => 3, 'quantity' => 8, 'notes' => 'Auto-note 47'],
            ['id' => 48, 'request_id' => 21, 'item_id' => 1, 'quantity' => 3, 'notes' => 'Auto-note 48'],
            ['id' => 49, 'request_id' => 22, 'item_id' => 5, 'quantity' => 1, 'notes' => 'Auto-note 49'],
            ['id' => 50, 'request_id' => 22, 'item_id' => 1, 'quantity' => 6, 'notes' => 'Auto-note 50'],
            ['id' => 51, 'request_id' => 22, 'item_id' => 6, 'quantity' => 9, 'notes' => 'Auto-note 51'],
            ['id' => 52, 'request_id' => 23, 'item_id' => 5, 'quantity' => 9, 'notes' => 'Auto-note 52'],
            ['id' => 53, 'request_id' => 23, 'item_id' => 3, 'quantity' => 4, 'notes' => 'Auto-note 53'],
            ['id' => 54, 'request_id' => 24, 'item_id' => 3, 'quantity' => 6, 'notes' => 'Auto-note 54'],
            ['id' => 55, 'request_id' => 24, 'item_id' => 5, 'quantity' => 4, 'notes' => 'Auto-note 55'],
        ]);
    }
}
