<?php

require_once("Function/DbFunction.php");

$db =new DbFunction();

if(isset($_POST['username']) 
        && isset($_POST['password'])
        && isset($_POST['mail'])
        && isset($_POST['address'])){

     //initializing the variables           
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $address = $_POST['address'];
        $username = $_POST['username'];
        $password = $_POST['password'];


        $psswd = md5($password);

            if($db->checkUser($username)){
                
                echo "<h4>User already exists with $username</h4>";

            }else{
                $db->signUp($username,$psswd,$name,$mail,$address);
                if($db){
                        echo "success";
                        header("location: ../index.php");

                } else{
                        echo "error not register!";

                }
            }

    }else{
                    echo json_encode("Required param not found");
    }
