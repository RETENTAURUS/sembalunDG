<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Layout</title>
    <link rel="stylesheet" href="CSS/detail_hotel.css">
</head>
<body>
    <nav class="navbar">
        <a href="#" class="logo">
            <img src="img/vistaLogo.png" alt="Logo">
        </a>
        <a href="dashboard.php" class="navbar-logo">Sembalun DG</a>
        <div class="navbar-nav">
            <a href="dashboard.php" id="home">Home</a>
            <a href="gallery_full.php">Gallery</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="navbar-extra">
            <div class="search-container">
                <form action="logout.php" id="logoutForm" method="post">
                    <button type="submit" class="logout" id="logout">Log Out</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="divider"></div>

    <!-- Kontainer Gambar Utama -->
    <div class="image-container">
        <div class="main-image">
            <img src="upload_hotel/nusantara.png" alt="Main Image">
        </div>
        <div class="side-images">
            <img src="upload_hotel/nusantara2.png" alt="Side Image 1">
            <img src="upload_hotel/nusantara3.png" alt="Side Image 2">
        </div>
    </div>
    
    <!-- Kontainer Detail Hotel -->
    <div class="hotel-details">
        <h1>Nusantara Hotel Sembalun</h1>
        <p class="address">
            Jl. Pelawangan Rinjani No.1, Sembalun Lawang, Kec. Sembalun, Kabupaten Lombok Timur, Nusa Tenggara Barat<br>
            Bar. 83656
        </p>
        <div class="overview">
            <h2>Overview</h2>
                <p>Dengan WiFi gratis di seluruh properti, Nusantara Hotel Sembalun menawarkan akomodasi yang nyaman dengan parkir pribadi gratis tersedia di lokasi.</p>
                 <p>Setiap kamar di hotel ini dilengkapi dengan AC dan TV layar datar. Anda akan menemukan ketel, pemanggang roti, dan microwave di dalam kamar. Setiap kamar dilengkapi dengan kamar mandi pribadi. Selain itu, tamu dapat menggunakan fasilitas barbekyu dan area taman yang luas, cocok untuk bersantai. Hotel ini berlokasi 6,8 mil dari Kebun Strawberry, sebuah atraksi populer.</p>
                 <p>Khususnya pasangan menghargai lokasi ini, memberikan nilai 9,2 untuk perjalanan dua orang.</p>
            </div>
            <div class="top-facilities">
                 <h2>Fasilitas Unggulan</h2>
                    <div class="facilities">
                    <div class="facility"><span>📶</span> WiFi Gratis</div>
                    <div class="facility"><span>❄️</span> Pendingin Ruangan</div>
                    <div class="facility"><span>🚗</span> Parkir Tersedia</div>
                    <div class="facility"><span>🍽️</span> Layanan Makanan dan Minuman</div>
                    <div class="facility"><span>🌳</span> Taman yang Luas</div>
                    <div class="facility"><span>⭐</span> Penilaian Tinggi di Area</div>
                </div>
            </div>
    </div>
</body>

</html>


