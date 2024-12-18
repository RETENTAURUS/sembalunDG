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
            <img src="upload_hotel/defano.png" alt="Main Image">
        </div>
        <div class="side-images">
            <img src="upload_hotel/defano2.png" alt="Side Image 1">
            <img src="upload_hotel/defano3.png" alt="Side Image 2">
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
    <p>Sembalun Kita Cottage menawarkan akomodasi yang nyaman dengan akses WiFi gratis dan parkir pribadi gratis di lokasi.</p>
    <p>Setiap cottage dilengkapi dengan AC, TV layar datar, dan area duduk. Tamu juga akan menemukan fasilitas untuk membuat teh dan kopi serta kamar mandi pribadi. Dikelilingi oleh pemandangan alam yang indah, cottage ini merupakan tempat ideal untuk bersantai dan menikmati suasana tenang di Sembalun. Lokasi ini juga dekat dengan berbagai atraksi wisata lokal.</p>
    <p>Khususnya para tamu menikmati suasana yang damai, memberikan ulasan positif untuk pengalaman menginap mereka.</p>
</div>

<div class="top-facilities">
    <h2>Fasilitas Unggulan</h2>
    <div class="facilities">
        <div class="facility"><span>📶</span> WiFi Gratis</div>
        <div class="facility"><span>❄️</span> Pendingin Ruangan</div>
        <div class="facility"><span>🚗</span> Parkir Tersedia</div>
        <div class="facility"><span>🍽️</span> Fasilitas Membuat Teh dan Kopi</div>
        <div class="facility"><span>🌳</span> Pemandangan Alam yang Menawan</div>
        <div class="facility"><span>⭐</span> Ulasan Positif dari Tamu</div>
    </div>
</div>
</body>

</html>


