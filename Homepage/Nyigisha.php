<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
  <link rel="stylesheet" href="#">
  <link rel="icon" type="image/x-icon" href="../Photos/rda.svg" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Nyigisha.css?v=<?php echo time(); ?>">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.﻿cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
  <title>Nyigisha Online Courses</title>
</head>

<body>
  <div class="loader_bg">
    <div class="loader"></div>
</div> 
  <div class="bg-img">
    <div class="container">
      <div class="navbar">
        <img src="../Photos/rda.svg">
        <a class="p">NYIGISHA</a>
        <div class="nav-links">
          <a href="#" title="Telephone"><i class="fa fa-phone"></i></a>
          <a href="#" title="Email"><i class="fa fa-envelope"></i></a>
          <a href="#" title="Share"><i class="fa fa-share-alt"></i></a>
          <a href="../contact-us/contact-form.php" class="nav-lists">JOIN US</a>
          <a href="../Registration-page/login.php" class="nav-lists">BOOKS</a>
          <a href="../About-us/about.php" class="nav-lists">ABOUT US</a>
          <a class="active" href="#">HOME</a>
        </div>
        <div class="navLinks-mobile">
          <a class="active" href="#">HOME</a>
          <a href="../About-us/about.php" class="nav-lists">ABOUT US</a>
          <a href="../Registration-page/login.php" class="nav-lists">BOOKS</a>
          <a href="../contact-us/contact-form.php" class="nav-lists">JOIN US</a>
        </div>
        <button title="Menu" onclick="openNavbar()" id="menu"><i class="fa fa-bars"></i></button>
        <button id="close" onclick="closeNavbar()" title="close">+</button>
      </div>
      <h2> NYIGISHA ONLINE COURSES</h2>
      <p>~Be the change that you wish to see in the World~</p>
      <button>LEARN MORE..</button>
      <div class="sidebar">
        <a href="#" title="Books"><i class="fa fa-book"></i></a>
        <a href="#" title="Videos"><i class="fa fa-video"></i></a>
        <a href="#" title="Images"><i class="fa fa-image"></i></a>
        <a href="#" title="Healthy Updates"><i class="fas fa-notes-medical"></i></a>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="inner_footer">
      <div class="footer_items">
        <h1>NYIGISHA online courses</h1>
        <p>Is an online course and training platform where students can attain free courses and exercises easily based on Rwandan Curriculum Known as CBC.</p>
      </div>
      <div class="footer_items">
        <h2>Quick Links</h2>
        <div class="border"></div>
        <ul>
          <a href="../Homepage/Nyigisha.php">
            <li>HOME</li>
          </a>
          <a href="#">
            <li>ABOUT US</li>
          </a>
          <a href="../Registration-page/login.php">
            <li>BOOKS</li>
          </a>
          <a href="../contact-us/contact-form.php">
            <li>JOIN US</li>
          </a>
        </ul>
      </div>
      <div class="footer_items">
        <h2>Essentials</h2>
        <div class="border"></div>
        <ul>
          <a href="#">
            <li>News</li>
          </a>
          <a href="#">
            <li>Videos</li>
          </a>
          <a href="#">
            <li>Images</li>
          </a>
          <a href="#">
            <li>Tutorials</li>
          </a>
        </ul>
      </div>
      <div class="footer_items">
        <h2>Contact Us</h2>
        <div class="border"></div>
        <ul>
          <li><i class="fa fa-map-marker" arial-hidden="true"></i>Rwanda Coding Academy</li>
          <li><i class="fa fa-phone" arial-hidden="true"></i>+250783364605</li>
          <li><i class="fa fa-envelope" arial-hidden="true"></i>codeminds@gmail.com</li>
        </ul>
      </div>
      <div class="social_media">
        <a href="#" title="Facebook"><i class="fa fa-facebook" arial-hidden="true"></i></a>
        <a href="#" title="Twitter"><i class="fa fa-twitter" arial-hidden="true"></i></a>
        <a href="#" title="Instgram"><i class="fa fa-instagram" arial-hidden="true"></i></a>
        <a href="#" title="Google"><i class="fa fa-google-plus" arial-hidden="true"></i></a>
      </div>
    </div>
    <div class="footer_bottom">
      Copyright &copy; NYIGISHA online courses 2020. All rights reserved
    </div>
  </div>
  <script src='nyigisha.js?v=<?php echo time(); ?>'></script>
  <script>
    setTimeout(function() {
      $('.loader_bg').fadeToggle();
    }, 500);
    function openNavbar() {
      document.querySelector(".navLinks-mobile").style.display = "block";
      document.querySelector('#menu').style.display = "none";
      document.querySelector("#close").style.display = "block";
    }

    function closeNavbar() {
      document.querySelector(".navLinks-mobile").style.display = "none";
      document.querySelector("#close").style.display = "none";
      document.querySelector("#menu").style.display = "block";
    }
  </script>
</body>

</html>