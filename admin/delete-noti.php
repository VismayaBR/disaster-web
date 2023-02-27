<?php
session_start();
include('../connection.php');
$del=$_GET['id'];

$delete_service=mysqli_query($conn,"DELETE FROM notification_tb WHERE notify_id='$del'");
header('location:viewnoti.php');



?>