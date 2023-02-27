<?php
session_start();
include('../connection.php');
$del=$_GET['id'];

$delete_service=mysqli_query($conn,"DELETE FROM user WHERE login_id='$del'");
$delete_service=mysqli_query($conn,"DELETE FROM login_tb WHERE login_id='$del'");
header('location:viewusers.php');



?>