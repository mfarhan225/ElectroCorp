<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            width: 100%;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h1, h2, h3 {
            text-align: center;
        }
        h1 {
            color: #2c3e50; /* Warna biru gelap untuk "Hubungi" */
        }
        h2, h3, .highlight-text {
            color: #ff6600ff; /* Warna oranye untuk "Kami", h2, dan h3 */
        }
        /* AKHIR PERUBAHAN CSS */

        h1 { font-size: 2.5em; margin-bottom: 20px; }
        h2 { font-size: 1.8em; border-bottom: 3px solid #ff6600ff; padding-bottom: 10px; margin-top: 30px; margin-bottom: 20px; }
        h3 { font-size: 1.5em; margin-bottom: 15px; }

        .text-tengah {
        text-align: center;
        }

        .contact-form-section, .operating-hours {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        form { display: flex; flex-direction: column; gap: 15px; margin-top: 20px; }
        form input, form textarea { font-size: 1em; font-family: inherit; width: 100%; padding: 15px; border: 1px solid #bdc3c7; border-radius: 5px; font-size: 1em; box-sizing: border-box; }
        form button { padding: 15px; background-color: #ff6600ff; color: white; border: none; border-radius: 5px; font-size: 1.1em; font-weight: bold; cursor: pointer; }
        
        .operating-hours p { font-size: 1.1em; text-align: center; margin: 10px 0;}
        
        .additional-info {
            margin-top: 30px; padding: 20px; background-color: #eaf6ff; border-left: 5px solid #3498db; border-radius: 8px;
        }
        .additional-info .info-text { font-size: 1em; line-height: 1.6; color: #34495e; margin: 0 0 15px 0; }
        .contact-item { display: flex; align-items: center; margin-bottom: 12px; font-size: 1.1em; }
        .contact-item i { font-size: 1.2em; color: #34495e; width: 30px; text-align: center; margin-right: 10px; }
        .contact-item a { color: #2980b9; text-decoration: none; transition: text-decoration 0.2s; }
        .contact-item a:hover { text-decoration: underline; }
        .fa-whatsapp { color: #25D366 !important; }

        /* CSS BARU UNTUK MEDIA SOSIAL */
        .social-media-section {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px; /* Jarak antar ikon */
        }

        .social-icon {
            font-size: 1.8em; /* Ukuran ikon */
            color: #34495e;
            transition: transform 0.3s, color 0.3s;
        }

        .social-icon:hover {
            transform: scale(1.2); /* Efek membesar saat disentuh */
        }
        
        /* Warna spesifik untuk setiap ikon saat hover */
        .social-icon.facebook:hover   { color: #1877F2; }
        .social-icon.instagram:hover { color: #E4405F; }
        .social-icon.twitter:hover   { color: #1DA1F2; }
        .social-icon.discord:hover   { color: #5865F2; }

    </style>
</head>
<body>

    <div class="container">
        <h1>Hubungi <span class="highlight-text">Kami</span></h1>
        <p class="text-tengah">Punya pertanyaan? Kami siap membantu.</p>

        <div class="contact-form-section">
            <h2>Kirim Pesan</h2>
            <form id="contactForm">
                <input type="text" id="nama" name="nama" placeholder="Nama Anda" required>
                <input type="email" id="email" name="email" placeholder="Email@contoh.com" required>
                <input type="tel" id="telepon" name="telepon" placeholder="08...." required>
                <textarea id="pesan" name="pesan" rows="6" placeholder="Tulis Pesan Anda" required></textarea>
                <button type="submit">KIRIM PESAN</button>
            </form>
        </div>
        
        <div class="operating-hours">
            <h2>Jam Oprasional</h2>
            <p><strong>Senin - Jumat:</strong> 08:00 - 17:00</p>
            <p><strong>Sabtu:</strong> 09:00 - 15:00</p>
        </div>

        <div class="additional-info">
            <p class="info-text">Untuk pertanyaan seputaran produk dan penjualan, jangan ragu untuk langsung menghubungi marketing kami:</p>
            <div class="contact-item">
                <i class="fa-solid fa-map-marker-alt"></i>
                <span>Jl. Teknologi No. 42, Jakarta Selatan, Indonesia</span>
            </div>
            <div class="contact-item">
                <i class="fa-solid fa-envelope"></i>
                <a href="mailto:info@electrocorp.com">info@electrocorp.com</a>
            </div>
            <div class="contact-item">
                <i class="fa-brands fa-whatsapp"></i>
                <a href="https://wa.me/+62 21 1234 5678" target="_blank">+62 21 1234 5678</a>
            </div>
        </div>

        <div class="social-media-section">
            <h3>Ikuti Kami</h3>
            <div class="social-icons">
                <a href="https://www.facebook.com/?locale=id_ID" target="_blank" class="social-icon facebook" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank" class="social-icon instagram" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://x.com/" target="_blank" class="social-icon twitter" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://discord.com/" target="_blank" class="social-icon discord" title="Discord"><i class="fa-brands fa-discord"></i></a>
            </div>
        </div>
        </div>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const nama = document.getElementById('nama').value;
            if (nama) {
                alert(`Terima kasih, ${nama}! Pesan Anda telah berhasil dikirim.`);
                document.getElementById('contactForm').reset();
            }
        });
    </script>

</body>
</html>