<?php
session_start();
 if(!isset($_SESSION['auth'])){
   header('Location: login.html');
 } 
$username = $_SESSION['username'];

$conn = new mysqli("localhost","root","","artify");


$users = "SELECT * FROM `users`";
$user = $stmt = $conn->query($users);
$userCount = $user->num_rows;

$artifacts = $stmt = $conn->query("SELECT * FROM `artifacts`");
$countArts = $artifacts->num_rows;

$category = $stmt = $conn->query("SELECT * FROM `thumb`");
$countCat = $category->num_rows;



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Area | Dashboard</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">



</head>

<body>

  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
          aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Artisan Gallery</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="addNewArt.php">Add new arts</a></li>
          <li><a href="addCategory.ph"> Add new Category</a></li>
          <li><a href="orders.php"> Check Orders</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
         <li> <a href="#">Welcome <?php echo $username; ?></a> </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>

</br>

  <section id="breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
        <li class="active">Dashboard</li>
      </ol>
    </div>
  </section>

  <section id="main">
    <div class="container">
      <div class="row">
      <div class="col-md-3">
          <div class="list-group">
            <a href="home.php" class="list-group-item active main-color-bg">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
            </a>
            <a href="pages.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt"
                aria-hidden="true"></span> Users <span class="badge"><?php echo $userCount; ?></span></a>
            <a href="pages.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt"
                aria-hidden="true"></span> Artifacts <span class="badge"><?php echo $countArts; ?></span></a>
            <a href="art.php" class="list-group-item"><span class="glyphicon glyphicon-pencil"
                aria-hidden="true"></span> Category <span class="badge"><?php echo $countCat; ?></span></a>
            <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-user"
                aria-hidden="true"></span> Orders <span class="badge">50</span></a>
          </div>
      </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Current Category</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter Pages...">
                      </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Title</th>
                        <th>Published</th>
                        <th>Created</th>
                        <th></th>
                      </tr>
                      <tr>
                        <td>Home</td>
                        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                        <td>Dec 12, 2016</td>
                        <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
                      </tr>
                      <tr>
                        <td>About</td>
                        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                        <td>Dec 13, 2016</td>
                        <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
                      </tr>
                      <tr>
                        <td>Services</td>
                        <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
                        <td>Dec 13, 2016</td>
                        <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
                      </tr>
                      <tr>
                        <td>Contact</td>
                        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                        <td>Dec 14, 2016</td>
                        <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
                      </tr>
                    </table>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright AdminStrap, &copy; 2017</p>
    </footer>

   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
