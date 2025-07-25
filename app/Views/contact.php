<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="Hubungi kami untuk informasi lebih lanjut atau bantuan. Kami siap membantu Anda dengan berbagai kebutuhan.">
    <meta name="keywords" content="hubungi kami, customer service, produk, layanan">
    <meta property="og:title" content="Hubungi Kami">
    <meta property="og:description" content="Hubungi kami untuk pertanyaan atau bantuan lebih lanjut.">
    <meta property="og:image" content="https://link-to-image.jpg">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Your Company Name">
    <title>Hubungi Kami</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
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
            color: #2c3e50;
        }
        h2, h3, .highlight-text {
            color: #ff6600ff;
        }

        h1 { font-size: 2.5em; margin-bottom: 20px; }
        h2 { font-size: 1.8em; border-bottom: 3px solid #ff6600ff; padding-bottom: 10px; margin-top: 30px; margin-bottom: 20px; }
        h3 { font-size: 1.5em; margin-bottom: 15px; }

        .text-tengah { text-align: center; }

        .contact-form-section, .operating-hours {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        form { display: flex; flex-direction: column; gap: 15px; margin-top: 20px; }
        form input, form textarea { font-size: 1em; width: 100%; padding: 15px; border: 1px solid #bdc3c7; border-radius: 5px; box-sizing: border-box; }
        form button { padding: 15px; background-color: #ff6600ff; color: white; border: none; border-radius: 5px; font-size: 1.1em; font-weight: bold; cursor: pointer; }
        form button:hover { background-color: #e65c00; transition: background-color 0.3s ease; }
        
        .operating-hours p { font-size: 1.1em; text-align: center; margin: 10px 0;}
        
        .additional-info {
            margin-top: 30px; padding: 20px; background-color: #eaf6ff; border-left: 5px solid #3498db; border-radius: 8px;
        }

        .social-media-section {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-icon {
            font-size: 1.8em;
            color: #34495e;
            transition: transform 0.3s, color 0.3s;
        }

        .social-icon:hover {
            transform: scale(1.2);
        }
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
                <label for="nama">Nama Anda</label>
                <input type="text" id="nama" name="nama" placeholder="Nama Anda" required aria-label="Nama Anda">
                
                <label for="email">Email Anda</label>
                <input type="email" id="email" name="email" placeholder="contoh@domain.com" required aria-label="Email Anda">
                
                <label for="telepon">Nomor Telepon Anda</label>
                <input type="tel" id="telepon" name="telepon" placeholder="+62 812 3456 7890" required aria-label="Nomor Telepon Anda">
                
                <label for="pesan">Pesan Anda</label>
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
            const email = document.getElementById('email').value;
            const telepon = document.getElementById('telepon').value;
            
            if (!nama || !email || !telepon) {
                alert("Semua kolom harus diisi!");
                return;
            }
            
            // Validasi Email
            const emailPattern = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
            if (!email.match(emailPattern)) {
                alert("Email tidak valid!");
                return;
            }
            
            // Validasi Nomor Telepon
            const telPattern = /^(\+62|62)8[1-9][0-9]{7,10}$/;
            if (!telepon.match(telPattern)) {
                alert("Nomor telepon tidak valid!");
                return;
            }
            
            alert(`Terima kasih, ${nama}! Pesan Anda telah berhasil dikirim.`);
            document.getElementById('contactForm').reset();
        });
    </script>

</body>
</html>
