<?php

namespace App\Controllers;

class Home extends BaseController
{
public function index()
    {
        $data = [
            'title' => 'Home | Selamat Datang'
        ];
        return view('templates/header', $data) .
               view('home') .
               view('templates/footer');
    }

}
