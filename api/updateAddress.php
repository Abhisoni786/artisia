<?php

require_once('Function/DbFunction.php');
$db = new DbFunction();

#init some var
$email = "";
$address="";

if (isset($_GET['address'])&& $_GET['email']) {
   
    $address = html_entity_decode($_GET['address']);
    $email = html_entity_decode($_GET['email']);
    $result = $db->updateAddress($address,$email);

    if($result){
        header("Location: ../address.php?status=success");
    }else{
        header("Location: ../address.php?status=failed");

    }


}


?>