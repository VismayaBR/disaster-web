<?php
session_start();
include('../connection.php');
$del=$_GET['id'];

$delete_service=mysqli_query($conn,"DELETE FROM camp_tb WHERE camp_id='$del'");
header('location:viewcamp.php');



?>