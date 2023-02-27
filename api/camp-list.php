<?php

include 'connection.php';

// $id = $_POST['id'];
$sql = mysqli_query($con, "SELECT * FROM camp_tb");
$list = array();

if ($sql->num_rows > 0) {

    while ($row = mysqli_fetch_assoc($sql)) {

        $myarray['camp_id'] = $row['camp_id'];
        $myarray['camp_name'] = $row['camp_name'];
        $myarray['area'] = $row['area'];
       

        array_push($list, $myarray);
    }
} else {



    $myarray['message'] = 'failed';
    array_push($list, $myarray);
}
echo json_encode($list);