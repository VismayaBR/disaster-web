<?php

include 'connection.php';
$id = $_POST['id'];

$sql = mysqli_query($con, "SELECT * FROM camp_tb where camp_id = '$id'");
$list = array();

if ($sql->num_rows>0) {
    while ($row = mysqli_fetch_assoc($sql)){

  

    $myarray['message'] = 'viewed';

    $myarray['camp_name'] = $row['camp_name'];

    $myarray['area'] = $row['area'];

    $myarray['land_mark'] = $row['land_mark'];

    $myarray['email'] = $row['email'];

    $myarray['mobile'] = $row['phone_no'];

    array_push($list, $myarray);
  
}
}
 else {

  $myarray['message'] = 'failed';
  array_push($list, $myarray);
}
echo json_encode($list);
