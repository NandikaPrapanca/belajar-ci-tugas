<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DiskonSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $tanggal = date('Y-m-d', strtotime('2025-06-25'));

        for ($i = 0; $i < 10; $i++) {
            $data = [
                'tanggal'    => date('Y-m-d', strtotime("+$i days", strtotime($tanggal))),
                'nominal'    => rand(100000, 300000),
                'created_at' => $now,
                'updated_at' => $now
            ];
            $this->db->table('diskon')->insert($data);
        }
    }
}

