<?php
// Koneksi ke database
include "database.php";
session_start();

// Deklarasi variabel untuk menyimpan pesan kesalahan atau berhasil
$message = "";

// Periksa apakah parameter ID ada dalam URL
if(isset($_GET['id_contact'])) {
    $id = $_GET['id_contact'];
    
    // Ambil informasi tentang destinasi wisata dari database berdasarkan ID
    $sql = "SELECT * FROM contact WHERE id_contact = $id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['email'];
        $saran = $row['saran'];

        // Periksa apakah tombol "Simpan Perubahan" ditekan
       

        // Jika data ditemukan, tampilkan formulir edit
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Destinasi Wisata</title>
    <link rel="stylesheet" href="CSS/edit.css">
</head>
<body>
    <h2>Kritik & Saran</h2>
    <form action="" method="post">
        <input type="hidden" name="id_contact" value="<?php echo $id; ?>">
        <label for="email">From :</label><br>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>" readonly><br>
        <label for="saran">Saran :</label><br>
        <textarea id="saran" name="saran" rows="4" cols="50" readonly><?php echo $saran; ?></textarea><br>
        
    </form>
    <a href="admin1.php" class="back-button">Kembali ke Menu Admin</a>
    <?php echo $message; ?> <!-- Tampilkan pesan di sini -->
    <script>
        // Ambil nilai pesan dari URL dan tampilkan sebagai alert
        <?php if(isset($_GET['pesan'])) { ?>
            alert("<?php echo $_GET['pesan']; ?>");
        <?php } ?>
    </script>
</body>
</html>
<?php
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak ditemukan dalam URL.";
}
// Tutup koneksi
$conn->close();
?>