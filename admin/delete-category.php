<?php
session_start();
include('../connection.php');
$del=$_GET['id'];

$delete_service=mysqli_query($conn,"DELETE FROM category WHERE category_id='$del'");
header('location:view-category.php');



?>