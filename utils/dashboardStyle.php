<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        .top-bar{
            background-color: #fff;
            height: 40px;
            box-shadow:0px 2px 10px rgb(3, 23, 3);
            display:flex;
            justify-content: space-between;
            position:fixed;
            top:0;
            width: 100%;
        }
        .school-name{
            font-size: 20px;
            margin:0.5% 2%;
            text-transform: uppercase ;
            font-weight: bold;
        }
        .logout-button{
            border:none;
            border-radius: 6px;
            margin :0.5% 2%;
            background-color: green;
            color: #fff;
            padding:0.2% 1%;
        }
        .logout-button:hover{
            background-color: darkgreen;
        }
        .sidebar{
            position:fixed;
            top:40px;
            height: 100vh;
            background-color: rgb(1, 23, 0);
            width:20%;
            padding-top: 2%;
            margin-right:20%;
        }
        .nav-links>li{
            list-style-type: none;
            margin-bottom:6%;
            text-align: center;
            padding:4% 20%;
            cursor:pointer;
            display:flex;
        }
        .nav-links>li>i{
            font-size:20px;
            margin:0% 5%; 
            color: #fff;
        }
        .nav-links>.active,.nav-links>li:hover{
            background-color:rgba( 255, 255, 255, 0.1);
        }
        .nav-links>li>a{
            font-size: 18px;
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    
</body>
</html>