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

// Cek apakah query berhasil
if (!$result) {
    echo "Terjadi kesalahan saat menjalankan query: " . mysqli_error($koneksi);
    exit();
}
if (!$result2) {
  echo "Terjadi kesalahan saat menjalankan query: " . mysqli_error($koneksi);
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Molle&family=Silkscreen:wght@400;700&family=Sofia&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Molle&family=Silkscreen:wght@400;700&family=Sofia&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/gallery_full.css" />
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
    <div class="Gcategory">
      <h3 text-align="center">Waterfall</h3>
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
<div class="Gcategory">
    <h3 text-align="center">Mountain & Hill</h3>
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
<div class="Gcategory">
<h3 text-align="center">Hotel</h3>
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
  <?php include "layout/footer.php"?>
  </body>
</html>
<?php mysqli_close($koneksi); ?>
