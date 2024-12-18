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
            <img src="upload_hotel/bukit35.png" alt="Main Image">
        </div>
        <div class="side-images">
            <img src="upload_hotel/bukit351.png" alt="Side Image 1">
            <img src="upload_hotel/bukit352.png" alt="Side Image 2">
        </div>
    </div>
    
    <!-- Kontainer Detail Hotel -->
    <div class="hotel-details">
        <h1>Bukit Tiga Lima Boutique</h1>
        <p class="address">
            Jl. Pelawangan Rinjani No.1, Sembalun Lawang, Kec. Sembalun, Kabupaten Lombok Timur, Nusa Tenggara Barat<br>
            Bar. 83656
        </p>
        <div class="overview">
    <h2>Overview</h2>
    <p>Dengan WiFi gratis di seluruh properti, Sembalun Bukit Tiga Boutique menawarkan akomodasi yang nyaman dengan parkir pribadi gratis tersedia di lokasi.</p>
    <p>Setiap kamar di hotel ini dilengkapi dengan AC dan TV layar datar. Tamu juga akan menemukan fasilitas seperti ketel dan minibar di dalam kamar. Setiap kamar dilengkapi dengan kamar mandi pribadi. Selain itu, tamu dapat menikmati pemandangan indah dari area teras dan taman yang luas, cocok untuk bersantai. Hotel ini dekat dengan berbagai atraksi alam di Sembalun.</p>
    <p>Khususnya pasangan menghargai lokasi ini, memberikan nilai tinggi untuk pengalaman menginap mereka.</p>
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
</body>

</html>


