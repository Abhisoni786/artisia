<?php
require_once('../api/Function/DbFunction.php');

$db = new DbFunction();
session_start();

$conn = new mysqli("localhost","root","","artify");

    if(isset($_POST['username'])&& isset($_POST['password'])){
   
        #converting password into md5 hashed string 
        $username = $_POST['username'];
        $password = $_POST['password'];


        // $result = $db->adminLogin($username,$password);
        // if($result){
        //     echo '<script>window.location = "home.php";</script>';
        //     echo '<script>alert("Login Sucess ;)");</script>';
    
        // }else{
        //   echo '<script>alert("Login error ;)");</script>';
    
        // }
        
        if($username=='admin' && $password='admin'){
            echo '<script>window.location = "home.php";</script>';
            echo '<script>alert("Login Sucess ;)");</script>';

            $_SESSION['auth'] = "true";
            $_SESSION["username"] = $username;
        }else{
            
            echo "<script>window.location = login.html;</script>";
            echo '<script>alert("username or password not  correct;)");</script>';
        }
        
    }else{
        echo '<script>alert("Error username or password not found!");</script>';
        echo '<script>window.location="login.html";</script>';
    }
