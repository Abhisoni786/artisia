<?php

session_start();
require_once('Function/DbFunction.php');
$db = new DbFunction();

#init some var
$email = "";
$address="";

echo $_POST['address'];
echo $_POST['name'];
echo $_POST['username'];

if (isset($_POST['address']) && isset($_POST['name']) && isset($_POST['username'])) {
   
    $address = html_entity_decode($_POST['address']);
    $email = html_entity_decode($_POST['email']);
    $name = html_entity_decode($_POST['name']);
    $username = html_entity_decode($_POST['username']);

    
    $result = $db->updateProfile($username,$name,$address,$email);

    if($result){
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $name;
        $_SESSION['eamil'] = $email;

        header("Location: ../profile.php?status=success");
    }else{
        header("Location: ../profile.php?status=failed");

    }


}else{
    echo 'required param not found!';
}


?>