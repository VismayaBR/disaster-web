<?php

include 'connection.php';
$id = $_POST['id'];

$sql = mysqli_query($con, "SELECT * FROM requirements_tb where category_id = '$id'");
$list = array();

if ($sql->num_rows>0) {
    while ($row = mysqli_fetch_assoc($sql)){

  

    $myarray['message'] = 'viewed';

    $myarray['material_required'] = $row['materials_required'];

    $myarray['quantity'] = $row['quantity'];

   
    array_push($list, $myarray);
  
}
}
 else {

  $myarray['message'] = 'failed';
  array_push($list, $myarray);
}
echo json_encode($list);
