<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder{
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
        
            $data = [
                // FOOD & BEVERAGE (1)
                ['barang_kode' => 'BRG001','barang_nama' => 'Indomie Goreng','category_id' => 1,'harga_beli' => 2800,'harga_jual' => 3500,'created_at' => now(), 'updated_at' => now()],
                ['barang_kode' => 'BRG008','barang_nama' => 'Susu UHT','category_id' => 1,'harga_beli' => 6000,'harga_jual' => 7500,'created_at' => now(), 'updated_at' => now()],
                ['barang_kode' => 'BRG011','barang_nama' => 'Tepung Terigu','category_id' => 1,'harga_beli' => 9500,'harga_jual' => 12000,'created_at' => now(), 'updated_at' => now()],

                // BEAUTY & HEALTH (2)
                ['barang_kode' => 'BRG002','barang_nama' => 'Pepsodent','category_id' => 2,'harga_beli' => 7000,'harga_jual' => 9000,'created_at' => now(), 'updated_at' => now()],
                ['barang_kode' => 'BRG007','barang_nama' => 'Shampo','category_id' => 2,'harga_beli' => 12000,'harga_jual' => 15000,'created_at' => now(), 'updated_at' => now()],
                ['barang_kode' => 'BRG012','barang_nama' => 'Lulur','category_id' => 2,'harga_beli' => 10000,'harga_jual' => 13500,'created_at' => now(), 'updated_at' => now()],

                // HOME CARE (3)
                ['barang_kode' => 'BRG003','barang_nama' => 'Sabun Mandi','category_id' => 3,'harga_beli' => 3500,'harga_jual' => 5000,'created_at' => now(), 'updated_at' => now()],
                ['barang_kode' => 'BRG006','barang_nama' => 'Detergen','category_id' => 3,'harga_beli' => 12000,'harga_jual' => 15000,'created_at' => now(), 'updated_at' => now()],
                ['barang_kode' => 'BRG013','barang_nama' => 'Obat Lantai','category_id' => 3,'harga_beli' => 14000,'harga_jual' => 18000,'created_at' => now(), 'updated_at' => now()],

                // BABY KID (4)
                ['barang_kode' => 'BRG004','barang_nama' => 'Minyak Telon','category_id' => 4,'harga_beli' => 15000,'harga_jual' => 19000,'created_at' => now(), 'updated_at' => now()],
                ['barang_kode' => 'BRG010','barang_nama' => 'Pampers','category_id' => 4,'harga_beli' => 45000,'harga_jual' => 52000,'created_at' => now(), 'updated_at' => now()],
                ['barang_kode' => 'BRG014','barang_nama' => 'Susu Bubuk','category_id' => 4,'harga_beli' => 55000,'harga_jual' => 65000,'created_at' => now(), 'updated_at' => now()],

                // ELECTRONIC (5)
                ['barang_kode' => 'BRG005','barang_nama' => 'Lampu LED','category_id' => 5,'harga_beli' => 15000,'harga_jual' => 20000,'created_at' => now(), 'updated_at' => now()],
                ['barang_kode' => 'BRG009','barang_nama' => 'TV 32 Inch','category_id' => 5,'harga_beli' => 1800000,'harga_jual' => 2100000,'created_at' => now(), 'updated_at' => now()],
                ['barang_kode' => 'BRG015','barang_nama' => 'Oven Listrik','category_id' => 5,'harga_beli' => 350000,'harga_jual' => 420000,'created_at' => now(), 'updated_at' => now()],
            ];
            DB::table('m_barang')->insert($data);
        }
    }
