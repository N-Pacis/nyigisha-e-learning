<?php
session_start();
$con = new mysqli('localhost', 'root', '', 'Nyigisha_db') or die(mysqli_error($con));
$select_courses = "SELECT * FROM Courses";
$result_courses = mysqli_query($con,$select_courses);
$rows = mysqli_num_rows($result_courses);
$select_instructors = "SELECT * FROM instructors";
$result_instructors = mysqli_query($con,$select_instructors);
$instructors_num = mysqli_num_rows($result_instructors);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="jquery.tabledit.min.js"></script>
    <link rel="stylesheet" href="dashboard.css?v=<?php echo time(); ?>">
    <title>Welcome</title>
</head>

<body>
    <?php
    $school_name = $_SESSION['username'];
    $select_id = $con->query("SELECT * FROM registration WHERE school_name = '$school_name' ") or die(mysqli_error($con));
    // pre_r($select_id->fetch_assoc());
    while ($row_id = $select_id->fetch_assoc()) {
        $row_foreign_id = $row_id['school_id'];
    }
    $select = $con->query("SELECT * FROM Students where School_id = '$row_foreign_id'") or die(mysqli_error($con));
    $row_students = mysqli_num_rows($select);
    // pre_r($select);
    ?>
    <?php
    function pre_r($array)
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
    ?>
    <div class="sidebar">
        <li class="lst">Signed in as:<?php echo $_SESSION['username']; ?></li>
        <li class="item1"><a href="#home">Dashboard</a></li>
        <li><a href="#instructors" onclick="displayInstructors()" id="instructors-link">Instructors</a></li>
        <li><a href="#students" class="active" onclick="displayStudents()" id="students-link">Students</a></li>
        <li><a href="#courses" onclick="displayCourses()" id="courses-link">Courses</a></li>
    </div>

    <div id="students">
        <div class="content">
            <h1>Students</h1>
        </div>
        <table class="table" id="editable-table">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Student Class</th>
                </tr>
            </thead>
            <?php
            while ($row = $select->fetch_assoc()) :
            ?>
                <tr>
                    <td><?php echo $row['student_id']; ?></td>
                    <td><?php echo $row['student_name']; ?></td>
                    <td><?php echo $row['student_class']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <button id="addStudents">Add Students</button>
        <div id="modal-form">
            <div class="col-md-4">
                <button id="close-modal">+</button>
                <form action="registration.php" method="POST">
                    <label>Student_id</label>
                    <input type="text" name="student_id" class="form-control"><br>
                    <label>Student Name</label>
                    <input type="text" name="student_name" class="form-control"><br>
                    <label>Student Password</label>
                    <input type="password" name="student_password" class="form-control"><br>
                    <label>Repeat password</label>
                    <input type="password" name="repeat_password" class="form-control"><br>
                    <label>Student Class</label>
                    <input type="text" name="student_class" class="form-control"><br>
                    <button type="submit" name="add_student" class="btn btn-primary" id='btn-student' value="Add student">Add student</button>
                </form>
            </div>
        </div>
    </div>
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
     <div id="instructors">
         <?php while ($row_instructors = $result_instructors->fetch_assoc()):?>
               <a href="#<?php echo $row_instructors['Instructor_id'];?>"><img src="instructors_image/<?php echo $row_instructors['Instructor_image'];?>" alt="<?php echo $row_instructors['Name'];?>" class="instructors"></a>
               <div id="<?php echo $row_instructors['Instructor_id'];?>" class="inst">
                    <p class="instructor_description"><span>Names: </span><?php echo $row_instructors['Name']?></p>
                    <p class="instructor_description"><span>Teaches: </span><?php echo $row_instructors['Course']?></p>
                    <p class="instructor_description"><span>Classes: </span><?php echo $row_instructors['Class']?></p>
                    <p class="instructor_description"><span>Description: </span><?php echo $row_instructors['Description']?></p>
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
<script>
    $(document).ready(function() {
        $('#editable-table').Tabledit({
            url: 'crud.php',
            columns: {
                identifier: [0, 'student_id'],
                editable: [
                    [1, 'student_name'],
                    [2, 'student_class']
                ]
            },
            restoreButton:false,
            onSuccess: function(data, textStatus, jqXHR) {
                if (data.action == 'delete') {
                    $('#' + data.student_id).remove();
                }
            }
        });
        $('#search_courses').keyup(function(){
            var txt = $(this).val();
            if(txt != ''){
                $.ajax({
                    url:'search.php',
                    method:'post',
                    data:{search:txt},
                    dataType:'text',
                    success:function(data){
                        $('#result').html(data);
                    }
                });
                document.querySelector('.lectures').style.display='none';
            }
            else{
                $('#result').html('');
                document.querySelector('.lectures').style.display='flex';
            }
        });
    });

    function displayStudents() {
        var students = document.querySelector('#students');
        students.style.display = 'block';
        document.querySelector('#courses-link').setAttribute("class", " ");
        document.querySelector('#instructors-link').setAttribute("class", " ");
        document.querySelector('#students-link').setAttribute("class", " active");
        var courses = document.querySelector('#courses');
        courses.style.display = 'none';
        document.querySelector('#instructors').style.display='none';
    }

    function displayCourses() {
        var courses = document.querySelector('#courses');
        courses.style.display = 'block';
        document.querySelector('#students-link').setAttribute("class", " ");
        document.querySelector('#instructors-link').setAttribute("class", " ");
        document.querySelector('#courses-link').setAttribute("class", "active");
        var students = document.querySelector('#students');
        students.style.display = 'none';
        document.querySelector('#instructors').style.display='none';
    };
    function displayInstructors(){
        var instructors = document.querySelector('#instructors');
        instructors.style.display ='block';
        document.querySelector('#students-link').setAttribute("class", " ");
        document.querySelector('#instructors-link').setAttribute("class", "active");
        document.querySelector('#courses-link').setAttribute("class", "");
        var students = document.querySelector('#students');
        students.style.display = 'none';
        var courses = document.querySelector('#courses');
        courses.style.display = 'none';
    }
    document.querySelector('#close-modal').addEventListener('click', function() {
        document.querySelector('#modal-form').style.display = 'none';
    });
    document.querySelector('#addStudents').addEventListener('click', function() {
        var form = document.querySelector('#modal-form');
        form.style.display = 'flex';
    });
    document.querySelector('#add-course').addEventListener('click',function(){
        var form= document.querySelector('.modal-form-courses');
        form.style.display = 'flex';
    });
    document.querySelector('#new-instructor').addEventListener('click',function(){
        var form= document.querySelector('#modal-form-instructors');
        form.style.display = 'flex';
    });
    document.querySelector('.close-modal-courses').addEventListener('click', function() {
        document.querySelector('.modal-form-courses').style.display = 'none';
    });
    document.querySelector('#close-modal-instructors').addEventListener('click', function() {
        document.querySelector('#modal-form-instructors').style.display = 'none';
    });
</script>