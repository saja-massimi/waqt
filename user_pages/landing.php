<?php  include("../widgets/navbar.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
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
  background: rgba(0, 0, 0, 0.7); /* Semi-transparent overlay */
  z-index: 2;
}

.landing-content {
  position: relative;
  z-index: 3;
  text-align: center;
  color: #800000;
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
<body>
    
</body>
</html>



     <!-- landing page start -->

     <section class="landing-section">
  <video autoplay muted loop id="landing-video">
    <source src="../img/video/landing_page1 (1).mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <div class="overlay"></div>

  <div class="landing-content">
    <h1>Welcome to WAQT</h1>
    <p>Waqt offers elegant, <br>high-quality watches blending classic craftsmanship with modern design, <br>prioritizing customer satisfaction and personalized service.</p>
    <a href="index.php" class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp">Discover it</a>
  </div>
</section>

<!-- landing  -->