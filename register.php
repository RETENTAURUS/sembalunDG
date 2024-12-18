<?php
include "database.php";
if(isset($_POST['register'])) {
    // membuat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);
    // cek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // menerima data dari form
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";
    $fname = isset($_POST['fname']) ? $_POST['fname'] : "";
    $lname = isset($_POST['lname']) ? $_POST['lname'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";

    // Memeriksa apakah username dan email tidak sama
    $sql_check = "SELECT * FROM pengguna WHERE nama_pengguna = '$name' OR email = '$email'";
    $result_check = $conn->query($sql_check);

    if ($result_check->num_rows > 0) {
        echo "<div style='background-color: #ffcccc; color: #cc0000; padding: 10px; border-radius: 5px; margin-bottom: 10px; position: absolute; top: 85px; left:42%;'>Error: Username atau email sudah digunakan.</div>";

    } else {
        // Query untuk insert data
        $sql = "INSERT INTO pengguna (nama_pengguna, kata_sandi, fname, lname, email) VALUES ('$name', '$password','$fname','$lname','$email')";

        // Eksekusi query
        if ($conn->query($sql) === TRUE) {
            echo "<div id='error-message' style='background-color: #59d672; color: #ffffff; padding: 10px; border-radius: 5px; margin-bottom: 10px; position: absolute; top: 85px; left:48%;'>Pendaftaran Berhasil!</div>";
            echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>";
echo "<script>
    $(document).ready(function(){
        $('#error-message').fadeIn('slow');
        setTimeout(function(){
            $('#error-message').fadeOut('slow');
        }, 3000); // Menghilangkan pesan error setelah 3 detik
    });
</script>";

        } else {
            echo "Error: " .$sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <div class="container">
        <h1>register</h1>
        <form action="register.php" method="POST">
             <div class="input-group">
                <input type="text" id="fname" name="fname" required>
                <label for="fname">Firts Name</label>
            </div>
            <div class="input-group">
                <input type="text" id="lname" name="lname" required>
                <label for="lname">Last Name</label>
            </div>
            <div class="input-group">
                <input type="text" id="name" name="name" required>
                <label for="name">Username</label>
            </div>
            <div class="input-group">
                <input type="text" id="email" name="email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" required>
                <label for="password">Enter Password</label>
            </div>
            <button type="submit" name="register">Sign Up</button>
            <a href="login.php">login</a>

        </form>

    </div>
</body>
</html>
