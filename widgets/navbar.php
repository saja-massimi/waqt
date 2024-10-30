<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once '../user_pages/models/Dbh.php';
require_once '../user_pages/models/cartModel.php';


$cartModel = new cartModel();
if (isset($_SESSION['user'])) {
  $cartID = $cartModel->getCartId($_SESSION['user']);
  $cartTotal = $cartModel->getCartItemsCount($cartID);
}

?>

<head>
    <meta charset="utf-8">
    <title>WAQT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="watches ecommerce " name="keywords">
    <meta content="An ecommerce website for selling wathces" name="description">

    <!-- Favicon -->
    <link href="../img/logo1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/owl.carousel.min.css">
<link rel="stylesheet" href="path/to/owl.theme.default.min.css">


    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <style>
       
      

    @import url("https://fonts.googleapis.com/css?family=Josefin+Sans:200,300,400,500,600,700|Roboto:100,300,400,500,700&display=swap");

    * {
      font-family: "Josefin Sans", sans-serif;
    }

    .landing-section {
      position: relative;
      height: 90vh;
      width: 100%;
      overflow: hidden;
      top: -29px;

    }

    #landing-video {
      position: absolute;
      top: 30%;
      left: 50%;
      min-width: 100%;
      min-height: 100%;
      transform: translate(-50%, -50%);
      z-index: 1;
      object-fit: cover;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.4);
      z-index: 2;
    }

    .landing-content {
      position: relative;
      z-index: 3;
      text-align: center;
      color: white;
      top: 50%;
      transform: translateY(-50%);
      padding: 0 15px;
    }

    .landing-content h1 {
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .landing-content p {
      font-size: 1rem;
      margin-bottom: 30px;
    }


    @media (max-width: 768px) {
      .landing-content h1 {
        font-size: 2.5rem;
      }

      .landing-content p {
        font-size: 1.2rem;
      }
    }
  </style>
</head>

<body>
  <!-- Navbar Start -->
  <div class="container-fluid bg-white text-dark mb-30">
    <div class="row px-xl-5 text-dark">
      <div class="col-lg-12">
        <nav class="navbar navbar-expand-lg navbar-dark py-3 py-lg-0">
          <a class="navbar-brand" href="../user_pages/index.php">
            <img src="../img/logo1.png" width="50" height="50" class="d-inline" alt="logo">
            WAQT
          </a>

          <!-- Toggler Button for Mobile Menu -->
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Navbar Collapse -->
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mr-auto"></div>

            <!-- Centered Links -->
            <div class="navbar-nav mx-auto">
              <a href="../user_pages/index.php" class="nav-item nav-link active">Home</a>
              <a href="../user_pages/products.php" class="nav-item nav-link">Products</a>
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
               
              </div>
              <a href="contact.php" class="nav-item nav-link">Contact</a>
              <a href="aboutus.php" class="nav-item nav-link">About Us</a>
            </div>

            <!-- Right-side Icons -->
            <div class="navbar-nav ml-auto d-flex align-items-center">
              <a href="<?= isset($_SESSION['user']) ? '../user_pages/wishlist.php' : '../auth/index.html' ?>" class="btn">
                <i class="fas fa-heart text-dark"></i>
                <span class="badge bg-secondary rounded-circle">0</span>
              </a>

              <a href="<?= isset($_SESSION['user']) ? 'cart.php' : '../auth/index.html' ?>" class="btn mx-2">
                <i class="fas fa-shopping-cart text-dark"></i>
                <span class="badge bg-secondary rounded-circle"><?= isset($_SESSION['user']) ? $cartTotal['count'] : 0 ?></span>
              </a>

              <?= isset($_SESSION['user']) ?
                '<a href="../user_pages/customer_profile.php" class="btn">
                  <i class="fas fa-user text-dark"></i>
                </a>
                <a href="../user_pages/logout.php" class="btn">
                  <i class="fas fa-sign-out-alt text-dark"></i>
                </a>' :
                '<a href="../auth/index.html" class="nav-item nav-link">Sign In | Log In</a>'
              ?>
            </div>
          </div>
        </nav>
      </div>
    </div>
</div>
<!-- Navbar End -->