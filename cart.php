<?php
session_start();
$conn = new mysqli("localhost", "root", "", "artify");

$item  = '';

if (isset($_SESSION['item'])) {
    $item = $_SESSION['item'];
}

if (!empty($item)) {
    $sql = "SELECT * FROM `artifacts` where id= $item";
    $data = $stmt = $conn->query($sql);
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
    <meta name="keywords" content="web design, affordable web design, professional web design">
    <meta name="author" content="Brad Traversy">
    <title>Artisan Gallery | Your Cart</title>
    <link rel="stylesheet" href="./css/style.css">


    <style>
        .error {
            text-align: center;
            color: red;
        }

        .error a {
            text-decoration: none;
            color: red;
            font-weight: bold;
            font-size: 1rem !important;
            transition: 1s ease-in;
        }

        .error a:hover {
            border-bottom: 1px solid black;
        }

        .warnning {
            text-align: center;
            color: #f79494;
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
        <?php if (!isset($_SESSION['isLogged'])) {
            ?>
            <a class="btn" href="login.php"><button>Login</button></a>
        <?php } else { ?>
            <a href="profile.php" class="btn"><button>Account</button></a>
        <?php } ?>
    </header>


    <main role="main" >
        <div class="shopping-cart">

            <div class="title"> Your Cart </div>
            <?php if (isset($_SESSION['isLogged'])) {

                if (empty($item)) {
                    echo '<h2 class="warnning">Sorry You did not add any artifacts to your cart</h2>';
                    echo '<a href="index.php"><button>Continue Browsing</button></a>';
                } else {



                    while ($row = $data->fetch_assoc()) { ?>

                        <div class="item">
                            <div class="image">
                                <img src="<?php echo $row["image_url"]; ?>" alt="image" width="80px" height="80px">
                            </div>
                            <div class="description">
                                <span><?php echo $row['title'] ?></span> <!-- <br> -->
                                <span><?php  ?></span>
                            </div>

                            <div class="total-price"><?php echo $row['price']; ?></div>
                            <div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="far fa-times-circle"></i></div>
                        </div>
                    <?php } ?>
                    <a href="api/Checkout.php?id=1" class="btn" style="margin:8px !important; float:right;"><button>Checkout</button></a>
                <?php }
        } else { ?>
                <h2 class="error">You are not Loggged in <br> Please <a href="login.php">Login</a> first </h2>
            <?php }  ?>
        </div>
    </main>

    <br>
    &nbsp;

    <script src="https://kit.fontawesome.com/8004ccfda8.js"></script>
    <footer>
        <p>Artisan Gallery, Copyright &copy; 2019</p>
    </footer>
</body>

</html>