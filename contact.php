<?php
include "database.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $email = $_POST['email'];
    $saran = $_POST['message'];

    // Sanitasi input
    $email = $conn->real_escape_string($email);
    $saran = $conn->real_escape_string($saran);

    // Masukkan data ke dalam database
    $query = "INSERT INTO contact (email, saran) VALUES ('$email', '$saran')";
    if ($conn->query($query) === TRUE) {
        echo "<script>alert('Saran Terkirim');</script>";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ita  l,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Molle&family=Silkscreen:wght@400;700&family=Sofia&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Molle&family=Silkscreen:wght@400;700&family=Sofia&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/contact.css">
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
            <a href="#kontak">Contact</a>
        </div>
        <div class="navbar-extra">
            <div class="search-container">
                <form action="logout.php" id="logoutForm" method="post">
                    <button type="submit" class="logout" id="logout">Log Out</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="contact-form-container">
        <form class="contact-form" method="POST" action="contact.php">
            <h2>Contact Us</h2>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="message">Saran</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Send</button>
        </form>
    </div>
</body>
</html>
