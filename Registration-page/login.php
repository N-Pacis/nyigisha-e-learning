<? 
   session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../Photos/rda.svg" />
    <link rel="stylesheet" href="registation.css?v=<?php echo time(); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>

<body onload="clearSession()">
    <div class="loader_bg">
        <div class="loader"></div>
    </div>
    <div class="navbar-holder">
        <img src="../Photos/rda.svg" class="header-image">
        <h1 class="heading-title">NYIGISHA</h1>
        <div class="navLinks">
            <a href="#" title="Telephone"><i class="fa fa-phone"></i></a>
            <a href="#" title="Share"><i class="fa fa-share-alt"></i></a>
            <a href="#" title="Email"><i class="fa fa-envelope"></i></a>
            <a href="../contact-us/contact-form.php" class="nav-lists">JOIN US</a>
            <a href="#" class="active">BOOKS</a>
            <a href="../About-us/about.php">ABOUT US</a>
            <a class="nav-lists" href="../Homepage/Nyigisha.php">HOME</a>
        </div>
        <div class="navLinks-mobile">
            <a class="nav-lists" href="../Homepage/Nyigisha.php">HOME</a>
            <a href="../About-us/about.php">ABOUT US</a>
            <a href="#" class="active">BOOKS</a>
            <a href="../contact-us/contact-form.php" class="nav-lists">JOIN US</a>
        </div>
        <button title="Menu" onclick="openNavbar()" id="menu"><i class="fa fa-bars"></i></button>
        <button id="close" onclick="closeNavbar()" title="close">+</button>
    </div>
    <?php if ($_SESSION['error-message'] != "") : ?>
        <div class="error-message-div">
            <p><?php echo $_SESSION['error-message']; ?></p>
        </div>
    <?php endif; ?>
    <div class="sign-in-div">
        <img src="./images/sign_in2.svg" alt="sign-in-svg" />
        <div class="col-md-4 form-div">
            <form action="validation.php" method="post">
                <h2>Login Here</h2>
                <div class="border-line-form"></div>
                <label>School name</label>
                <input type="text" name="school" class="form-control" placeholder="eg:Rwanda Coding Academy" required>
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required><br>
                <button type="submit" class="btn btn-primary"> Login </button>
            </form><br>
            <a href="myLogin.php"><button class="btn btn-primary">Create an account</button></a>
        </div>

    </div>
    <div class="footer">
        <div class="inner_footer">
            <div class="footer_items">
                <h1>NYIGISHA online courses</h1>
                <p>Is an online course and training platform where students can attain free courses and exercises easily
                    based on Rwandan Curriculum Known as CBC.</p>
            </div>
            <div class="footer_items">
                <h2>Quick Links</h2>
                <div class="border-line"></div>
                <ul>
                    <a href="../Homepage/Nyigisha.php">
                        <li>HOME</li>
                    </a>
                    <a href="../About-us/about.php">
                        <li>ABOUT US</li>
                    </a>
                    <a href="#">
                        <li>BOOKS</li>
                    </a>
                    <a href="../contact-us/contact-form.php">
                        <li>JOIN US</li>
                    </a>
                </ul>
            </div>
            <div class="footer_items">
                <h2>Essentials</h2>
                <div class="border-line"></div>
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
                <div class="border-line"></div>
                <ul>
                    <li><i class="fa fa-map-marker" arial-hidden="true"></i>1, XYZ Street, Kigali</li>
                    <li><i class="fa fa-phone" arial-hidden="true"></i>+250783364605</li>
                    <li><i class="fa fa-envelope" arial-hidden="true"></i>codeminds@gmail.com</li>
                </ul>
            </div>
            <div class="social_media-icons">
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

        function clearSession() {
            <?php
            $_SESSION['error-message'] = "";
            ?>
        };

        function openNavbar() {
            document.querySelector(".navLinks-mobile").style.display = "block";
            document.querySelector('#menu').style.display="none";
            document.querySelector("#close").style.display="block";
        }

        function closeNavbar(){
            document.querySelector(".navLinks-mobile").style.display="none";
            document.querySelector("#close").style.display="none";
            document.querySelector("#menu").style.display="block";
        }
    </script>
</body>

</html>