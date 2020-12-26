<?php
session_start();
if (!isset ($_SESSION['username'])){
    header('location:myLogin.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>     
    <link rel="stylesheet" type="text/css" href="myLogin.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .loader_bg{
            position: fixed;
            z-index: 999999;
            /* background: #fff; */
            width: 100%;
            height: 100%;
        }
        .loader{
            border: 0 solid transparent;
            border-radius: 50%;
            width: 150px;
            height: 150px;
            position: absolute;
            top: calc(50vh - 75px);
            left: calc(50vw - 75px);
        }
        .loader:before, .loader:after{
            content: '';
            border: 1em solid #ff5733;
            border-radius: 50%;
            width: inherit;
            height: inherit;
            position: absolute;
            top: 0;
            left: 0;
            animation: loader 2s linear infinite;
            opacity: 0;
        }
        .loader:before{
            animation-delay: .5s;
        }
        @keyframes loader{
            0%{transform: scale(0);
            opacity: 0;}
            50%{
                opacity: 1;
            }
            100%{transform: 1;
            opacity: 0;}
        }
    </style>
</head>
<body>
<div class="loader_bg">
    <div class="loader"></div>
</div>  
    <div class="container">
    <a class="float-right" href="login.php"> LOGOUT </a><br>
    <h1>Welcome <?php echo $_SESSION['username']; ?>..</h1>
    </div>
    </div>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        setTimeout(function(){
             $('.loader_bg').fadeToggle();  
        }, 5000);
    </script>
    <p class="p-welcome">Welcome to <?php echo $_SESSION['school']?></p><br>
    
</body>
</html>