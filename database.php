<?php

 $servername = "localhost";
 $username = "root";
 $password = "alfin";
 $dbname = "vistas";
  
 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}


// Query untuk mengambil data dari data
?>
