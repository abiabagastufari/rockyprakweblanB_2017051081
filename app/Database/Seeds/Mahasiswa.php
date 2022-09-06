<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\i18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [[
            'npm' => '2017051081',
            'nama'    => 'Abia Bagas Tufari',
            'alamat' => 'Pesawaran',
            'created_at' =>Time::now()
        ],
        [
            'npm' => '2017051020',
            'nama'    => 'Erlangga Dwi J',
            'alamat' => 'Natar',
            'created_at' =>Time::now()
        ],
        [
            'npm' => '2057051039',
            'nama'    => 'Deny Aldy',
            'alamat' => 'Sukarame',
            'created_at' =>Time::now()
        ],
        [
            'npm' => '2057051066',
            'nama'    => 'M Yadzka',
            'alamat' => 'Kampung Baru',
            'created_at' =>Time::now()
        ],
    ];
        foreach($data_mahasiswa as $data){
            // Using Query Builder
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
