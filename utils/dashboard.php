<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <title>Document</title>
    <?php include 'dashboardStyle.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="jquery.tabledit.min.js"></script>
</head>

<body>
    <div class="top-bar">
        <h2 class="school-name"><?php echo $_SESSION['username']; ?></h2>
        <button class="logout-button" id='logout' onclick="destroySession()">Logout</button>
    </div>
    <div class="sidebar">
        <ul class="nav-links">
            <li class=<?php echo $current_page=='dashboard'?'active':''?>><i class="fas fa-home"></i><a href="../../dashboard/dashboard-page/welcome.php">Dashboard</a></li>
            <li class=<?php echo $current_page=='instructors'?'active':''?>><i class="fas fa-chalkboard-teacher"></i><a href="../../dashboard/instructors/instructors.php">Instructors</a></li>
            <li class=<?php echo $current_page=='students'?'active':''?>><i class="fas fa-user-graduate"></i><a href="../../dashboard/students/students.php">Students</a></li>
            <li class=<?php echo $current_page=='courses'?'active':''?>><i class="fas fa-book"></i><a href="../../dashboard/courses/courses.php">Courses</a></li>
        </ul>
    </div>
</body>
</html>
<script type='text/javascript'>
        function destroySession(){
            sessionStorage.clear();
            window.location='../../Registration-page/login.php'
        }
</script>