<?php
// Koneksi ke database
include "database.php";
session_start();

// Deklarasi variabel untuk menyimpan pesan kesalahan atau berhasil
$message = "";

// Periksa apakah parameter ID ada dalam URL
if(isset($_GET['id_destinasi'])) {
    $id = $_GET['id_destinasi'];
    
    // Ambil informasi tentang destinasi wisata dari database berdasarkan ID
    $sql = "SELECT * FROM destinasi_bukit WHERE id_destinasi = $id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nama_destinasi = $row['nama_bukit'];
        $alamat = $row['alamat_bukit'];
        $harga_tiket = $row['harga_tiket'];
        $deskripsi = $row['deskripsi_bukit'];

        // Periksa apakah tombol "Simpan Perubahan" ditekan
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil nilai yang diperbarui dari formulir
            $nama_destinasi_baru = $_POST['nama_bukit'];
            $alamat_baru = $_POST['alamat_bukit'];
            $deskripsi_baru = $_POST['deskripsi_bukit'];
            $tiket_baru = $_POST['harga_tiket'];
            
            // Update data di database
            $update_sql = "UPDATE destinasi_bukit SET nama_bukit='$nama_destinasi_baru', alamat_bukit='$alamat_baru', deskripsi_bukit='$deskripsi_baru',harga_tiket='$tiket_baru' WHERE id_destinasi=$id";

            if ($conn->query($update_sql) === TRUE) {
                // Pesan berhasil disimpan dalam variabel PHP
                $message = "Perubahan berhasil disimpan.";
                // Setelah memperbarui, arahkan kembali ke halaman edit dengan pesan sebagai parameter URL
                header("Location: edit2.php?id_destinasi=$id&pesan=Perubahan berhasil disimpan");
                exit();
            } else {
                $message = "Error: " . $update_sql . "<br>" . $conn->error;
            }
        }

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
    <h2>Edit Destinasi Wisata</h2>
    <form action="" method="post">
        <input type="hidden" name="id_destinasi" value="<?php echo $id; ?>">
        <label for="nama_bukit">Nama Destinasi:</label><br>
        <input type="text" id="nama_bukit" name="nama_bukit" value="<?php echo $nama_destinasi; ?>"><br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat_bukit" name="alamat_bukit" value="<?php echo $alamat; ?>"><br>
        <label for="harga_tiket">Harga tiket:</label><br>
        <input type="text" id="harga_tiket" name="harga_tiket" value="<?php echo $harga_tiket; ?>"><br>
        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi_bukit" name="deskripsi_bukit" rows="4" cols="50"><?php echo $deskripsi; ?></textarea><br>
        <button type="submit">Simpan Perubahan</button>
        
    </form>
    <a href="bukit.php" class="back-button">Kembali ke Menu Admin</a>
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