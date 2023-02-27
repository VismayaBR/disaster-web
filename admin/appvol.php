<?php
include '../connection.php';
$id = $_GET['id'];
mysqli_query($conn,"update volunteers set status = '1' where v_id = '$id' ");
header("location:view-vol.php");
?>
