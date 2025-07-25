<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index(): string
    {
        // Data untuk dikirim ke view, termasuk judul halaman
        $data = [
            'title' => 'Kontak Kami | ElectroCorp',
            'contact' => '
                <section id="contact" class="py-12 md:py-20 fade-in-section bg-gray-100">
                    <div class="container mx-auto px-4">
                        <div class="text-center mb-12">
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
                                Hubungi <span class="lg-text-orange">Kami</span>
                            </h2>
                            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                                Punya pertanyaan? Kami siap membantu.
                            </p>
                        </div>
                        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
                            <div class="grid md:grid-cols-2 gap-8">
                                <div>
                                    <h3 class="text-lg font-bold mb-4">Informasi Kontak</h3>
                                    <ul class="space-y-3 text-gray-600">
                                        <li class="flex items-start">
                                            <i class="fas fa-map-marker-alt lg-text-orange mt-1 mr-3"></i>
                                            <span>Jl. Teknologi No. 42, Jakarta Selatan, Indonesia</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-phone-alt lg-text-orange mt-1 mr-3"></i>
                                            <span>+62 21 1234 5678</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-envelope lg-text-orange mt-1 mr-3"></i>
                                            <span>info@electrocorp.com</span>
                                        </li>
                                    </ul>
                                    <div class="mt-6">
                                        <h3 class="text-lg font-bold mb-4">Jam Operasional</h3>
                                        <p class="text-gray-600">Senin - Jumat: 08:00 - 17:00<br>Sabtu: 09:00 - 15:00</p>
                                    </div>
                                </div>
                                <div>
                                    <form class="space-y-4">
                                        <div>
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="contact-name">Nama</label>
                                            <input class="w-full px-3 py-2 border rounded-md" id="contact-name" type="text" placeholder="Nama Anda">
                                        </div>
                                        <div>
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="contact-email">Email</label>
                                            <input class="w-full px-3 py-2 border rounded-md" id="contact-email" type="email" placeholder="email@contoh.com">
                                        </div>
                                        <div>
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="contact-message">Pesan</label>
                                            <textarea class="w-full px-3 py-2 border rounded-md" id="contact-message" rows="4" placeholder="Tulis pesan Anda"></textarea>
                                        </div>
                                        <button type="submit" class="w-full lg-bg-orange text-white py-3 rounded-md font-bold hover:bg-orange-700 transition">KIRIM PESAN</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            '
        ];

        return view('contact', $data);
    }
}
