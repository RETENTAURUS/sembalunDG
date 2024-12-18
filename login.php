<?php
include "database.php";
session_start();

if (isset($_SESSION["is_login"])) {
    header("location: dashboard.php");
    exit();
}

if (isset($_COOKIE["cookie_username"]) && isset($_COOKIE["cookie_password"])) {
    // Optionally check these cookies against the database
    $name = $_COOKIE["cookie_username"];
    $password = $_COOKIE["cookie_password"]; // Assume it is already MD5 hashed

    // Ambil data pengguna dari database
    $sql = "SELECT * FROM pengguna WHERE nama_pengguna='$name' AND md5(kata_sandi)='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION["is_login"] = true;
        $_SESSION["username"] = $data["nama_pengguna"]; // Store the username in the session
        header("location: dashboard.php");
        exit();
    }
}

function setLoginCookies($name, $password) {
    // Set cookies for username and password
    $cookie_time = time() + (1 * 24 * 60 * 60); // 1 day
    setcookie("cookie_username", $name, $cookie_time, "/");
    setcookie("cookie_password", md5($password), $cookie_time, "/");
}

if (isset($_POST['login'])) {
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";

    // Ambil data pengguna dari database
    $sql = "SELECT * FROM pengguna WHERE nama_pengguna='$name' AND kata_sandi='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION["is_login"] = true;
        $_SESSION["username"] = $data["nama_pengguna"]; // Simpan username ke dalam sesi
        $_SESSION["role"] = $data["role"]; // Simpan role ke dalam sesi

        // Panggil fungsi untuk mengatur cookies saat login berhasil
        setLoginCookies($name, $password);

        // Pengkondisian berdasarkan role
        if ($data["role"] == 1) {
            header("location: admin1.php");
        } else if ($data["role"] == 0) {
            header("location: dashboard.php");
        } else {
            // Jika role tidak diketahui, arahkan ke halaman default
            header("location: default.php");
        }
        exit();
    } else {
        echo "Akun tidak ditemukan";
    }
}
?>


<!DOCTYPE html>
<lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <div class="input-group">
                <input type="text" id="name" name="name" required>
                <label for="name">Username</label>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" required>
                <label for="password">Password</label>
            </div>
            <button type="submit" name="login">Login</button>
        </form>
        <div class="footer">
            Don't have an account? <a href="register.php">Sign up</a>
        </div>
    </div>
</body>
</html>
