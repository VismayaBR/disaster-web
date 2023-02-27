<?php
session_start();
include('../connection.php');
$del=$_GET['id'];

$delete_service=mysqli_query($conn,"DELETE FROM volunteers WHERE v_id='$del'");
header('location:view-volunteers.php');



?>