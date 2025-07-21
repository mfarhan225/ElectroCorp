<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Data bisa dikirim ke view jika diperlukan
        $data = [
            'title' => 'ElectroCorp - Inovasi Teknologi Masa Depan'
        ];

        // Memuat view secara berurutan
        echo view('templates/header', $data);
        echo view('templates/navbar');
        echo view('pages/home');
        echo view('templates/footer');
    }
}
