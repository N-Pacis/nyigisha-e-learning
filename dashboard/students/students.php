<?php
include '../../utils/connection.php';
$selectStudents = mysqli_query($con, "SELECT student_id,student_name,student_class FROM students ORDER BY student_class,student_name");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="students.css?v=<?php echo time(); ?>"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="jquery.tabledit.min.js"></script>
    <title>Student Page</title>
</head>

<body>
    <div class="students-page">
        <?php
        $current_page = 'students';
        include '../../utils/dashboard.php';
        ?>
        <div class="students-table-div">
            <h2 class="welcome-students-text">STUDENT MANAGEMENT SYSTEM</h2>
            <button class="add-student-button"  onclick="openModal()"><i class="fas fa-user-plus"></i>Add Student</button>
            <table class="table-students" id="editable-table">
                <thead>
                    <tr>  
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Student Class</th>
                    </tr>
                </thead>
                <?php
                while ($row = $selectStudents->fetch_assoc()) :
                ?>
                    <tr>
                        <td><?php echo $row['student_id']; ?></td>
                        <td><?php echo $row['student_name']; ?></td>
                        <td><?php echo $row['student_class']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>

            <div class="modal-div" id="modal-div">

                <div class="col-md-4">
                    <button class="close-btn" onclick="closeModal()"><i class="fas fa-times"></i></button>
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
                        <button type="submit" name="add_student" class="register-button" value="Add student">Add student</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                restoreButton: false,
                onSuccess: function(data, textStatus, jqXHR) {
                    if (data.action == 'delete') {
                        $('#' + data.student_id).remove();
                    }
                }
            });
        });
        function closeModal(){
            document.getElementById('modal-div').style.display='none';
        }
        function openModal(){
            document.getElementById('modal-div').style.display='block';
        }
    </script>
</body>

</html>