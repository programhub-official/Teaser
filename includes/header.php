<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Teaser</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" />
          </a>
          <div class="navbar-collapse" id="">
            <ul class="navbar-nav justify-content-between ">
              <div class="User_option">
                <li class="">
                  <a class="mr-3" href="index.php">
                    Home
                  </a>
                </li>
                <li class="">
                  <a class="mr-3" href="about.php">
                    About
                  </a>
                </li>
                <?php
                session_start();
                if (isset($_SESSION['auth'])) {
                  ?>
                  <li class="">
                    <a class="mr-3" href="house.php">
                      House
                    </a>
                  </li>
                  <li class="">
                    <a class="mr-3" href="contact.php">
                      Contact
                    </a>
                  </li>
                  <?php
                }
                else {
                  ?>
                  <li class="">
                    <a class="mr-3" href="login.php">
                      Sign-In
                    </a>
                  </li>
                  <li class="">
                    <a class="mr-3" href="register.php">
                      Sign-Up
                    </a>
                  </li>
                  <?php
                }
                ?>
              </div>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->