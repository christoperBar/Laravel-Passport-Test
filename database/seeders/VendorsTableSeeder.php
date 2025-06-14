<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendorsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('vendors')->insert([
            ['id' => 1, 'name' => 'Vendor A', 'contact_email' => 'contact@vendor-a.com'],
            ['id' => 2, 'name' => 'Vendor B', 'contact_email' => 'info@vendor-b.com'],
            ['id' => 3, 'name' => 'Vendor C', 'contact_email' => 'sales@vendor-c.com'],
        ]);
    }
}
