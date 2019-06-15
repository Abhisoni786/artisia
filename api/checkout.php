<?php


require_once("Function/DbFunction.php");

$db = new DbFunction();

echo $_POST['name'];

    if(isset($_POST['username'])
        && isset($_POST['email']) 
        && isset($_POST['address']) 
        && isset($_POST['product_name'])
        && isset($_POST['price'])){

        $username = html_entity_decode($_POST['username']);
        $email = html_entity_decode($_POST['email']);
        $address = html_entity_decode($_POST['address']);
        $productName = html_entity_decode($_POST['product_name']);
        $price = html_entity_decode($_POST['price']);

        #sending data to database
        $result = $db->checkout($email,$username,$productName,$price,$address);

            

        if($result) 
        {
            header("Location: ../orders.php?status=true");
        } 
        else
        {
          //  header("Location: ../orders.php?status=false");
        }

}else{
    echo json_encode(array("Error:"=>"Required param not found"));
}

?>