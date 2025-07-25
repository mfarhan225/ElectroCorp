<?php 
namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'title'     => 'Tentang Kami | ElectroCorp',
            'heading'   => 'Tentang ElectroCorp',
            'tagline'   => 'Inovasi Teknologi untuk Masa Depan Cerah',
            'vision'    => 'Menjadi pemimpin global dalam inovasi teknologi...',
            'mission'   => [
                'Mengembangkan produk elektronik berkualitas tinggi',
                'Memberikan pengalaman pengguna terbaik',
                'Berkontribusi pada kehidupan berkelanjutan'
            ],
            'values'    => [
                ['icon' => 'lightbulb', 'title' => 'Inovasi', 'desc' => 'Terus mendorong batas teknologi...'],
                ['icon' => 'award', 'title' => 'Kualitas', 'desc' => 'Standar tertinggi dalam setiap produk...']
            ]
        ];

        return view('about_view', $data);
    }
}