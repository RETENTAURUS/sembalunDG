<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "vistas");
session_start();
// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Cek apakah file telah diunggah
if(isset($_FILES['image'])){
    $image = $_FILES['image']['name']; // Mengambil nama file, bukan destinasi
    $target = "uploads_bukit/".basename($image);
    $nama_bukit = $_POST['nama_bukit'];
    $alamat_bukit = $_POST['alamat_bukit'];
    $harga_tiket = $_POST['harga_tiket'];
    $deskripsi_bukit = $_POST['deskripsi_bukit']; // Memperbaiki variabel
    
    // Memeriksa ekstensi file
    $imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png") {
        echo "Hanya file JPG dan PNG yang diizinkan.";
        exit();
    }

    // Simpan nama file ke database
    $query = "INSERT INTO destinasi_bukit (image_destinasi, nama_bukit, alamat_bukit, harga_tiket,deskripsi_bukit) VALUES ('$image', '$nama_bukit', '$alamat_bukit','$harga_tiket','$deskripsi_bukit')";

    mysqli_query($koneksi, $query);

    // Pindahkan file yang diunggah ke folder uploads

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo "<script>alert('Gambar berhasil diunggah.');</script>";
        echo "<script>window.location.href = 'bukit.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan saat mengunggah gambar.');</script>";
    }
}
?>
