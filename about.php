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
    <title>Artisan Gallery| About</title>
    <link rel="stylesheet" href="./css/style.css">
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
           
          <a href="profile.php" class=""><button>My Account</button></a>
    <?php } ?>  
    </header>

    <br>
    <br>
<main role="main">
    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">About Us</h1>
          <p>
            Artisan Art Gallery began its journey in the first decade of the new millennium and geared up an evolution in the modern and contemporary art in India. ARTISAN has showcased some of the unique and finest exhibitions of modern and contemporary art in India building up a gateway of Indian art in the world market.  Aakriti has concentrated and devised easier ways to make the sale and purchase through online art shop available in the online galleries apart from direct sales from the galleries’ physical sites.Aakriti is providing to its collectors and viewers where you can make the best of your deals, also bid and buy in the form of auction/s with full faith and conviction with every transparency of authenticity in each deal made</p>
          
            <h1>
              DEVELOPERS PROFILES</h1>
               <p> :ANKUSH PATEL.<br>
                :ABHISHEK SONI. <br>
                :RASHMI AHIRWAR. </p>

A GROUP OF COLLEGE STUDENTS HAD MAKE SOME EFFORT FOR MAKING ARTISAN GALLERY WEBSITE.IN THIS WEBSITE WE ARE HAVING A COLLECTION OF DIFFRENT PAINTINGS AND OTHER ITEMS LIKE SCULPTURE, WATER PAINTINGS ,HANDICRAFTS ,PORTRAITS,ARTIFACTS, Etc.

            </p>
        </article>

        
      </div>
    </section>
</main>
    <footer>
      <p>Artisan Gallery, Copyright &copy; 2019</p>
    </footer>

 </body>
</html>
