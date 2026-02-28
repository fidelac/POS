<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['category_kode' => 'FB','category_nama' => 'Food Beverage','created_at' => now(), 'updated_at' => now(),],
            ['category_kode' => 'BH','category_nama' => 'Beauty & Health','created_at' => now(), 'updated_at' => now(),],
            ['category_kode' => 'HC','category_nama' => 'Home Care','created_at' => now(), 'updated_at' => now(),],
            ['category_kode' => 'BK','category_nama' => 'Baby Kid','created_at' => now(), 'updated_at' => now(),],
            ['category_kode' => 'EL','category_nama' => 'Electronic','created_at' => now(), 'updated_at' => now(),],
        ];
        DB::table('m_category')->insert($data);
    }
}
