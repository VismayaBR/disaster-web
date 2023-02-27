<?php
include '../connection.php';
$id = $_GET['id'];
mysqli_query($conn,"delete from requirements_tb where requirement_id = '$id' ");

header("location:viewreq.php");
?>
