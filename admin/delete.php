<?php
session_start();
include('../connection.php');

$del2=$_GET['deletes_id'];

$delete_service=mysqli_query($conn,"DELETE FROM service_tb WHERE service_id='$del2'");
header('location:viewservice.php');



?>