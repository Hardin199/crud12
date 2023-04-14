<?php
include ("db_connect.php");

    $surname = $_GET["surname"];
    $first_name = $_GET["firstname"];
    $last_name = $_GET["lastname"];
    $email = $_GET["email"];
    $age = $_GET["age"];
    $password = $_GET["password"];
    $mobile = $_GET["mobile"];
    $select_gender = $_GET["gender"];

    $SQL = "INSERT INTO `formtable` (`surname`,`first_name`, `last_name`, `email`,`age`, `password`, `mobile`,`gender`) VALUES ( '" . $surname . "', '" . $first_name . "', '" . $last_name . "','" . $email . "', '" . $age . "', '" . $password . "', '" . $mobile . "', '" . $select_gender . "')";
    $result= mysqli_query($conn,$SQL);

    if ($result) {
        $response = ['status'=>200, 'message'=>'data inserted successfully!!'];
        echo json_encode($response);
    } else {
        $response = ['status'=>500, 'message'=>'Internal server error!'];
        echo json_encode($response);
    }
