<?php

session_start();

require_once("api/Function/DbFunction.php");

$db = new DbFunction();

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $data = $db->readSingle($id);
} else {
    header("Location:index.php");
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
    <title>Artisan Gallery | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- <link rel="stylesheet" href="./css/bootstrap/bootstrap.min.css"> -->
</head>

<body>
    <header id="header">
        <!-- <img src="" alt="" class="logo"> -->
      <div class="logo">
            Artisan Gallery
        </div>
        <nav>
            <ul class="nav_link">
                <li><a href="#">Home</a></li>
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

    <main role="main">
        <div class="row">
            <div class="col-4">
                <section id="main" class="wrapper">
                    <div class="inner">
                        <img src="<?php echo $data['image_url']; ?>" alt="artifacts image" width="300px" height="350px">

                    </div>
                </section>
            </div>
            <div class="col-7">
                <section id="main" class="wrapper">
                    <div class="inner">
                        <h1><?php echo $data['title']; ?></h1>
                        <p><?php echo $data['price']; ?></p>
                        <p><?php echo $data['artist_name']; ?></p>

                        <a href="api/cart_function.php?id=<?php echo $data['id']; ?>" class="button-primary">
                            Add to cart
                        </a>
                        <a href="checkout.php?id=<?php echo $id ?>&artifactName=<?php echo $data['title']; ?>&price=<?php echo $data['price']; ?>" class="button-secondary">
                            Book Now
                        </a>
                    </div>
                </section>

            </div>
        </div>
        <hr>
    </main>

    <footer>
        <p>Artisan Gallery, Copyright &copy; 2019</p>
    </footer>

</body>

</html>