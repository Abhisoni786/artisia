<?php
require("api/Function/DbFunction.php");
$conn = new mysqli("localhost", "root", "", "artify");

$db = new DbFunction();
$result;
session_start();
if (isset($_GET['id']) && isset($_GET['catName'])) {
  $id = $_GET['id'];
  $catName = $_GET['catName'];
} else {
  header("Locatin: index.php");
}

$result = $stmt = $conn->query("SELECT * FROM `artifacts` WHERE `cat_id` = $id");

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
  <!-- <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"> -->
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
           
          <a href="profile.php" class="btn"><button>My Accont</button></a>
    <?php } ?>  
    </header>
  <div class="Heading">
    <span><a href="index.php">Categorgy</a> &gt; <?php echo $catName; ?></span>
  <div class="menu-right">
    <form>
          Sort By:
          <select>
            <option>Popular</option>
            <option>Low to high</option>
            <option>High to Low</option>
          </select>
          <input name="btn" class="btn" type="submit" value="Submit">
    </form>
  </div> 
 </div>

  <main role="main">
      <section id="boxes">
        <div class="container">
          <?php
          while ($row = $result->fetch_assoc()) { ?>
           
            <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="<?php echo $row['image_url']; ?>" alt="img" style="width: 300px; height:300px;">
              </div>
              <div class="flip-card-back">
                  <h1><?php echo $row['title']; ?></h1> 
                  <p>Price : &#8377; <?php echo $row['price']; ?></p> 
                  <p></p>
                  <a href="product.php?id=<?php echo $row['id'] ?>&catName=<?php echo $row['title']; ?>"><button>Check</button></a>
              </div>
            </div>
          </div>

          <?php } ?>
        </div>
      </section>
  </main>
<br>


  <footer>
      <p>Artisan Gallery, Copyright &copy; 2019</p>
    </footer>
</body>

</html>