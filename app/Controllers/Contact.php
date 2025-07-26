<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index(): string
    {
        // Siapkan data yang akan dikirim ke view. Cukup judul saja.
        $data = [
            'title' => 'Hubungi Kami | ElectroCorp'
        ];

        // Gabungkan header, konten kontak, dan footer untuk membentuk halaman lengkap.
        return view('templates/header', $data)
             . view('contact') // Kita akan perbaiki file view ini selanjutnya
             . view('templates/footer');
    }
}
