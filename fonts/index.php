<?php
session_start();
require_once('connection.php');
$page = isset($_GET['page']) ? $_GET['page']:'1';
$query = "SELECT * FROM product WHERE productID BETWEEN $page+($page-1)*11 AND $page+($page-1)*11+12";
$result = $mysqli->query($query);
$array = array();
$productName = array();
$shortDescription = array();
$price = array();
$val = array();
for($i=1; $i<13; $i++){
  $val[] = ($i+($page-1)*12);
  $array[] = "productimg/".$val[$i-1].".jpg";
  $row = $result -> fetch_array();
  $productName[] = $row['productName'];
  $price[] = $row['productPrice'];
  $shortDescription[] = $row['shortDescription'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body{
      background: #EEEEEE;
    }
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 20px;
      border-radius: 0;
    }
    #myCarousel{
      margin-bottom: 50px;
      height: 365px;
    }
    #searchbox{
      position: absolute;
      top:12px;
      left: 350px;
    }
    .panel{
      margin: 0;
    }
    .navbar{}
    .navbar li{
      font-size: 1.2em;
      padding-top: 2px;
      padding-left:10px;
    }
    .list-group-item{
      padding: 20px 0 20px 50px;
      font-size: 0.9em;
    }
    .panel{
      height: 450px;
    }
    .bottom{
      position: absolute;
      bottom: 10px;
      left: 0;
      right: 0;
    }
    .banner{
      background-color: grey;
      height: 178px;
      width: 375px;
      margin-bottom: 10px;
    }
    .col-md-4{
      padding: 0;
    }
    #logo{
      background-image: url('logo.png');
      background-repeat: no-repeat;
      background-position: center;
      margin: 0;
      padding: 0;
      height: 120px;
      width: 100%;
      background-color: #212021;
    }
    .btn-black{
      background-color: #222222;
      color: white;
    }
    .fixed-height{
      height: 280px;
    }
    #fashion{
      background-image: url("fashion.png");
      background-repeat: no-repeat;
      background-position: left center;
    }
    #beauty{
      background-image: url("sport.png");
      background-repeat: no-repeat;
      background-position: left center;
    }
    #home{
      background-image: url("home.png");
      background-repeat: no-repeat;
      background-position: left center;
    }
    #toy{
      background-image: url("kid.png");
      background-repeat: no-repeat;
      background-position: left center;
    }
    #movie{
      background-image: url("music.png");
      background-repeat: no-repeat;
      background-position: left center;
    }
    #elect{
      background-image: url("electronics.png");
      background-repeat: no-repeat;
      background-position: left center;
    }
    .col-md-2{
      padding: 0;
    }
    .panel h4{
      font-size: 1.1em;
      font-weight: bold;
    }
    .bottom h4{
      font-size: 1.3em;
      color: red;
    }
  </style>
</head>
<body>


<div class="container text-center" id="logo">

</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="login.php">Log In</a></li>
        <li><a href="signup.php">Sign Up</a></li>
      </ul>
      <form>
        <div class="form-group col-md-4 col-md-offset-1" id="searchbox">
          <div class="input-group input-group-sm">
            <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">Fashion</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Beauty, Health & Grocery</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Home, Garden & Tools</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Toys, Kids & Baby</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Movies, Music & Games</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Electronics & Computers</a></li>
            </ul>
          </div><!-- /btn-group -->
          <input type="email" class="form-control" id="email" placeholder="Search for..."/>
          <span class="input-group-btn ">
          <button class="btn btn-success" type="button"><span class="glyphicon glyphicon-search"></span> Search!</button>
        </span>
        </div>
      </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="account.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">
  <div class="row">
    <div class="col-md-2">
      <div class="list-group">
        <a href="#" class="list-group-item" id="fashion">Fashion</a>
        <a href="#" class="list-group-item" id="beauty">Beauty, Health & Grocery</a>
        <a href="#" class="list-group-item" id="home">Home, Garden & Tools</a>
        <a href="#" class="list-group-item" id="toy">Toys, Kids & Baby</a>
        <a href="#" class="list-group-item" id="movie">Movies, Music & Games</a>
        <a href="#" class="list-group-item" id="elect">Electronics & Computers</a>
      </div>
    </div>
    <div class="col-md-6">
      <!-- Carousel -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="banner/electronics.jpg" alt="Chania">
      </div>

      <div class="item">
        <img src="banner/asus.jpg" alt="Chania">
      </div>

      <div class="item">
        <img src="banner/homegarden.jpg" alt="Flower">
      </div>

      <div class="item">
        <img src="banner/beauty.jpg" alt="Flower">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    </div>

    <div class="col-md-4 banner">
      <img src="banner/banner1.png" class="img-responsive" alt="">
    </div>


    <div class="col-md-4 banner">
      <img src="banner/banner2.png" class="img-responsive" alt="">
  </div>
  </div>
  </div>
</div>

<div class="image-container">
<div class="container">
  <div class="row">
    <div class="col-md-3 text-center">
      <div class="panel panel-default">
        <img src=<?php echo '"'.$array[0].'"'?> class="img-responsive fixed-height" style="width:100%" alt="Image">
        <div class="caption">
          <h4><?php echo $productName[0]?></h4>
          <div class="bottom">
          <h4><?php echo $price[0] ." Baht"?></h4>
          <button class="btn btn-black" type="submit" onclick= <?php echo '"location.href =\'productDetail.php?view-productID='.$val[0].'\'"' ?>;><span class="glyphicon glyphicon-search"></span> View More...</button>
          
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-3 text-center">
      <div class="panel panel-default">
        <img src=<?php echo '"'.$array[1].'"'  ?> class="img-responsive fixed-height" style="width:100%" alt="Image">
        <div class="caption">
        <h4><?php echo $productName[1] ?></a></h4>
        <div class="bottom">
        <h4><?php echo $price[1] ." Baht"?></h4>
        <button class="btn btn-black" type="submit" onclick= <?php echo '"location.href =\'productDetail.php?view-productID='.$val[1].'\'"' ?>;><span class="glyphicon glyphicon-search"></span> View More...</button>

        </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 text-center">
      <div class="panel panel-default">
        <img src=<?php echo '"'.$array[2].'"'  ?> class="img-responsive fixed-height" style="width:100%" alt="Image">
        <div class="caption">
        <h4><?php echo $productName[2] ?></a></h4>
        <div class="bottom">
        <h4 id="price3"><?php echo $price[2] ." Baht"?></h4>
        <button class="btn btn-black" type="submit" onclick= <?php echo '"location.href =\'productDetail.php?view-productID='.$val[2].'\'"' ?>;><span class="glyphicon glyphicon-search"></span> View More...</button>

        </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 text-center">
      <div class="panel panel-default">
        <img src=<?php echo '"'.$array[3].'"'  ?> class="img-responsive fixed-height" style="width:100%" alt="Image">
        <div class="caption">
        <h4><?php echo $productName[3] ?></a></h4>
        <div class="bottom">
        <h4><?php echo $price[3] ." Baht"?></h4>
        <button class="btn btn-black" type="submit" onclick= <?php echo '"location.href =\'productDetail.php?view-productID='.$val[3].'\'"' ?>;><span class="glyphicon glyphicon-search"></span> View More...</button>

        </div>
        </div>
      </div>
    </div>

  </div>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-md-3 text-center">
      <div class="panel panel-default">
        <img src=<?php echo '"'.$array[4].'"'  ?> class="img-responsive fixed-height" style="width:100%" alt="Image">
        <div class="caption">
          <h4><?php echo $productName[4] ?></a></h4>
          <div class="bottom">
          <h4><?php echo $price[4] ." Baht"?></h4>
          <button class="btn btn-black" type="submit" onclick= <?php echo '"location.href =\'productDetail.php?view-productID='.$val[4].'\'"' ?>;><span class="glyphicon glyphicon-search"></span> View More...</button>

          </div>
          </div>
      </div>
    </div>
    <div class="col-md-3 text-center">
      <div class="panel panel-default">
        <img src=<?php echo '"'.$array[5].'"'  ?> class="img-responsive fixed-height" style="width:100%" alt="Image">
        <div class="caption">
        <h4><?php echo $productName[5] ?></a></h4>
        <div class="bottom">
        <h4><?php echo $price[5] ." Baht"?></h4>
        <button class="btn btn-black" type="submit" onclick= <?php echo '"location.href =\'productDetail.php?view-productID='.$val[5].'\'"' ?>;><span class="glyphicon glyphicon-search"></span> View More...</button>

        </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 text-center">
      <div class="panel panel-default">
        <img src=<?php echo '"'.$array[6].'"'  ?> class="img-responsive fixed-height" style="width:100%" alt="Image">
        <div class="caption">
        <h4><?php echo $productName[6] ?></a></h4>
        <div class="bottom">
        <h4><?php echo $price[6] ." Baht"?></h4>
        <button class="btn btn-black" type="submit" onclick= <?php echo '"location.href =\'productDetail.php?view-productID='.$val[6].'\'"' ?>;><span class="glyphicon glyphicon-search"></span> View More...</button>

        </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 text-center">
      <div class="panel panel-default">
        <img src=<?php echo '"'.$array[7].'"'  ?> class="img-responsive fixed-height" style="width:100%" alt="Image">
        <div class="caption">
        <h4><?php echo $productName[7] ?></a></h4>
        <div class="bottom">
        <h4><?php echo $price[7] ." Baht"?></h4>
        <button class="btn btn-black" type="submit" onclick= <?php echo '"location.href =\'productDetail.php?view-productID='.$val[7].'\'"' ?>;><span class="glyphicon glyphicon-search"></span> View More...</button>

        </div>
        </div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-md-3 text-center">
      <div class="panel panel-default">
        <img src=<?php echo '"'.$array[8].'"'  ?> class="img-responsive fixed-height" style="width:100%" alt="Image">
        <div class="caption">
          <h4><?php echo $productName[8] ?></a></h4>
          <div class="bottom">
          <h4><?php echo $price[8] ." Baht"?></h4>
          <button class="btn btn-black" type="submit" onclick= <?php echo '"location.href =\'productDetail.php?view-productID='.$val[8].'\'"' ?>;><span class="glyphicon glyphicon-search"></span> View More...</button>

          </div>
          </div>
      </div>
    </div>
    <div class="col-md-3 text-center">
      <div class="panel panel-default">
        <img src=<?php echo '"'.$array[9].'"'  ?> class="img-responsive fixed-height" style="width:100%" alt="Image">
        <div class="caption">
        <h4><?php echo $productName[9] ?></a></h4>
        <div class="bottom">
        <h4><?php echo $price[9] ." Baht"?></h4>
        <button class="btn btn-black" type="submit" onclick= <?php echo '"location.href =\'productDetail.php?view-productID='.$val[9].'\'"' ?>;><span class="glyphicon glyphicon-search"></span> View More...</button>

        </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 text-center">
      <div class="panel panel-default">
        <img src=<?php echo '"'.$array[10].'"'  ?> class="img-responsive fixed-height" style="width:100%" alt="Image">
        <div class="caption">
        <h4><?php echo $productName[10] ?></a></h4>
        <div class="bottom">
        <h4><?php echo $price[10] ." Baht"?></h4>
        <button class="btn btn-black" type="submit" onclick= <?php echo '"location.href =\'productDetail.php?view-productID='.$val[10].'\'"' ?>;><span class="glyphicon glyphicon-search"></span> View More...</button>

        </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 text-center">
      <div class="panel panel-default">
        <img src=<?php echo '"'.$array[11].'"'  ?> class="img-responsive fixed-height" style="width:100%" alt="Image">
        <div class="caption">
        <h4><?php echo $productName[11] ?></a></h4>
        <div class="bottom">
        <h4><?php echo $price[11] ." Baht"?></h4>
        <button class="btn btn-black" type="submit" onclick= <?php echo '"location.href =\'productDetail.php?view-productID='.$val[11].'\'"' ?>;><span class="glyphicon glyphicon-search"></span> View More...</button>
        </div>
        </div>
      </div>
    </div>
  </div>
</div><br>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <ul class="pagination pagination-lg">
        <li class="panig"><a href="index.php?page=1">1</a></li>
        <li class="panig"><a href="index.php?page=2">2</a></li>
        <li class="panig"><a href="index.php?page=3">3</a></li>
        <li class="panig"><a href="index.php?page=4">4</a></li>
        <li class="panig"><a href="index.php?page=5">5</a></li>
        <li class="panig"><a href="index.php?page=6">6</a></li>
        <li class="panig"><a href="index.php?page=7">7</a></li>
        <li class="panig"><a href="index.php?page=8">8</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="container">
       <hr>
       <!-- Footer -->
       <footer>
           <div class="row">
               <div class="col-md-12">
                   <p>Copyright &copy; Your Website 2016</p>
               </div>
           </div>
       </footer>
   </div>

</body>
</html>
