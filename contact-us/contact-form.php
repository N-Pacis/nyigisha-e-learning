<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
  <link rel="stylesheet" href="#">
  <link rel="icon" type="image/x-icon" href="../Photos/rda.svg" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="contact.css?v=<?php echo time(); ?>">
  <title>Contact us</title>
</head>

<body>
  <div class="loader_bg">
    <div class="loader"></div>
  </div>
  <div class="navbar-holder">
    <img src="../Photos/rda.svg" class="header-image">
    <h1 class="heading-title">NYIGISHA</h1>
    <div class="navLinks">
      <a href="#" title="Teleaphone"><i class="fa fa-phone"></i></a>
      <a href="#" title="Share"><i class="fa fa-share-alt"></i></a>
      <a href="#" title="Email"><i class="fa fa-envelope"></i></a>
      <a href="#" class="active">JOIN US</a>
      <a href="../Registration-page/login.php" class="nav-lists">BOOKS</a>
      <a href="../About-us/about.php" class="nav-lists">ABOUT US</a>
      <a class="nav-lists" href="../Homepage/Nyigisha.php">HOME</a>
    </div>
    <div class="navLinks-mobile">
      <a class="nav-lists" href="../Homepage/Nyigisha.php">HOME</a>
      <a href="../About-us/about.php" class="nav-lists">ABOUT US</a>
      <a href="../Registration-page/login.php" class="nav-lists">BOOKS</a>
      <a href="#" class="active">JOIN US</a>
    </div>
    <button title="Menu" onclick="openNavbar()" id="menu"><i class="fa fa-bars"></i></button>
    <button id="close" onclick="closeNavbar()" title="close">+</button>
  </div>
  <div class="sidebar">
    <a href="#" title="Books"><i class="fa fa-book"></i></a>
    <a href="#" title="Videos"><i class="fa fa-video"></i></a>
    <a href="#" title="Images"><i class="fa fa-image"></i></a>
    <a href="#" title="Healthy Updates"><i class="fas fa-notes-medical"></i></a>
  </div>

  <div class="main"></div>
  <div class="contact">
    <h3>CONTACT US</h3>
    <div class="line"></div>
    <form action="contact.php" method="POST">
      <label for="fname" class="names">First Name</label>
      <input class="names" type="text" id="fname" name="firstname" maxlength="30" required><br>
      <div class="secname">
        <label for="sname" class="names">Second Name</label>
        <input class="names" type="text" id="sname" name="lastname" maxlength="30" required><br>
      </div>

      <label for="Sclname">School Name</label>
      <input type="text" id="Sclname" name="schoolname" required>
      <label for="Email">Email</label>
      <input type="text" id="Email" name="email" required>
      <label for="Subject">Subject</label>
      <input type="text" id="Subject" name="subject" required>
      <label for="msg">Comment or Message </label>
      <textarea name="message" id="msg" cols="30" rows="6"></textarea>
      <input type="submit" value="SUBMIT" name="submit">
    </form>
  </div>
  <div class="location">
    <h3>Main office location</h3>
    <div class="line2"></div>

    <ul>
      <li><i class="fa fa-map-marker" arial-hidden="true"></i> Rwanda Coding Academy, Nyabihu district</li>
      <li><i class="fa fa-phone" arial-hidden="true"></i> +250783364605</li>
      <li><i class="fa fa-envelope" arial-hidden="true"></i> codeminds@gmail.com</li>
    </ul>
  </div>
  <div class="phone">
    <h3>Department phone numbers</h3>
    <div class="line2"></div>
    <ul>
      <li><i class="fa fa-phone" arial-hidden="true"></i> Nives: +250783364605</li>
      <li><i class="fa fa-phone" arial-hidden="true"></i> Pacis: +250783364605</li>
      <li><i class="fa fa-phone" arial-hidden="true"></i> RCA office: +250783364605</li>
    </ul>
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