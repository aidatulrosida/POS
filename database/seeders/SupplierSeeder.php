<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SupplierModel;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        SupplierModel::create([
            'supplier_kode' => 'SUP001',
            'supplier_nama' => 'PT Sumber Rejeki',
            'supplier_alamat' => 'Jakarta',
            'supplier_telp' => '081234567890',
        ]);

        SupplierModel::create([
            'supplier_kode' => 'SUP002',
            'supplier_nama' => 'CV Makmur Jaya',
            'supplier_alamat' => 'Surabaya',
            'supplier_telp' => '082345678901',
        ]);

        SupplierModel::create([
            'supplier_kode' => 'SUP003',
            'supplier_nama' => 'UD Sejahtera',
            'supplier_alamat' => 'Malang',
            'supplier_telp' => '083456789012',
        ]);
    }
}
