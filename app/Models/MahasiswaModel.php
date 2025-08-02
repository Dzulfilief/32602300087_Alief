<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'tb_mahasiswa';        // nama tabel di database
    protected $primaryKey = 'nim';            // primary key-nya

    protected $allowedFields = [              // field yang bisa diisi lewat form/input
        'nim',
        'nama',
        'prodi',
        'universitas',
        'nomor_handphone'
    ];
}
