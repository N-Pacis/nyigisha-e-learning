
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="dashboard.css?v=<?php echo time(); ?>">
</head>
<body>
<?php
$con = mysqli_connect('localhost','root','','Nyigisha_db');
$output = "";
$select = "SELECT * FROM Courses WHERE Course_name LIKE '%".$_POST["search"]."%'";
$result = mysqli_query($con,$select);
if(mysqli_num_rows($result) > 0){
    $output .= '<h4 align="center">Search Result</h4>';
    // $output .= '<div class="table-responsive">
    //                 <table class="table table bordered">
    //                    <tr>
    //                       <th>Course Code</th>
    //                       <th>Course Name</th>
    //                       <th>Sub topic</th>
    //                     <tr>';
    // while($row=mysqli_fetch_array($result)){
    //     // $output .= '
    //     //                <tr>
    //     //                   <td>'.$row["Course_code"].'</th>
    //     //                   <td>'.$row["Course_name"].'</th>
    //     //                   <td>'.$row["Sub_topic"].'</th>
    //     //                 <tr>';
    //     $output .= '
             
    //     ';
    // }
    
    // echo $output;
    while ($row = $result->fetch_assoc()) :
        ?>
        <div class="lectures">
            <div class="course">
                <div class="course-image">
                     <img src="uploads_image/<?php echo $row['Course_image'];?>" alt="image-course">
                </div>
                <a href="uploads/<?php echo $row['course_file']?>" class="course_link" target="_blank">
                    <div class="course-text">
                        <p><?php echo $row['Course_name']; ?></p>
                    </div>
                </a>
            </div>
        </div>
        <?php endwhile;
}
else{
    echo "<h2 align='center'>Data not found</h2>";
    
}

?>
</body>
</html>