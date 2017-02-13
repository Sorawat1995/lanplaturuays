<?php 
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "lanplaturuay";

    $username = $_POST["username"];
    $password = $_POST["password"];

    $conn = new mysqli($db_server,$db_username,$db_password,$db_name);
    if($conn->connect_error){
        exit();
    }
    else{
        $sql = "SELECT * FROM user WHERE username = '".$username."' AND  password = '".$password."' ";
        echo $sql;
        //exit();
        if($conn->query($sql)==TRUE){
            $result = $conn->query($sql);
            //print_r($result);
            //exit();
            echo "success <br>";
            if($result->num_rows >= 1){
                echo "LOGIN";
                header("location:home.html");
            }else{
                echo "LOST";
            }

        }else{
            echo "Error";
        }

    }


 ?>