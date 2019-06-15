<?php
session_start();

require_once("api/Function/DbFunction.php");
$db = new DbFunction();

if (!(isset($_SESSION['isLogged']))) {
    header("Location:index.php");
}

$username = $_SESSION['username'];
$user = $db->getUserDetail($username);
$response = array();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Address</title>

    <link rel="stylesheet" href="css/style.css">

    <style>
     body{
    background-color: #eee !important;
    margin: 0 !important;
    padding: 0 !important;
  }
  h3{
      padding: 0;
      margin: 0;
  }
  </style>

</head>

<body>

<header id="header">
        <!-- <img src="" alt="" class="logo"> -->
        <!-- <h2><span class="logo">Artisan Gallery</span></h2> -->
        <div class="logo">
            Artisan Gallery

        </div>
        <nav>
            <ul class="nav_link">
                <li><a href="index.php">Home</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact us.php">Contact us</a></li>
            </ul>
        </nav>
        <?php if(!isset($_SESSION['isLogged'])) {
          ?>
        <a class="btn" href="login.php"><button>Login</button></a>
        <?php }else{ ?>
           
            <a href="profile.php" class=""><button>My Account</button></a>
    <?php } ?>  
    </header>

    <?php if ($user) { ?>

        <div class="row">
            <div class="col-4">
                <section id="main" class="wrapper">
                    <div class="inner">
                        <div class="content">
                            <a class="links" href="profile.php">Your Profile</a>
                            <hr>
                            <a class="links " href="orders.php">Your Orders</a>
                            <hr>
                            <a class="links current" href="#">Address book</a>
                            <hr>
                            <a class="links" href="logout.php?logout=true">Logout</a>

                        </div>
                    </div>

                </section>
            </div>
            <div class="col-7">

                <section id="main" class="wrapper">
                    <div class="inner">
                        <div class="content">
                            <span class="heading">Manage Address <span>
                                    <hr>
                                    <h3>Address 1:</h3>
                                        <label for="Order no."><?php echo $user['address']; ?></label>
                                    <br>
                                    <a href="updateaddress.php" style="float:right;">update your address</a>    
                        </div>
                    </div>
  
                </section>
            </div>
        </div>


    <?php  } ?>


</body>

</html>