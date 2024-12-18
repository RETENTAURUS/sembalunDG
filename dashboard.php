<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "alfin", "vistas");

session_start();
if (!isset($_SESSION['is_login'])) {
    header("location:login.php");
    exit();
}

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Ambil data gambar dari database
$query = "SELECT * FROM images";
$result = mysqli_query($koneksi, $query);

$query2 = "SELECT * FROM destinasi_bukit";
$result2 = mysqli_query($koneksi, $query2);

$query3 = "SELECT * FROM hotel";
$result3 = mysqli_query($koneksi, $query3);

// Cek apakah query berhasil
if (!$result) {
    echo "Terjadi kesalahan saat menjalankan query: " . mysqli_error($koneksi);
    exit();
}
if (!$result2) {
  echo "Terjadi kesalahan saat menjalankan query: " . mysqli_error($koneksi);
  exit();
}
if (!$result3) {
  echo "Terjadi kesalahan saat menjalankan query: " . mysqli_error($koneksi);
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ita  l,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Molle&family=Silkscreen:wght@400;700&family=Sofia&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Molle&family=Silkscreen:wght@400;700&family=Sofia&display=swap" rel="stylesheet">
    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- my style -->
    <link rel="stylesheet" href="CSS/dashboard.css" />
  </head>

  <body>
    <nav class="navbar">
        <a href="#" class="logo">
         <img src="img/vistaLogo.png" alt="Logo">
        </a>
        <a href="dashboard.php" class="navbar-logo">Sembalun DG</a>
        <a href="dashboard.php" class="navbar-logo"></a>
        <div class="navbar-nav">
        <a href="dashboard.php" id="home">Home</a>
        <a href="gallery_full.php">Gallery</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        </div>
      </div>
      <div class="navbar-extra">
        <div class="search-container">
          <form action="logout.php" id="logoutForm" method="post">
            <button type="submit" class="logout" id="logout">Log Out</button>
          </form>
        </div>
    </div>
        </div>
      </div>
    </nav>
    <section class="hero" id="home">
      <main class="content">
        <div class="kotak"> 
          <img src="img/sembalun4.jpg" alt="Gambar" class="gambar"/>
          <div class="logo-dinpar">
            <img src="img/wonder.png" alt="Dinpar Logo"/>
          </div>
            <p class="text-hero">Enjoy Your Dream Vacation With Sembalun</p>
            <p class="text1-hero">"Nikmati Keelokan Alam Sembalun, Di Mana Pemandangan Hijau dan Latar Belakang Gunung Rinjani Membawa Kedamaian Jiwa. Temukan Keindahan Tersembunyi di Lembah Sembalun, di Mana Setiap Langkah Membawa Anda Lebih Dekat ke Surga Alam Lombok"</p>
           <p class="text2-hero">Trusted By</p>
        </div>
      </main>
    </section>
    <section class="hero-after">
    <div class="warning">
      <a href="#"><i class="icon" data-feather="alert-triangle"></i></a>
      <p>Check the latest COVID-19 restriction before you travel. <a href="https://www.cdc.gov/coronavirus/2019-ncov/your-health/about-covid-19.html">Learn more</a></p>
    </div>
    </section>
    <div class="Hcategory">
        <h3>Waterfall</h3>
    </div>
    <div class="gallery">
    <?php while($row = mysqli_fetch_assoc($result)): ?>
        <div class="card">
            <img src="uploads/<?php echo $row['image_name']; ?>" alt="Gambar">
            <div class="card-body">
                <h3><?php echo $row['nama_destinasi']; ?></h3>
                <p><?php echo $row['alamat']; ?></p>
                <a href="detail.php?id=<?php echo $row['id']; ?>" class="btn-view">View</a>
            </div>
        </div>
    <?php endwhile; ?>
</div>
<div class="Hcategory">
    <h3>Mountain & Hill</h3>
</div>
<div class="gallery">
    <?php while($row = mysqli_fetch_assoc($result2)): ?>
        <div class="card">
            <img src="uploads_bukit/<?php echo $row['image_destinasi']; ?>" alt="foto">
            <div class="card-body">
                <h3><?php echo $row['nama_bukit']; ?></h3>
                <p><?php echo $row['alamat_bukit']; ?></p>
                <a href="detail2.php?id_destinasi=<?php echo $row['id_destinasi']; ?>" class="btn-view">View</a>
            </div>
        </div>
    <?php endwhile; ?>
</div>
<div class="Hcategory">
    <h3>Hotel</h3>
</div>
<div class="gallery">
        <div class="card">
            <img src="upload_hotel/nusantara.png" alt="foto">
            <div class="card-body">
                <h3>Nusantara Hotel</h3>
                <p>Jalan Raya Sembalun, Sembalun Lawang, Kecamatan Sembalun</p>
                <a href="detail_hotel.php" class="btn-view">View</a>
            </div>
    </div>
    <div class="card">
            <img src="upload_hotel/bukit35.png" alt="foto">
            <div class="card-body">
                <h3>Bukit Tiga Lima</h3>
                <p>Jalan Raya Sembalun, Sembalun Lawang, Kecamatan Sembalun</p>
                <a href="detail_hotel2.php" class="btn-view">View</a>
            </div>
    </div>
    <div class="card">
            <img src="upload_hotel/kita.png" alt="foto">
            <div class="card-body">
                <h3>Sembalun Kita Cottege</h3>
                <p>Jl. Raya Sembalun Lawang, Sembalun Bumbung, Kec. Sembalun</p>
                <a href="detail_hotel3.php" class="btn-view">View</a>
            </div>
    </div>
    <div class="card">
            <img src="upload_hotel/defano.png" alt="foto">
            <div class="card-body">
                <h3>Defano Villa</h3>
                <p>sembalun Lawang, dusun Lendang luar , desa sembalun </p>
                <a href="detail_hotel4.php" class="btn-view">View</a>
            </div>
    </div>
</div>


    <script>
      feather.replace();
    </script>
<script src="JS/scriptdash.js"></script>
  </body>
<body>
    <section id="kontak">
        <?php include "layout/footer.php"?>
    </section>
</body>
</html>
<?php mysqli_close($koneksi); ?>
