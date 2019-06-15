<?php

require_once("Function/DbFunction.php");

$db = new DbFunction();

$error = array();
        if (isset($_POST['username']) && isset($_POST['password'])) {

                $username = $_POST['username'];
                $password = $_POST['password'];

                $psswd =md5($password);

                $result =  $db->login($username,$psswd);
                if ($result) {
                        header("Location: ../index.php");
                } else {
                        array_push($error, "username or password not found");
                }
        }
        else {
                array_push($error, "Required param not found");
        }


?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login script</title>

        <style>
                body {
                        font-family: Arial, Helvetica, sans-serif;
                        font-size: 13px;
                }

                .error_text {

                        border: 1px solid;
                        margin: 10px 0px;
                        padding: 15px 10px 15px 50px;
                        background-repeat: no-repeat;

                        color: #D8000C;
                        background-color: #FFBABA;

                }
        </style>
</head>

<body>

        <?php if (count($error) > 0) { ?>
                <div class="error_text">
                        <hp><?php echo "Error " . $error[0];  ?> </p>
                </div>

                <div>
                        <?php header("refresh:5;url=../login.html"); ?><h3> You are being redirected back to Login page in
                                <span id="count"> 5 </span> seconds</h3>
                </div>
        <?php } ?>
        <script>
                window.onload = function() {

                        (function() {
                                var counter = 5;

                                setInterval(function() {
                                        counter--;
                                        if (counter >= 0) {
                                                span = document.getElementById("count");
                                                span.innerHTML = counter;
                                        }
                                        // Display 'counter' wherever you want to display it.
                                        if (counter === 0) {
                                                //    alert('this is where it happens');

                                                clearInterval(counter);
                                        }

                                }, 1000);

                        })();

                }
        </script>
        </script>
</body>

</html>