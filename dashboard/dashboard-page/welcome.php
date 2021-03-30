
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="welcome.css">
    <title>Welcome To Nyigisha</title>
</head>

<body>
    <div class="welcome-page">
        <?php
        $current_page = 'dashboard';
        include '../../utils/dashboard.php';
        ?>
        <div class="welcome-image">
            <img src="../../Photos/construction.svg" alt="construction-image">
            <h2 class="welcome-text">Still Under Development Process</h2>
        </div>
    </div>
</body>

</html>