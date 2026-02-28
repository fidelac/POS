<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            
            [
                'penjualan_id' => 1, // TRX001
                'barang_id' => 1, 
                'harga' => 3500,
                'jumlah' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 1, // TRX001
                'barang_id' => 2, 
                'harga' => 9000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

          
            [
                'penjualan_id' => 2, // TRX002
                'barang_id' => 8, // Susu UHT
                'harga' => 7500,
                'jumlah' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 2, // TRX002
                'barang_id' => 3, // Sabun
                'harga' => 5000,
                'jumlah' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

          
            [
                'penjualan_id' => 3, // TRX003
                'barang_id' => 9, // TV
                'harga' => 2100000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        
            [
                'penjualan_id' => 4, // TRX004
                'barang_id' => 10, // Pampers
                'harga' => 52000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 4, // TRX004
                'barang_id' => 4, // Minyak Telon
                'harga' => 19000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}
