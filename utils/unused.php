<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css">
    <title>Document</title>
</head>
<body>
<div id="instructors">
        <div class="inst_images">
        <?php while ($row_instructors_images = $result_instructors->fetch_assoc()):?>
               <a href="#<?php echo $row_instructors_images['Instructor_id'];?>"><img src="instructors_image/<?php echo $row_instructors_images['Instructor_image'];?>" class="instructors" alt="<?php echo $row_instructors_images['Name'];?>"></a>
         <?php endwhile;?>
        </div>
         <?php while ($row_instructors = $result_instructors_content->fetch_assoc()):?>
            <div id="<?php echo $row_instructors['Instructor_id'];?>" class="inst_info">
                    <p class="instructor_description"><span>Names:</span><?php echo $row_instructors['Name']?></p>
                    <p class="instructor_description"><span>Teaches:</span><?php echo $row_instructors['Course']?></p>
                    <p class="instructor_description"><span>Classes:</span><?php echo $row_instructors['Class']?></p>
                    <p class="instructor_description"><span>Description:</span><?php echo $row_instructors['Description']?></p>
            </div>
        <?php endwhile;?>
         <button class="btn btn-primary" id="new-instructor">New Instructor</button>
         <div id="modal-form-instructors">
            <div class="col-md-4" id="instructor-form">
                <button id="close-modal-instructors">+</button>
                <form action="registration.php" method="POST" enctype="multipart/form-data">
                    <label>Instructor_id</label>
                    <input type="text" name="instructor_id" class="form-control"><br>
                    <label>Instructor's Name</label>
                    <input type="text" name="instructor_name" class="form-control"><br>
                    <label>Course</label>
                    <input type="text" name="course" class="form-control"><br>
                    <label>Class</label>
                    <input type="text" name="class" class="form-control"><br>
                    <label>Instructor's image</label>
                    <input type="file" class="form-control" name="instructor_image">
                    <label>Description</label>
                    <textarea name="description" cols="30" rows="4" class="form-control"></textarea><br>
                    <button type="submit" name="add_instructor" class="btn btn-primary" id='btn-instructor' value="Add instructor">Add Instructor</button>
                </form>
            </div>
        </div>
     </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css">
    <title>Document</title>
</head>
<body>
<div id="courses">
        <div class="info-courses">
            <div class="courses-number">
                <p class="course-detail"><span class="number"><?php echo $rows;?>+</span>Courses</p>
            </div>
            <div class="students-number">
                <p class="course-detail"><span class="number"><?php echo $row_students;?>+</span>Students</p>
            </div>
            <div class="instructors-number">
                <p class="course-detail"><span class="text">Coming Soon</span></p>
            </div>
        </div>
        <button class="btn btn-primary" id="add-course">Add A Course</button>
        <div class="modal-form-courses">
             <div class="col-md-4">
                 <button class="close-modal-courses">+</button>
                <form action="registration.php" method="post" enctype="multipart/form-data">
                    <label>Course Code</label>
                    <input class="form-control" type="text" name='course-code'>
                    <label>Course Name</label>
                    <input class="form-control" type="text" name='course-name'>
                    <label>Sub Topic</label>
                    <input class="form-control" type="text" name="subtopic">
                    <label>Course Image</label>
                    <input type="file" class="form-control" name="course-image">
                    <label>Course link</label>
                    <input type="file" class="form-control" name="course-file">
                    <button type="submit" class="btn btn-primary" id="btn" name="submit-course">Submit</button>
                </form>

             </div>
        </div>
            <div class="input-group">
                   <span class="input-group-addon">Search</span>
                   <input type="text" id="search_courses" name="search_courses" placeholder="Search by Course name or by Course code" class="form-control">
            </div>
            <div id="result"></div>
        <div class="lectures">
             <?php
                $con = mysqli_connect('localhost','root','','Nyigisha_db');
                $sql = "SELECT * FROM Courses";
                $result = mysqli_query($con,$sql);
                while ($row = $result->fetch_assoc()) : 
            ?>
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
            <?php endwhile;?>
        </div>
    </div>
</body>
</html>