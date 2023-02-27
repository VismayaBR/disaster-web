<?php
include '../connection.php';
$id = $_GET['id'];
mysqli_query($conn,"update organizer set status = '1' where o_id = '$id' ");
header("location:view-org.php");
?>
