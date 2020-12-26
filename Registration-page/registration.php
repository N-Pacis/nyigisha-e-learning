<?php
session_start();
$id = " ";
$name =" ";
$password = " ";
$repeatpassword = " ";
$class = " ";
if (isset($_POST['submit'])) {
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'Nyigisha_db');
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $school = $_POST['school'];
    $password = $_POST['password'];
    $repeat = $_POST['password-repeat'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $describe = $_POST['describe'];
    $location = $_POST['location'];
    $s = "select * from registration where school_name = '$school'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        // $message = 'username already exist';
        // $message_type = 'danger';
        // header('location:myLogin.php');
        echo "<h1>Username already exist</h1>";
    } else {
        if ($fname != '' && $lname != '' && $school != '' && $password != '' && $repeat != '' && $email  != '') {
            if ($password == $repeat) {
                $password_hash = md5($password);
                $reg = "insert into registration(first_name,last_name,school_name,password,email,phone_number,description,location) values('$fname','$lname','$school','$password_hash','$email','$phone','$describe','$location')";
                $result_insert = mysqli_query($con, $reg);
                if ($result_insert) {
                    $message = 'Inserted record successfully';
                    $message_type = 'success';
                    $_SESSION['school'] = $school;
                    header('location:welcome.php');
                } else {
                    echo "error" . mysqli_error($con);
                }
            }
        }
    }
}

elseif (isset($_POST['add_student'])) {
    $con_student = mysqli_connect('localhost', 'root', '') or die(mysqli_error($con_student));
    mysqli_select_db($con_student, 'Nyigisha_db');
    $student_id = $_POST['student_id'];
    $student_name = $_POST['student_name'];
    $student_password = $_POST['student_password'];
    $repeat_password = $_POST['repeat_password'];
    $student_class = $_POST['student_class'];
    $school_name = $_SESSION['username'];
    $select_id = $con_student->query("SELECT * FROM registration WHERE school_name = '$school_name' ") or die(mysqli_error($con_student));
    // pre_r($select_id->fetch_assoc());
    while ($row_id = $select_id->fetch_assoc()) {
        $foreign_id = $row_id['school_id'];
    }
    if ($student_id != '' && $student_name != '' && $student_password != '' && $repeat_password != '' && $student_class != '') {
        if ($student_password == $repeat_password) {
            $student_password_hash = md5($student_password);
            $reg_student = "insert into Students(student_id,student_name,student_password,student_class,School_id) values('$student_id','$student_name','$student_password_hash','$student_class','$foreign_id')";
            $result_insert_student = mysqli_query($con_student, $reg_student);
            if ($result_insert_student) {
                $message = 'Inserted record successfully';
                $message_type = 'success';
                $_SESSION['name'] = $student_name;
                header('location:welcome.php');
            }
        }
    }
}
elseif(isset($_POST['submit-course'])){
    $con = new mysqli('localhost','root','','Nyigisha_db');
    $code = $_POST['course-code'];
    $name = $_POST['course-name'];
    $topic = $_POST['subtopic'];
    //course-image
    $file_image = $_FILES['course-image'];
    $file_image_name = $file_image['name'];
    $file_image_type = $file_image['type'];
    $file_image_tmp = $file_image['tmp_name'];
    $file_image_err = $file_image['error'];
    $file_image_size = $file_image['size'];

    $file_image_ext = explode('.',$file_image_name);
    $file_image_actualExt = strtolower(end($file_image_ext));

    $allowed_image_ext = array('png','jpg','jpeg');
    if(in_array($file_image_actualExt,$allowed_image_ext)){
        if($file_image_err === 0){
            if($file_image_size <=1000000){
                $file_image_new_name = uniqid("",true).'-'.$file_image_name;
                $upload_image_dir = 'uploads_image';
                move_uploaded_file($file_image_tmp,$upload_image_dir.'/'.$file_image_new_name);
               
                //course-file
                $file = $_FILES['course-file'];
                $filename = $file['name'];
                $filetmp = $file['tmp_name'];
                $filetype = $file['type'];
                $filerr = $file['error'];
                $filesize = $file['size'];

                $fileExt = explode('.', $filename);
                $fileActualExt = strtolower(end($fileExt));

                $allowedExt = array('docx', 'pdf', 'doc', 'html', 'htm', 'ppt', 'pptx', 'txt', 'odt', 'xls','c');

                if (in_array($fileActualExt, $allowedExt)) {
                    if ($filerr === 0) {
                        if ($filesize <= 1000000) {
                            $fileNewName = uniqid('', true) . "-" . $filename;
                            $uploadsdir = 'uploads';
                            move_uploaded_file($filetmp, $uploadsdir . '/' . $fileNewName);
                            $sql = "INSERT INTO Courses(Course_code,Course_name,Sub_topic,course_file,Course_image) VALUES('$code','$name','$topic','$fileNewName','$file_image_new_name')";    
                            $result = mysqli_query($con, $sql);
                            if ($result) {
                                echo "inserted data successfully";
                                header('location:welcome.php#courses');
                            } else {
                                echo "error" . mysqli_error($con);
                            }
                        } else {
                            echo "The file size is too big";
                        }
                        } else {
                            echo "The file has some errors";
                        }
                } else {
                    echo "The file extension is not allowed";
                }
            }
            else{
                echo "The image size is too big";
            }
        }
        else{
            echo "The image contains errors.";
        }
    }
    else{
        echo "You can not upload images of this type";
    }
}
?>