<?php
require "db_connect.php"
?>


<!DOCTYPE html>
<html lang="en">

<title>Students page</title>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div class="container">
        <a href="new.php" class="text-light btn btn-primary my-2"> Add Student</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Password</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Gender</th>
                    <th scope="col">operation</th>


                           </tr>
            </thead>
            <tbody class="table-group-divider">


                <?php

                $sql = "select * from `formtable`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $Name = $row['surname']. ' '.$row['first_name'].' '.$row['last_name'];
                        $Email = $row['email'];
                        $Age = $row['age'];
                        $Password = $row['password'];
                        $Mobile = $row['mobile'];
                        $Select_gender = $row['gender'];
                        $Operation = $row['operation'];

                        echo '<tr>
        <th scope="row">' . $id . '</th>
        <td>' . $Name . '</td>
        <td>' . $Email . '</td>
        <td>' . $Age . '</td>
        <td>' . $Password . '</td>
        <td>' . $Mobile . '</td>
        <td>' . $Select_gender . '</td>
        <td>' .$Operation. '</td>


        <td>
<button class="btn btn-primary"><a href="update1.php" class="text-light"> update1</a></button>
<button class="btn btn-danger"><a href="delete1.php" class="text-light"> delete1</a></button>
</td>

           </tr>';
                    }
                }

                ?>
                </tr>
            </tbody>
        </table>
    </div>
</head>

<body>

</body>

</html>