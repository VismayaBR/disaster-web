<?php

include 'connection.php';
$name = $_POST['user'];

$email = $_POST['email'];
$mobile = $_POST['mobile'];

$password = $_POST['password'];
mysqli_query($con, "INSERT INTO login_tb(user_name,password,type)values('$name','$password','user')");
$log = mysqli_insert_id($con);
$sql = mysqli_query($con, "INSERT INTO user(login_id,email,mobile,username,password)values('$log','$email','$mobile','$name','$password')");



if ($sql) {

  

    $myarray['message'] = 'Added';

    // $myarray['login_id'] = $row['login_id'];

    // $myarray['type'] = $row['type'];
  
} else {

  $myarray['message'] = 'Failed';
}
echo json_encode($myarray);
