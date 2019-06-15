<?php
session_start();

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>Artisan Gallery| Services</title>
    <link rel="stylesheet" href="./css/style.css">

    <style>
    .btn{
      border-radius: 0px !important;
      padding: 8px 10px !important;
      background-color: green !important;
      color: white !important;
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
           
          <a href="profile.php" class=""><button>Account</button></a>
    <?php } ?>  
    </header>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Contact us</h1>
          <ul id="services">
            <li>
              <article>
                <p class="dark">
                   If customer wants to buy any arts then contact us We will contact you and provide regarding infomation related to the artifact 
                   <br> Please share the link of that art for more convience <br>
                   Thank you... 
                </p>
              </article>
            </li>
           
          </ul>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>Get A Quote</h3>
            <form class="quote">
  						<div>
  							<label>Name</label><br>
  							<input type="text" placeholder="Name">
  						</div>
  						<div>
  							<label>Email</label><br>
  							<input type="email" placeholder="Emial Address">
  						</div>
  						<div>
  							<label>Message</label><br>
  							<textarea placeholder="Message"></textarea>
  						</div>
  						<button class="btn" type="submit">Send</button>
					</form>
          </div>
        </aside>
      </div>
    </section>

    <footer>
      <p>Artisan Gallery, Copyright &copy; 2019</p>
    </footer>
  </body>
</html>
