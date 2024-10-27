<!DOCTYPE html>
<html lang="en">

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

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <style>
        .vendor-carousel .bg-light {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150px;
            padding: 20px;
        }

        .vendor-carousel img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
                /* Full screen landing section with video background */
@import url("https://fonts.googleapis.com/css?family=Josefin+Sans:200,300,400,500,600,700|Roboto:100,300,400,500,700&display=swap");

*{ 
  font-family:"Josefin Sans",sans-serif;
}
.landing-section {
  position: relative;
  height: 90vh;
  width: 100%;
  overflow: hidden;
  top:-29px;
  
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
  background: rgba(0, 0, 0, 0.4); /* Semi-transparent overlay */
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

/* .landing-content .btn {
  background: linear-gradient(45deg, #16161a, #ff2020, #0b1c39);
  border: none;
  padding: 12px 30px;
  font-size: 1.1rem;
  color: #fff;
  cursor: pointer;
  transition: all 0.3s ease;
}

.landing-content .btn:hover {
  background: linear-gradient(45deg, #ff2020, #0b1c39, #16161a);
  transform: scale(1.05);
} */

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
<!-- Navbar Start -->
<div class="container-fluid bg-white text-dark mb-30">
    <div class="row px-xl-5 text-dark">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg  navbar-dark py-3 py-lg-0">
                <!-- Logo aligned to the left -->
                <a class="navbar-brand" href="#">
                    <img src="../img/logo1.png" width="50" height="50" class="d-inline" alt="logo">
                    WAQT
                </a>

                <!-- Toggler Button for Mobile Menu -->
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Collapse -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Spacer for logo on the left -->
                    <div class="navbar-nav mr-auto"></div>

                    <!-- Navbar Links (Centered) -->
                    <div class="navbar-nav mx-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="shop.php" class="nav-item nav-link">Shop</a>
                        
                        <!-- Pages Dropdown -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="cart.php" class="dropdown-item">Shopping Cart</a>
                                <a href="checkout.php" class="dropdown-item">Checkout</a>
                            </div>
                        </div>

                        <!-- Categories Dropdown -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="#" class="dropdown-item">Women</a>
                                <a href="#" class="dropdown-item">Men</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="aboutus.php" class="nav-item nav-link">About Us</a>
                        <a href="customer_profile.php" class="nav-item nav-link">Profile</a>
                        
                        
                        
                    </div>

                    <!-- Right-side Icons -->
                    <div class="navbar-nav ml-auto d-flex align-items-center">
                        <a href="../user_pages/wishlist.php" class="btn">
                            <i class="fas fa-heart  text-dark"></i>
                            <span class="badge bg-secondary rounded-circle">0</span>
                        </a>
                        <a href="cart.php" class="btn mx-2">
                            <i class="fas fa-shopping-cart  text-dark"></i>
                            <span class="badge bg-secondary rounded-circle">0</span>
                        </a>
                        <a href="#" class="btn">
                            <i class="fas fa-user  text-dark"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->