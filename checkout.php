<?php
session_start();

require_once("api/Function/DbFunction.php");
$db = new DbFunction();

#init some variable
$artifactName = "";
$price = "";

 if(!(isset($_SESSION['isLogged']))) {
    header("Location:index.php");
  }

  if(isset($_GET['artifactName']) && isset($_GET['price']))
{
    $id = $_GET['id'];
    $artifactName = $_GET['artifactName'];
    $price = $_GET['price'];
}

$username = $_SESSION['username'];
$user = $db->getUserDetail($username);
$email = $user['email'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Checkout</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/product.css'>


    <style>
        body {
            background-color: #eee !important;
            margin: 0 !important;
            padding: 0 !important;
        }
    </style>
</head>

<body>
    <header id="header">
        <!-- <img src="" alt="" class="logo"> -->
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
        <?php if (!isset($_SESSION['isLogged'])) {
            ?>
            <a class="btn" href="login.php"><button>Login</button></a>
        <?php } else { ?>

            <a href="profile.php" class=""><button>My Account</button></a>
        <?php } ?>
    </header>

    <form action="api/checkout.php" method="POST">
        <section id="main" class="wrapper">
            <div class="inner">
                <div class="content">
                    <span class="heading">Basic Details</span>
                    <hr>
                    <span>Name &nbsp;</span> <br><input type="text" name="name" value="<?php $user['name']; ?>"><br>
                    <span>Username &nbsp;</span> <br><input type="text" name="username" title="Username" value="<?php echo $user['username']; ?>"> <br>
                  
                    <input type="hidden" name="email" title="Username" value="<?php echo $user['email']; ?>"><br>
                    <span>Address &nbsp;</span> <br><input type="text" name="address" title="Username" value="<?php echo $user['address'] ?>"><br>
                    <br>
                    <br>
                    <span class="heading">Review Your Cart</span>
                    <br>
                    <br>

                    <label for="productName">Artifacts Name</label><br>
                    <input type="text" name="product_name" id="prodductName" value="<?php echo $artifactName ?>"><br>
                   <label for="">Price </label> <br><input type="price" name="price" id="prodductName" value="<?php echo $price; ?>">

                </div>
            </div>
        </section>
        <section id="main" class="wrapper" style="padding-top:10px !important;">
            <div class="inner">
                <div class="content">
                    <span class="heading">Delivery type</span>
                    <hr>
                
                    <input type="radio" name="cod" id="cod" ><label for="cod">Cash on Delivery</label><br>
                    <input type="radio" name="online" id="online"><label for="online">Payment online</label>
                    <br>
                    <input type="submit" value="Buy Now" style="width: 45%;">
                    <input type="submit" value="Cancel" style="width: 45%; float:right; margin-left:8px;">
                </div>
            </div>
        </section>
    </form>



</body>

</html>