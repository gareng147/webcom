<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::create([
            'nama' => 'Chili',
            'harga' => 5000,
            'gambar' => 'cabai_rawit.webp',
            'deskripsi' => 'Cabai rawit segar dan pedas.',
        ]);

        Product::create([
            'nama' => 'Timun',
            'harga' => 3000,
            'gambar' => 'timun.webp',
            'deskripsi' => 'Timun segar dan renyah.',
        ]);

        Product::create([
            'nama' => 'Wortel',
            'harga' => 4000,
            'gambar' => 'wortel.webp',
            'deskripsi' => 'Wortel segar kaya vitamin A.',
        ]);
    }
}
