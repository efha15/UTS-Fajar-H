<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'nama_barang' => 'Sapu Lidi',
                'harga' => 15000,
                'stok' => 30,
                'deskripsi' => 'Sapu lidi tradisional untuk membersihkan halaman rumah'
            ],
            [
                'nama_barang' => 'Wajan Anti Lengket',
                'harga' => 120000,
                'stok' => 20,
                'deskripsi' => 'Wajan anti lengket ideal untuk memasak tanpa minyak berlebihan'
            ],
            [
                'nama_barang' => 'Ember Plastik 20L',
                'harga' => 25000,
                'stok' => 50,
                'deskripsi' => 'Ember besar untuk mencuci pakaian atau menampung air'
            ],
            [
                'nama_barang' => 'Lap Pel',
                'harga' => 18000,
                'stok' => 40,
                'deskripsi' => 'Lap pel microfiber untuk lantai lebih bersih dan kering'
            ],
            [
                'nama_barang' => 'Kompor Gas 2 Tungku',
                'harga' => 300000,
                'stok' => 10,
                'deskripsi' => 'Kompor gas dua tungku hemat energi dan praktis untuk memasak'
            ],
        ]);
    }
}
