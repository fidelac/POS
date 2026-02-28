<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            // ================= FOOD & BEVERAGE =================
            ['supplier_id'=>1,'barang_id'=>1,'user_id'=>1,'stok_tanggal'=>now(),'stok_jumlah'=>200,'created_at'=>now(),'updated_at'=>now()],
            ['supplier_id'=>1,'barang_id'=>8,'user_id'=>1,'stok_tanggal'=>now(),'stok_jumlah'=>120,'created_at'=>now(),'updated_at'=>now()],
            ['supplier_id'=>2,'barang_id'=>11,'user_id'=>1,'stok_tanggal'=>now(),'stok_jumlah'=>80,'created_at'=>now(),'updated_at'=>now()],

            // ================= BEAUTY & HEALTH =================
            ['supplier_id'=>2,'barang_id'=>2,'user_id'=>1,'stok_tanggal'=>now(),'stok_jumlah'=>90,'created_at'=>now(),'updated_at'=>now()],
            ['supplier_id'=>2,'barang_id'=>7,'user_id'=>1,'stok_tanggal'=>now(),'stok_jumlah'=>70,'created_at'=>now(),'updated_at'=>now()],
            ['supplier_id'=>3,'barang_id'=>12,'user_id'=>1,'stok_tanggal'=>now(),'stok_jumlah'=>60,'created_at'=>now(),'updated_at'=>now()],

            // ================= HOME CARE =================
            ['supplier_id'=>1,'barang_id'=>3,'user_id'=>1,'stok_tanggal'=>now(),'stok_jumlah'=>100,'created_at'=>now(),'updated_at'=>now()],
            ['supplier_id'=>1,'barang_id'=>6,'user_id'=>1,'stok_tanggal'=>now(),'stok_jumlah'=>85,'created_at'=>now(),'updated_at'=>now()],
            ['supplier_id'=>3,'barang_id'=>13,'user_id'=>1,'stok_tanggal'=>now(),'stok_jumlah'=>75,'created_at'=>now(),'updated_at'=>now()],

            // ================= BABY KID =================
            ['supplier_id'=>2,'barang_id'=>4,'user_id'=>1,'stok_tanggal'=>now(),'stok_jumlah'=>50,'created_at'=>now(),'updated_at'=>now()],
            ['supplier_id'=>2,'barang_id'=>10,'user_id'=>1,'stok_tanggal'=>now(),'stok_jumlah'=>40,'created_at'=>now(),'updated_at'=>now()],
            ['supplier_id'=>3,'barang_id'=>14,'user_id'=>1,'stok_tanggal'=>now(),'stok_jumlah'=>45,'created_at'=>now(),'updated_at'=>now()],

            // ================= ELECTRONIC =================
            ['supplier_id'=>3,'barang_id'=>5,'user_id'=>1,'stok_tanggal'=>now(),'stok_jumlah'=>30,'created_at'=>now(),'updated_at'=>now()],
            ['supplier_id'=>3,'barang_id'=>9,'user_id'=>1,'stok_tanggal'=>now(),'stok_jumlah'=>10,'created_at'=>now(),'updated_at'=>now()],
            ['supplier_id'=>1,'barang_id'=>15,'user_id'=>1,'stok_tanggal'=>now(),'stok_jumlah'=>15,'created_at'=>now(),'updated_at'=>now()],
        ];

        DB::table('t_stok')->insert($data);
    }
}
