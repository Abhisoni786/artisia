<?php
session_start();
$conn = new mysqli("localhost", "root", "", "artify");

$sql = "SELECT * FROM `thumb`";
$data = $stmt = $conn->query($sql);

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




    
        .row::after{
            content: "";
            display: table;
            clear: both;
        }
        .col-5{
            float: left;
            width: 30%;
        }
        div.col-7{
            float: left;
            width: 70%;
        }
        .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px; 
           }
    </style>

</head>

<body>
    <header>
        <div class="container-main">
            <div id="branding">
                <h1><span class="highlight"> Artisan</span> Gallery</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="current"><a href="#">Cart</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact us.php">Contact us</a></li>
                    <?php if (isset($_SESSION['isLogged'])) { ?>
                        <li><a href="profile.php">Welcome <?php printf($_SESSION['username']); ?></a></li>
                    <?php } else { ?>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="signup.html">Sign up</a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </header>


   <div class="row">
        <div class="col-5">
            <div class="card">
                sample data
            </div>
        </div>
        <div class="col-7">
                sample data
            </div>
   </div>

    &nbsp;
    <footer>
        <p>Artisan Gallery, Copyright &copy; 2019</p>
    </footer>
</body>

</html>