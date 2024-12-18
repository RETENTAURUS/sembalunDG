<?php
include "database.php";
session_start();

// Periksa apakah parameter ID ada dalam URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Ambil informasi tentang destinasi wisata dari database berdasarkan ID
    $sql = "SELECT * FROM images WHERE id = $id";
    $result = $conn->query($sql);


    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nama_destinasi = $row['nama_destinasi'];
        $alamat = $row['alamat'];
        $deskripsi =$row['deskripsi'];
        $image_name = $row['image_name'];
        $harga_tiket = $row['harga_tiket']; 
        // Asumsikan ada kolom harga_tiket di tabel images
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak ditemukan dalam URL.";
}

$deskripsi=nl2br($deskripsi);
// Tutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Destinasi Wisata - <?php echo $nama_destinasi; ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Anta&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ita  l,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Molle&family=Silkscreen:wght@400;700&family=Sofia&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Molle&family=Silkscreen:wght@400;700&family=Sofia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="CSS/detail.css">
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
    <div class="destination-detail">
        <img src="uploads/<?php echo $image_name; ?>" alt="Gambar <?php echo $nama_destinasi; ?>">
        <h2><?php echo $nama_destinasi; ?></h2>
        <p><strong>Alamat:</strong> <?php echo $alamat; ?></p>
        <p><strong>Harga Tiket:</strong> <?php echo $harga_tiket; ?></p>
        <p><strong>Deskripsi Wisata:</strong> <?php echo $deskripsi; ?></p>
        <!-- Tombol untuk pembayaran -->
    </div>
</body>
</html>


