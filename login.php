<?php

require_once("api/Function/DbFunction.php");

$db = new DbFunction();

$error = array();

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $psswd = md5($password);

    $result =  $db->login($username, $psswd);
    if ($result) {
        header("Location: index.php");
    } else {
        array_push($error, "username or password not found");
        //echo '<div class="alert"><span class="closebtn" onclick="this.parentElement.style.display=" none";">&times;</span> USERNAME OR PASSWORD NOT FOUND</div>';

    }
} else {
}

?>

<!-- Typing some of the HTML -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | artisan Gallery</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <style>
        .top-block {
            margin: 1rem;
        }
    </style>

</head>

<body>
    <?php if (!empty($error)) { ?>

        <div class="alert alert-dismissible alert-danger d-flex justify-content-lg-center">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Username or Password not found!
        </div>
    <?php  }   ?>
    <div class="container">
        <form action="login.php" method="POST">
            <h1>User Login</h1>
            <div class="form-group">
                <input type="text" name="username" required /><label>Username</label>
            </div>
            <div class="form-group">
                <input type="password" name="password" required /><label>Password</label>
            </div>
            <input type="submit" name="user_login" value="Submit" />

            <p style="text-align:center;">Not a member <a href="signup.php">Sign up now</a></p>
        </form>

    </div>
    <script>
        var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.opacity = "0";
                setTimeout(function() {
                    div.style.display = "none";
                }, 600);
            }
        }
    </script>
</body>

</html>