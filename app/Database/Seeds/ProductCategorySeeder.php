<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_kategori' => 'Keyboard Gaming Razer',
                'deskripsi' => 'Keyboard Razer dengan switch hijau dan RGB lighting.',
                'harga' => 1899000,
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama_kategori' => 'Keyboard Logitech G Pro',
                'deskripsi' => 'Keyboard TKL profesional dengan keycap tahan lama.',
                'harga' => 2299000,
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama_kategori' => 'Mouse Logitech G502 HERO',
                'deskripsi' => 'Mouse dengan DPI tinggi dan 11 tombol yang dapat diprogram.',
                'harga' => 899000,
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama_kategori' => 'Mouse Razer DeathAdder V2',
                'deskripsi' => 'Mouse ergonomis dengan sensor optik 20K DPI.',
                'harga' => 1099000,
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama_kategori' => 'SteelSeries Apex Pro TKL',
                'deskripsi' => 'Keyboard mekanikal dengan switch adjustable.',
                'harga' => 3299000,
                'updated_at' => date("Y-m-d H:i:s"),
            ]
        ];

        foreach ($data as $item) {
            $this->db->table('product_category')->insert($item);
        }
    }
}
