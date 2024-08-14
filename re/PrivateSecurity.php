<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Slideshow</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css\center.css">
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

<!-- 
  - custom css link
-->
<link rel="stylesheet" href="./assets/css/style.css">

<!-- 
  - google font link
-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
  href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
  rel="stylesheet">
</head>
<body>
<header class="header" data-header>

<div class="overlay" data-overlay></div>

<div class="header-top">
<div class="container">

  <ul class="header-top-list">

    <li>
      <a href="mailto:info@homeverse.com" class="header-top-link">
        <ion-icon name="mail-outline"></ion-icon>

        <span>info@homeverse.com</span>
      </a>
    </li>

    <li>
      <a href="#" class="header-top-link">
        <ion-icon name="location-outline"></ion-icon>

        <address>beirut,Lebanon</address>
      </a>
    </li>

  </ul>

  <div class="wrapper">
    <ul class="header-top-social-list">

      <li>
        <a href="#" class="header-top-social-link">
          <ion-icon name="logo-facebook"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="header-top-social-link">
          <ion-icon name="logo-twitter"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="header-top-social-link">
          <ion-icon name="logo-instagram"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="header-top-social-link">
          <ion-icon name="logo-pinterest"></ion-icon>
        </a>
      </li>

    </ul>

    
  </div>

</div>
</div>

<div class="header-bottom">
<div class="container">

  <a href="#" class="logo">
    <img src="./assets/images/logo.png" alt="Homeverse logo">
  </a>

  <nav class="navbar" data-navbar>

    <div class="navbar-top">

      <a href="#" class="logo">
        <img src="./assets/images/logo.png" alt="Homeverse logo">
      </a>

      <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
        <ion-icon name="close-outline"></ion-icon>
      </button>

    </div>

    <div class="navbar-bottom">
      <ul class="navbar-list">

        <li>
          <a href="index.html" class="navbar-link" data-nav-link>Home</a>
        </li>

        <li>
          <a href="#about" class="navbar-link" data-nav-link>About</a>
        </li>

        <li>
          <a href="#service" class="navbar-link" data-nav-link>Service</a>
        </li>

        <li>
          <a href="#property" class="navbar-link" data-nav-link>Property</a>
        </li>

        <li>
          <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
        </li>
        <li>
          <a href="login.php" class="navbar-link" data-nav-link>Login</a>
        </li>
      </ul>
    </div>

  </nav>

  

</div>
</div>

</header>
<body>
    <div class="slideshow-container">
        <div class="slides fade">
            <img src="img/P1.jpg" alt="Photo 1">
        </div>
        <div class="slides fade">
            <img src="img/P2.jpg" alt="Photo 2">
        </div>
        <div class="slides fade">
            <img src="img/P3.jpg" alt="Photo 3">
        </div>
        <div class="slides fade">
            <img src="img/P4.webp" alt="Photo 4">
        </div>
        <div class="slides fade">
            <img src="img/P5.jpg" alt="Photo 5">
        </div>
        <div class="slides fade">
            <img src="img/P6.jpg" alt="Photo 6">
        </div>
        <div class="slides fade">
            <img src="img/P7.jpg" alt="Photo 7">
        </div>
    </div>

    <script src="js\slideshow.js"></script>
</body>
</html>
