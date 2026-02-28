<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_kode' => 'SPL001','supplier_nama' => 'PT. Sumber Makmur','supplier_alamat' => 'Jl. Merdeka, Jakarta','created_at' => now(), 'updated_at' => now(),],
            ['supplier_kode' => 'SPL002','supplier_nama' => 'CV. Sejahtera Abadi','supplier_alamat' => 'Jl. Sudirman, Malang','created_at' => now(), 'updated_at' => now(),],
            ['supplier_kode' => 'SPL003','supplier_nama' => 'PT. Maju Jaya','supplier_alamat' => 'Jl. Melati, Surabaya','created_at' => now(), 'updated_at' => now(),],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
