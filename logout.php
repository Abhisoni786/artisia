<?php
session_start();

if(isset($_GET['logout'])){
unset($_SESSION['username']);
unset($_SESSION['isLogged']);

session_destroy();

header("Location: index.php");
}else {      
        header("Location: index.php");
}


?>