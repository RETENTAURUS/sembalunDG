<?php
// Koneksi ke database
include "database.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Gambar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="file"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="file"] {
            border: none;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Upload Gambar</h2>
    <form id="uploadForm" enctype="multipart/form-data" action="upload2.php" method="POST">
        <label for="image">Pilih Gambar:</label>
        <input type="file" name="image" id="image" accept="image/jpeg, image/png, image/jpg">
        
        <label for="nama_bukit">Nama Destinasi:</label>
        <input type="text" name="nama_bukit" id="nama_bukit">

        <label for="alamat_bukit">Alamat:</label>
        <input type="text" name="alamat_bukit" id="alamat_bukit">

        <label for="harga_tiket">Harga Tiket:</label>
        <input type="text" name="harga_tiket" id="harga_tiket">
        
        <label for="deskripsi_bukit">Deskripsi Wisata:</label><br>
        <textarea id="deskripsi_bukit" name="deskripsi_bukit" rows="10" cols="52"></textarea><br>

        
        <button type="submit">Unggah</button>
    </form>
</body>
</html>
