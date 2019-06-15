<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up | artisan Gallery</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <form action="api/signup.php" method="POST">
        <h1 style="text-align:center">User Sign up</h1>
        <div class="form-group">
            <input type="text" name="name" autocomplete="off" required/><label>Full Name</label>
        </div>
        <div class="form-group">
            <input type="text" name="username" required/><label>Username</label>
        </div>
        <div class="form-group">
            <input type="email" name="mail" required/><label>Email</label>
        </div>
        <div class="form-group">
            <input type="text" name="address" required/><label>Address</label>
        </div>
        <div class="form-group">
            <input type="password" name="password" required/><label>Password</label>
        </div>
       
        <input type="submit" value="Submit" />
        
        <p style="text-align:center; margin-top:15px;">Already member <a href="login.html">Login Now</a></p>

    </form>

    
</body>
</html>