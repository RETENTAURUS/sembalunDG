<?php
// Koneksi ke database
include "database.php";
session_start();

// Deklarasi variabel untuk menyimpan pesan kesalahan atau berhasil
$message = "";

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
        $deskripsi = $row['deskripsi'];
        $harga_tiket = $row['harga_tiket'];

        // Periksa apakah tombol "Simpan Perubahan" ditekan
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil nilai yang diperbarui dari formulir
            $nama_destinasi_baru = $_POST['nama_destinasi'];
            $alamat_baru = $_POST['alamat'];
            $deskripsi_baru = $_POST['deskripsi'];
            $tiket_baru = $_POST['harga_tiket'];
            
            
            // Update data di database
            $update_sql = "UPDATE images SET nama_destinasi='$nama_destinasi_baru', alamat='$alamat_baru', deskripsi='$deskripsi_baru', harga_tiket='$tiket_baru' WHERE id=$id";

            if ($conn->query($update_sql) === TRUE) {
                // Pesan berhasil disimpan dalam variabel PHP
                $message = "Perubahan berhasil disimpan.";
                // Setelah memperbarui, arahkan kembali ke halaman edit dengan pesan sebagai parameter URL
                header("Location: edit.php?id=$id&pesan=Perubahan berhasil disimpan");
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
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nama_destinasi">Nama Destinasi:</label><br>
        <input type="text" id="nama_destinasi" name="nama_destinasi" value="<?php echo $nama_destinasi; ?>"><br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" value="<?php echo $alamat; ?>"><br>
        <label for="harga_tiket">Harga tiket:</label><br>
        <input type="text" id="harga_tiket" name="harga_tiket" value="<?php echo $harga_tiket; ?>"><br>
        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi" rows="4" cols="50"><?php echo $deskripsi; ?></textarea><br>
        <button type="submit">Simpan Perubahan</button>
        
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