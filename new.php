<?php
require("db_connect.php");

if (isset($_POST["submit"])) {
    // $id = $_POST["id"];
    $surname = $_POST["surname"];
    $first_name = $_POST["firstname"];
    $last_name = $_POST["lastname"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    // $age = $age *5;
    $password = $_POST["password"];
    $mobile = $_POST["mobile"];
    $select_gender = $_POST["gender"];

    $SQL = "INSERT INTO `formtable` (`surname`,`first_name`, `last_name`, `email`,`age`, `password`, `mobile`,`gender`) VALUES ( '" . $surname . "', '" . $first_name . "', '" . $last_name . "','" . $email . "', '" . $age . "', '" . $password . "', '" . $mobile . "', '" . $select_gender . "')";
    $result= mysqli_query($conn,$SQL);

    if ($result) {
        
        header("Location: display.php");
    } else {
        echo "faild";
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Students page</title>
    <style>
        #My_button {
            margin-top: 10px !important;
        }
    </style>


<style>
        .surname {
            margin-top: 10px !important;
        }
    </style>
</head>
<body>
    <div class="container">
    <a href="display.php" class="text-light btn btn-primary my-2"> All Student</a>
         <form method="post">
         <div class="form-group" id="surname">
               <label>surname</label>
                 <input type="text" class="form-control" placeholder="Enter your sur_name" name="surname" autocomplete="off">


                 <div class="form-group">
               <label>first name</label>
                 <input type="text" class="form-control" placeholder="Enter your last name" name="firstname" autocomplete="off">


                 <div class="form-group">
               <label>last name</label>
                 <input type="text" class="form-control" placeholder="Enter your last name" name="lastname" autocomplete="off">



            <div class="form-group">
               <label>email</label>
                 <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
        </div>

           <div class="form-group">
                <label>age</label>
                <input type="age" class="form-control" placeholder="Enter your age" name="age" autocomplete="off">
            </div>

            <div class="form-group">
                <label>password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
                </div>

            <div class="form-group">
                <label>mobile</label>
                <input type="number" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
                    </div>

            <div class="form-group">
                <label>select gender</label>
                <select id="" class="form-control" name="gender">
                <option selected disabled> gender </option>
                <option value="m"> male</option>
                <option value="f"> female</option>
            </div>

                <input type="submit" id="My_button" class="btn btn-primary" name="submit" value="submit"/>
      </form>
    </div>
</body>
</html>