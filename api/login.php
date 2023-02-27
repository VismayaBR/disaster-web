<?php

include 'connection.php';



$username = $_POST['username'];
$password = $_POST['password'];
$sql = mysqli_query($con, "select * from login_tb where user_name ='$username' and password ='$password'");
$row = mysqli_fetch_assoc($sql);


if ($sql) {

  

    $myarray['message'] = 'User Successfully LoggedIn';

    // $myarray['login_id'] = $row['login_id'];

    $myarray['type'] = $row['type'];
  
} else {

  $myarray['message'] = 'Failed';
}
echo json_encode($myarray);
