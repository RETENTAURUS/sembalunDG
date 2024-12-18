<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Footer Example</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
      .footer {
        background-color: #333;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        text-align: left;
        flex-wrap: wrap;
        width: 1500px; /* Lebar footer */
        height: 300px; /* Tinggi footer */
      }
      .footer h2 {
        margin-top: 50px;
        margin-left: 100px;
        text-align: left; /* Mengatur posisi teks di kiri */
        color: #ffff; /* Mengubah warna judul menjadi #333 */
      }
      .center-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        flex-grow: 1;
      }
      .footer-nav {
        list-style-type: none;
        padding: 0;
        margin-top: 50px;
        text-align: center; /* Mengatur posisi teks navigasi menjadi center */
      }
      .footer-nav li {
        margin-bottom: 10px;
      }
      .footer-nav li a {
        text-decoration: none;
        color: #ffff;
      }
      .footer-nav li:first-child a {
        font-weight: bold; /* Menjadikan teks pada navigasi pertama menjadi bold */
      }
      .social-media {
        list-style-type: none;
        padding: 0;
        text-align: left;
        margin-top: 44px;
        margin-left: 60px;
      }
      .social-media li {
        display: inline;
        margin: 0 3px;
      }
      .social-media li a {
        text-decoration: none;
        color: #fff;
        border-radius: 10px; /* Menjadikan sudut tombol tumpul */
      }
      .reservation {
        margin-top: 35px;
        width: 300px;
      }
      .reservation h3 {
        color: #fff; /* Mengubah warna teks "Ayo reservasi tempatmu sekarang" menjadi #333 */
      }
      .reservation input[type="email"] {
        padding: 10px;
        width: calc(100% - 22px);
        margin-top: 10px;
        margin-bottom: 20px;
        box-sizing: border-box;
        background-color: #333; /* Mengubah warna latar input email menjadi #333 */
        color: #f1f1f1; /* Mengubah warna teks input email menjadi #f1f1f1 */
        border-radius: 10px;
      }
      .reservation button {
        padding: 10px 20px;
        background-color: #fcefca;
        color: #333;
        border: none;
        cursor: pointer;
        font-weight: bold;
        border-radius: 10px;
      }
      .reservation button:hover {
        background-color: #ffe08c;
        font-weight: bold; /* Membuat teks tombol hoover menjadi bold */
        border-radius: 10px;
      }
      .left-section {
        display: flex;
        flex-direction: column;
        margin-right: 20px;
      }
    </style>
  </head>
  <body>
    <!-- Footer Section -->
    <div class="footer">
      <div class="left-section">
        <h2>Vista Sembalun</h2>
        <div class="social-media">
        <ul class="social-icons">
        <li>
          <a href="#" class="fb"><i data-feather="facebook"></i></a>
        </li>
        <li>
          <a href="#"><i data-feather="instagram"></i></a>
        </li>
        <li>
          <a href="#"><i data-feather="twitter"></i></a>
        </li>
        <li>
          <a href="#"><i data-feather="linkedin"></i></a>
        </li>
      </ul>
        </div>
      </div>
      <div class="center-section">
        <ul class="footer-nav">
          <li><a href="#">Beranda</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Activities</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </body>
  <script>
      feather.replace();
    </script>
</html>
