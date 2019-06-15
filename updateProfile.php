<?php
session_start();

require_once("api/Function/DbFunction.php");
$db = new DbFunction();

if (!(isset($_SESSION['isLogged']))) {
    header("Location:index.php");
}

$username = $_SESSION['username'];
$user = $db->getUserDetail($username);
$email = $user['email'];
$response = array();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Address</title>

    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background-color: #eee !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        h3 {
            padding: 0;
            margin: 0;
        }

        input[type=text] {
            padding: 8px;
            border-radius: 0;
            border: 4px solid #eee;
            width: 50%;
            margin-top: 2%;
            transition: 1s ease;
        }

        input[type=text]:hover {
            border: solid #eee;
        }

        input[type=text]:focus {
            border-top-left-radius: 20px;
            outline: none;
        }


        input[type=submit] {
            background-color: #ee6e73;
            border: 2px solid #ee6e73;
            border-radius: 2px;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            padding: 15px 0;
            margin-top: 15px;
            width: 25%;
            transition: 0.7s ease;
            box-shadow: 1px 2px 3px 0px rgba(0, 0, 0, 0.10);

        }

        input[type=submit]:hover {
            box-shadow: 3px 4px 5px 0px rgba(0, 0, 0, 0.10);
        }

        input[type=submit]:focus {
            outline: none;
        }

        input[type=email] {
            outline: none;
            border: 4px solid #eee;
            ;
            background: transparent;
            padding: 8px;
            margin-top: 8px;
            width: 50%;
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

            <a href="profile.php"><button>My Account</button></a>
        <?php } ?>
    </header>

    <?php if ($user) { ?>

        <div class="row">
            <div class="col-4">
                <section id="main" class="wrapper">
                    <div class="inner">
                        <div class="content">
                            <a class="links current" href="profile.php">Your Profile</a>
                            <hr>
                            <a class="links " href="orders.php">Your Orders</a>
                            <hr>
                            <a class="links " href="#">Address book</a>
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
                            <span class="heading">update Profile<span>
                                    <hr>
                                    <form action="api/updateprofile.php" method="post">
                                        <label>email</label><br><input disabled type="email" title="You can't edit your email" name="email" id="newAdd" value="<?php echo $user['email']; ?> "><br>
                                        <label>Username</label><br><input type="text" name="username" id="newAdd" value="<?php echo $user['username']; ?> " required><br>
                                        <label for="">Name</label> <br><input type="text" name="name" id="newAdd" value="<?php echo $user['name']; ?> " required><br>
                                        <label for="">Address</label><br><input type="text" name="address" id="newAdd" value="<?php echo $user['address']; ?> " required><br>
                                        <input type="submit" name="submit" value="Submit">
                                        <a class="outlineBtn" href="profile.php?cancel=true">Cancel</a>
                                    </form>
                        </div>
                    </div>

                </section>
            </div>
        </div>


    <?php  } ?>


</body>

</html>