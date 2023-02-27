<?php

include 'connection.php';


$sql = mysqli_query($con, "SELECT * FROM category");
$list = array();

if ($sql->num_rows>0) {
    while ($row = mysqli_fetch_assoc($sql)){

  

    $myarray['message'] = 'viewed';

    $myarray['category_id'] = $row['category_id'];

    $myarray['category'] = $row['category'];

    array_push($list, $myarray);
  
}
}
 else {

  $myarray['message'] = 'failed';
  array_push($list, $myarray);
}
echo json_encode($list);
