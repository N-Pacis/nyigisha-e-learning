<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'userregistation';
$con = mysqli_connect($host,$user,$password);
mysqli_select_db($con,$database);
if (isset($_POST['submit'])) {
    if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $sname = $_POST['schoolname'];
        $email = $_POST['email'];
        $sbjct = $_POST['subject'];
        $msg   = $_POST['message'];
    
        $to    = "codeminds200@gmail.com";
        $body  = " ";
        $body .= "From: " . $fname . $lname . "\r\n";
        $body .= "Email: " . $email . "\r\n";
        $body .= "Message: " . $msg . "\r\n";
        mail($to, $sbjct, $body);

        $insert = "insert into Contact_DB(First_name,Last_name,School_name,Email,Subject,Message) values('$fname','$lname','$sname','$email','$sbjct','$msg')";
        $sql = mysqli_query($con, $insert);
        if ($sql == false) {
            echo "<h1>Error sending the message</h1>";
        } else {
            echo "<h1>Inserted message successfully</h1>";
        }
        
    }   
}
?>