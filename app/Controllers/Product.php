<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index(): string
    {
        // Data untuk dikirim ke view, termasuk judul halaman
        $data = [
            'title' => 'Produk Kami | ElectroCorp',
            // Di aplikasi nyata, data ini akan diambil dari database
            'products' => [
                [
                    'name' => 'Samsung Galaxy S25 Ultra',
                    'image' => 'https://gadget.ro/wp-content/uploads/2024/11/Samsung-Galaxy-S25-Ultra-scaled.jpg',
                    'description' => 'Smartphone flagship dengan prosesor quantum dan kamera 108MP.',
                    'rating' => 4.5,
                    'reviews' => 128,
                    'price_before' => '12.999.000',
                    'price_after' => '11.699.100',
                    'badge' => 'TERBARU'
                ],
                [
                    'name' => 'Laptop Nebula Pro',
                    'image' => 'https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=600&auto=format&fit=crop',
                    'description' => 'Laptop ultra-ringkas dengan layar OLED 4K dan baterai tahan 20 jam.',
                    'rating' => 4.0,
                    'reviews' => 64,
                    'price_before' => '24.999.000',
                    'price_after' => '22.499.100',
                    'badge' => ''
                ],
                [
                    'name' => 'Smart Watch Pulse',
                    'image' => 'https://asset.kompas.com/crops/r6peUnEDr8xP5BMCrOWVp6EjOkc=/382x299:2178x1497/1200x800/data/photo/2023/11/10/654df05547f08.jpg',
                    'description' => 'Smartwatch dengan pemantauan kesehatan lengkap dan desain premium.',
                    'rating' => 5.0,
                    'reviews' => 256,
                    'price_before' => '5.999.000',
                    'price_after' => '4.799.200',
                    'badge' => 'PROMO'
                ],
                [
                    'name' => 'Headphone SonicWave',
                    'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=600&auto=format&fit=crop',
                    'description' => 'Headphone noise-cancelling dengan kualitas suara studio.',
                    'rating' => 4.8,
                    'reviews' => 180,
                    'price_before' => '3.499.000',
                    'price_after' => '2.999.000',
                    'badge' => ''
                ],
                [
                    'name' => 'Gaming Mouse Logitech G903',
                    'image' => 'https://tecnogaming.com/wp-content/uploads/2016/05/Logitech-G900-01.jpg',
                    'description' => 'Mouse gaming dengan sensor presisi tinggi dan RGB kustom.',
                    'rating' => 4.9,
                    'reviews' => 210,
                    'price_before' => '1.299.000',
                    'price_after' => '999.000',
                    'badge' => 'BEST SELLER'
                ],
                [
                    'name' => 'Samsung',
                    'image' => 'https://cf.shopee.co.id/file/83855104a53caf71ca8e460f87e83810',
                    'description' => 'Tablet untuk profesional kreatif dengan dukungan stylus presisi.',
                    'rating' => 4.7,
                    'reviews' => 95,
                    'price_before' => '9.999.000',
                    'price_after' => '8.999.000',
                    'badge' => ''
                ],
            ]
        ];

        // Memuat view header, product, dan footer sambil mengirimkan data
        return view('templates/header', $data)
             . view('product', $data) // Kita buat view 'product' selanjutnya
             . view('templates/footer');
    }
}
