<?php
// Koneksi ke database
include "database.php";
session_start();

// Query untuk mengambil data dari tabel Anda (misalnya tabel destinasi_wisata)
$sql2 = "SELECT * FROM contact";
$result2 = $conn->query($sql2);
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
			<a href="#" class="nav-link">Inbox </a>
			<a href="#" class="profile">
				<i class='bx bx-data' ></i>
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<table>
        <tr>
            <th>ID</th>
            <th>email</th>
            <th>saran</th>
        </tr>
        <?php
        // Loop untuk menampilkan data dari tabel
        if ($result2->num_rows > 0) {
			while ($row = $result2->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["id_contact"] . "</td>";
				echo "<td>" . $row["email"] . "</td>";
				echo "<td>" . $row["saran"] . "</td>";
				echo "<td><a href='edit3.php?id_contact=" . $row["id_contact"] . "'>Show</a></td>"; // Perbaikan di sini
				echo "</tr>";
			}
		} else {
			echo "<tr><td colspan='4'>Tidak ada data</td></tr>"; // Perbaikan di sini
		}
		?>
		
    </table>

			

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="JS/scriptadmin.js"></script>
</body>
</html>