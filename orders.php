<?php
session_start();

require_once("api/Function/DbFunction.php");
$db = new DbFunction();

$conn = new mysqli("localhost","root","","artify");

if (!(isset($_SESSION['isLogged']))) {
    header("Location:index.php");
}

$username = $_SESSION['username'];
$user = $db->getUserDetail($username);
$response = array();
// print_r($user);

$orders = $conn->query("SELECT * FROM `orders` WHERE `username` = '$username'");
//print_r($orders);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Orders</title>

    <link rel="stylesheet" href="css/style.css">

    <style>
    
    body{
    background-color: #eee !important;
    margin: 0 !important;
    padding: 0 !important;
  }
  tr:nth-child(3){
      margin-left: 8px;
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
                            <a class="links current" href="orders.php">Your Orders</a>
                            <hr>
                            <a class="links" href="address.php">Address book</a>
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
                            <span class="heading">Your Orders <span>
                                    <hr>
                                    <br><?php if ($orders->num_rows > 0) { ?>
                                        <table>
                                            <thead>
                                                <th>Order ID</th>
                                                <th>Artifact Name</th>
                                                <th>Price</th>
                                            </thead>
                                      <?php while($row = $orders->fetch_assoc()){ ?>      
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $row['id'] ?></td>
                                                    <td><?php echo $row['product_title'] ?></td>
                                                    <td><?php echo $row['price'] ?></td>
                                            
                                                </tr>
                                            </tbody>
                                    <?php } ?>     
                                        </table>
                                    <?php }else{ ?>

                                        <center><label>Sorry! you have'nt put orders</label></center>
                        </div>
                    </div>
<?php   } ?>
                </section>
            </div>
        </div>


    <?php  } ?>


</body>

</html>