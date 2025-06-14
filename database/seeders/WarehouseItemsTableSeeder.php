<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('warehouse_items')->insert([
            ['id' => 1, 'item_name' => 'Pen', 'stock_quantity' => 100, 'vendor_id' => 1],
            ['id' => 2, 'item_name' => 'Notebook', 'stock_quantity' => 200, 'vendor_id' => 2],
            ['id' => 3, 'item_name' => 'Monitor', 'stock_quantity' => 10, 'vendor_id' => 3],
            ['id' => 4, 'item_name' => 'Chair', 'stock_quantity' => 15, 'vendor_id' => 2],
            ['id' => 5, 'item_name' => 'Desk', 'stock_quantity' => 8, 'vendor_id' => 1],
            ['id' => 6, 'item_name' => 'Keyboard', 'stock_quantity' => 30, 'vendor_id' => 3],
        ]);
    }
}
