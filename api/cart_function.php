<?php
    session_start();
    if(isset($_GET['id'])){
        $product_id = $_GET['id'];
        $_SESSION['item'] = $product_id;

        //adding cookies
        $cookie_name = "items";
        $cookie_value = $product_id;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

        header("Location: ../cart.php");
    }
?>