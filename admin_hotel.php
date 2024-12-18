<?php
// Koneksi ke database
include "database.php";
session_start();

// Query untuk mengambil data dari tabel Anda (misalnya tabel destinasi_wisata)
$sql = "SELECT * FROM images";
$result = $conn->query($sql);

$sql2 = "SELECT * FROM destinasi_bukit";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM hotel";
$result3 = $conn->query($sql3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="CSS/admin.css">

	<title>Admin</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<span class="text">Vista Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="admin1.php">
					<i class='bx bx-water' ></i>
					<span class="text">Waterfall</span>
				</a>
			</li>
			<li>
				<a href="bukit.php">
					<i class='bx bxs-landscape' ></i>
					<span class="text">Mountain & Hill</span>
				</a>
			</li>
			<li>
            <li>
				<a href="admin_hotel.php">
					<i class='bx bxs-landscape' ></i>
					<span class="text">Hotel</span>
				</a>
			</li>
			<li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="saran_admin.php" class="logout">
					<i class='bx bxs-message-alt-edit'></i>
					<span class="text">Saran</span>
				</a>
			</li>
		
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<a href="#" class="nav-link">Mountain & Hill </a>
			<a href="#" class="profile">
				<i class='bx bx-data' ></i>
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<table>
        <tr>
            <th>ID</th>
            <th>Nama Destinasi</th>
            <th>Alamat</th>
            <th>Deskripsi</th>
            <th>Action</th>
        </tr>
        <?php
        // Loop untuk menampilkan data dari tabel
        if ($result3->num_rows > 0) {
            while($row = $result3->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id_hotel"]."</td>";
                echo "<td class='nama_bukit'>".$row["nama_hotel"]."</td>";
                echo "<td>".$row["alamat_hotel"]."</td>";
                echo "<td>".$row["deskripsi_hotel"]."</td>";
                echo "<td><a href='edit_hotel.php?id_hotel=".$row["id_hotel"]."'>Edit</a> | <a href='delete.php?id_hotel=".$row["id_hotel"]."' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
        }
        ?>
    </table>
	<a href="gallery_hotel.php" class="add-data-button">Tambah Data</a>

			

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="JS/scriptadmin.js"></script>
</body>
</html>