<?php

namespace App\Controllers;

class Home extends BaseController
{
    // Data produk tiruan dikembalikan ke sini
    private $products_data = [
        'smartwatch-x1' => [
            'slug' => 'smartwatch-x1',
            'name' => 'SmartWatch X1',
            'image' => 'https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=800&h=600&auto=format&fit=crop',
            'short_desc' => 'Jam tangan pintar dengan pelacakan kebugaran canggih dan desain premium.',
            'full_desc' => 'SmartWatch X1 adalah partner sempurna untuk gaya hidup aktif Anda. Dilengkapi dengan sensor detak jantung, GPS, monitor tidur, dan lebih dari 20 mode olahraga. Baterai tahan hingga 14 hari dan desainnya yang elegan cocok untuk segala acara.',
            'price' => 'Rp 2.499.000',
            'features' => ['Layar AMOLED 1.4"', 'Tahan Air 5 ATM', 'GPS Terintegrasi', 'Baterai 14 Hari']
        ],
        'audiosphere-pro' => [
            'slug' => 'audiosphere-pro',
            'name' => 'AudioSphere Pro',
            'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=800&h=600&auto=format&fit=crop',
            'short_desc' => 'Headphone nirkabel dengan peredam bising aktif dan kualitas suara studio.',
            'full_desc' => 'Rasakan pengalaman audio yang imersif dengan AudioSphere Pro. Teknologi Active Noise Cancelling (ANC) canggih kami memblokir semua gangguan, sementara driver 40mm menghasilkan suara jernih dan bass yang dalam. Desain over-ear yang nyaman untuk pemakaian sepanjang hari.',
            'price' => 'Rp 3.199.000',
            'features' => ['Active Noise Cancelling', 'Konektivitas Bluetooth 5.2', 'Daya Tahan Baterai 30 Jam', 'Mode Transparansi Audio']
        ],
        'cybertablet-z' => [
            'slug' => 'cybertablet-z',
            'name' => 'CyberTablet Z',
            'image' => 'https://images.unsplash.com/photo-1561154464-82e9adf32764?q=80&w=800&h=600&auto=format&fit=crop',
            'short_desc' => 'Tablet ultra-tipis dengan layar resolusi tinggi untuk produktivitas dan hiburan.',
            'full_desc' => 'CyberTablet Z mendefinisikan ulang portabilitas dan kinerja. Dengan bodi aluminium yang ramping dan layar Liquid Retina 11 inci, tablet ini ideal untuk bekerja dan bermain. Ditenagai oleh chip A15 Bionic untuk performa secepat kilat.',
            'price' => 'Rp 7.999.000',
            'features' => ['Layar Liquid Retina 11"', 'Chip A15 Bionic', 'Dukungan Magic Keyboard', 'Kamera Ultra Wide 12MP']
        ],
    ];

    public function index()
    {
        $data = [
            'title' => 'ElectroCorp - Inovasi Teknologi Masa Depan',
            'products' => $this->products_data
        ];

        echo view('templates/header', $data);
        echo view('templates/navbar');
        echo view('pages/home', $data);
        echo view('templates/footer');
    }

    public function products()
    {
        $data = [
            'title' => 'Produk Kami - ElectroCorp',
            'products' => $this->products_data
        ];

        echo view('templates/header', $data);
        echo view('templates/navbar');
        echo view('pages/products', $data);
        echo view('templates/footer');
    }

    public function productDetail($slug = null)
    {
        if ($slug === null || !array_key_exists($slug, $this->products_data)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $product = $this->products_data[$slug];

        $data = [
            'title' => $product['name'] . ' - ElectroCorp',
            'product' => $product
        ];

        echo view('templates/header', $data);
        echo view('templates/navbar');
        echo view('pages/product_detail', $data);
        echo view('templates/footer');
    }
}
