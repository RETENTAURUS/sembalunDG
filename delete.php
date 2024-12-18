<?php
// Koneksi ke database
include "database.php";

// Periksa apakah parameter ID ada dalam URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Hapus data dari tabel berdasarkan ID
    $sql = "DELETE FROM images WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Redirect kembali ke halaman utama setelah menghapus
    header("Location: admin1.php");
    exit();
} else {
    echo "ID tidak ditemukan dalam URL.";
}
if(isset($_GET['id_destinasi'])) {
    $id = $_GET['id_destinasi'];
    
    // Hapus data dari tabel berdasarkan ID
    $sql = "DELETE FROM destinasi_bukit WHERE id_destinasi = $id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Redirect kembali ke halaman utama setelah menghapus
    header("Location: admin1.php");
    exit();
} else {
    echo "ID tidak ditemukan dalam URL.";
}

// Tutup koneksi
$conn->close();
?>
