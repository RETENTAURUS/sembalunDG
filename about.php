<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Molle&family=Silkscreen:wght@400;700&family=Sofia&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Molle&family=Silkscreen:wght@400;700&family=Sofia&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/about.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.min.css"/>
  </head>
  <body>
  <nav class="navbar">
        <a href="#" class="logo">
         <img src="img/vistaLogo.png" alt="Logo">
        </a>
        <a href="dashboard.php" class="navbar-logo">Sembalun DG</a>
        <a href="dashboard.php" class="navbar-logo"></a>
        <div class="navbar-nav">
        <a href="dashboard.php" id="home">Home</a>
        <a href="gallery_full.php">Gallery</a>
       <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        </div>
      </div>
      <div class="navbar-extra">
        <div class="search-container">
          <form action="logout.php" id="logoutForm" method="post">
            <button type="submit" class="logout" id="logout">Log Out</button>
          </form>
        </div>
    </div>
        </div>
      </div>
    </nav>

    <div class="about-container">
      <div class="profile-image">
        <img src="img/vistaLogo.jpg" alt="" />
      </div>
      <div class="description">
      <h1>Vista Sembalun</h1>
        <p>Selamat datang di situs web destinasi wisata Sembalun!</p>
        <p>Kami adalah tim yang berdedikasi untuk memperkenalkan keindahan dan kekayaan alam Sembalun kepada dunia. Terletak di kaki Gunung Rinjani, Sembalun adalah surga tersembunyi yang menawarkan pemandangan spektakuler, udara segar pegunungan, serta budaya lokal yang kaya.</p>
        
        <h2>Misi Kami</h2>
        <p>Misi kami adalah mempromosikan Sembalun sebagai destinasi wisata yang wajib dikunjungi, sekaligus mendukung keberlanjutan lingkungan dan pemberdayaan masyarakat lokal. Kami percaya bahwa dengan memperkenalkan keindahan alam dan warisan budaya Sembalun, kami dapat membantu meningkatkan perekonomian lokal sambil menjaga kelestarian lingkungan.</p>
      </div>

      <h2 class="our-team-heading">Our Team</h2>

      <div class="our-team">
        <div class="team-member">
          <img src="img/alfin.jpg" alt="" />

          <div class="designation">
            <strong>M. Alfin Rido </strong> (F1D022068)
          </div>
        </div>

        <div class="team-member">
          <img src="img/rd.png" alt="" />
          <div class="designation">
            <strong>I Putu Raditya </strong> (f1D022008)
          </div>
        </div>

        <div class="team-member">
        <img src="img/faris.jpg" alt="" />
          <div class="designation">
            <strong>Lalu Farisz </strong> (F1D022129)
          </div>
        </div>
      </div>

      <div class="our-mission">
        <img class="quote-icon" src="images/quote-icon.png" alt="" />
        <p>Our mission is to provide the best services to our clients.</p>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js"></script>

    <script>
      const websitesDesigned = document.querySelector(".websites-designed");
      const appsdeveloped = document.querySelector(".apps-developed");

      setTimeout(() => {
        websitesDesigned.innerHTML = "43";
        appsdeveloped.innerHTML = "15";
      }, 400);
    </script>
  </body>
</html>
