<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Home</title>
</head>
<body>
    <?php

    if(isset($_SESSION['auth']) && isset($_SESSION['username']))
{
    echo '<script>window.location = "home.php";</script>';
}else{
    echo '<script>window.location = "login.html";</script>';

}
?>
</body>
</html>