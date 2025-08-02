<?php

namespace App\Controllers;

class FormController extends BaseController
{
    // Tampilkan form
    public function index()
    {
        return view('form');
    }

    // Proses form POST
    public function submit()
    {
        $data = [
            'nama'      => $this->request->getPost('nama'),
            'nim'       => $this->request->getPost('nim'),
            'kelas'     => $this->request->getPost('kelas'),
            'matkul'    => $this->request->getPost('matkul'),
            'dosen'     => $this->request->getPost('dosen'),
            'asisten'   => $this->request->getPost('asisten'),
        ];

        return view('hasil', $data);
    }
}
