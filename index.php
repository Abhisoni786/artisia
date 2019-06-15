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
  <title>Artisan Gallery | Welcome</title>
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
                <li><a href="#">Home</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact us.php">Contact us</a></li>
            </ul>
        </nav>
        <?php if(!isset($_SESSION['isLogged'])) {
          ?>
        <a class="btn" href="login.php"><button>Login</button></a>
        <?php }else{ ?>
           
          <a href="profile.php" class="btn"><button>Account</button></a>
    <?php } ?>  
    </header>

  <section class="showcase">
    <div class="container">
      <h2>Artisan Gallery</h2>
    </div>
  </section>

  <section id="boxes">
    <div class="container">
      <h3 style="text-align: center;">Category</h3>
      <?php
      while ($row = $data->fetch_assoc()) { ?>
        <div class="box">
          <a href="checkCategoryData.php?id=<?php echo $row['id'] ?>&catName=<?php echo $row['title']; ?>">
          <img src="<?php echo $row['image_url']; ?>" alt="some image" width="250px" height="250px" />
             <h4><?php echo $row['title']; ?></h4></a>
         
        </div>
      <?php } ?>
    </div>
  </section>

  <br>
  &nbsp;
  <footer>
    <p>Artisan Gallery, Copyright &copy; 2019</p>
  </footer>

  <script src="js/app.js"></script>
</body>
</html>