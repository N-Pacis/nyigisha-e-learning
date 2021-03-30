<?php
require('../../utils/connection.php');

$input = filter_input_array(INPUT_POST);

$student_name = mysqli_real_escape_string($con,$input['student_name']); 
$student_class = mysqli_real_escape_string($con,$input['student_class']);

if($input["action"] === 'edit'){
    $query = "UPDATE Students SET student_name = '".$student_name."',student_class='".$student_class."' WHERE student_id='".$input["student_id"]."'";
 
    mysqli_query($con,$query);
}
if($input["action"]=== 'delete'){
    $query = "DELETE FROM Students WHERE student_id='".$input["student_id"]."'";
    mysqli_query($con,$query);
}
echo json_encode($input);
?>