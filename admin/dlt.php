<?php
include '../connection.php';
$id = $_GET['id'];
mysqli_query($conn,"delete from organizer where login_id = '$id' ");
mysqli_query($conn,"delete from login_tb where login_id = '$id'");
header("location:view-orgnzr.php");
?>
