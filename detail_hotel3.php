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
            <img src="upload_hotel/kita2.png" alt="Main Image">
        </div>
        <div class="side-images">
            <img src="upload_hotel/kita.png" alt="Side Image 1">
            <img src="upload_hotel/kita3.png" alt="Side Image 2">
        </div>
    </div>
    
    <!-- Kontainer Detail Hotel -->
    <div class="hotel-details">
        <h1>Sembalun Kita Cottege</h1>
        <p class="address">
            Jl. Pelawangan Rinjani No.1, Sembalun Lawang, Kec. Sembalun, Kabupaten Lombok Timur, Nusa Tenggara Barat<br>
            Bar. 83656
        </p>
        <div class="overview">
    <h2>Overview</h2>
    <p>Defano Villa menawarkan akomodasi yang nyaman dengan WiFi gratis dan parkir pribadi gratis tersedia di lokasi.</p>
    <p>Setiap villa dilengkapi dengan AC, TV layar datar, dan area lounge. Tamu juga akan menemukan dapur kecil dengan fasilitas pemasakan dan kamar mandi pribadi. Villa ini dikelilingi oleh pemandangan alam yang indah, ideal untuk bersantai dan menikmati ketenangan. Lokasi ini juga dekat dengan berbagai atraksi alam di sekitar Sembalun.</p>
    <p>Khususnya pasangan dan keluarga menghargai suasana yang tenang, memberikan ulasan positif untuk pengalaman menginap mereka.</p>
</div>

<div class="top-facilities">
    <h2>Fasilitas Unggulan</h2>
    <div class="facilities">
        <div class="facility"><span>📶</span> WiFi Gratis</div>
        <div class="facility"><span>❄️</span> Pendingin Ruangan</div>
        <div class="facility"><span>🚗</span> Parkir Tersedia</div>
        <div class="facility"><span>🍽️</span> Dapur Kecil</div>
        <div class="facility"><span>🌳</span> Pemandangan Alam yang Indah</div>
        <div class="facility"><span>⭐</span> Ulasan Positif dari Tamu</div>
    </div>
</div>
    </div>
</body>

</html>


