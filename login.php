<?php
session_start();
require_once('connection.php');
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
  .navbar {
    margin-bottom: 0px;
    border-radius: 0;
  }
  #logo{
    background-image: url('logo.png');
    background-repeat: no-repeat;
    background-position: center;
    margin: 0;
    padding: 0;
    height: 120px;
    width: 100%;
    background-color: #000000;
  }
  .navbar{}
  .navbar li{
    font-size: 1.2em;
    padding-top: 2px;
    padding-left:10px;
  }
  #searchbox{
    position: absolute;
    top:12px;
    left: 350px;
  }
    .largetext{
      padding: 0;
      font-size: 2.5em;
    }
    #col{
      padding-top: 20px;
      background-color: rgba(255, 255, 255, 0.8);
    }
    textarea{
      resize: none;
    }
    #forgot{
      padding-top: 9px;
      margin-bottom: 10px;
    }

    #background{
      background-image: url('loginbg1234.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      height: 600px;
    }
    #content{
      padding-top: 150px;
    }
    h1{
      color: white;
    }
  </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
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
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="login.php">Log In</a></li>
          <li><a href="signup.php">Sign Up</a></li>
        </ul>
        <!--<form>
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
            </div>
            <input type="email" class="form-control" id="email" placeholder="Search for..."/>
            <span class="input-group-btn ">
            <button class="btn btn-success" type="button"><span class="glyphicon glyphicon-search"></span> Search!</button>
          </span>
          </div>
        </div>
        </form>-->
        <ul class="nav navbar-nav navbar-right">
          <!--<li><a href="account.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>-->
          <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="background">
  <form method ="post">
    <div class="container" id="content">
      <h1 class="text-center">Please Log in</h1>
    <div class="row">
      <div class="col-md-4 col-md-offset-4" id="col">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" placeholder="Username" name="username">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" placeholder="Password" name="password">
    </div>

  <div class="form-group">
  <input type="submit" value="Login" class="btn btn-success btn-lg btn-block" name="btn-login"/>
  </div>
    </form>
   <ul>
     <li>
       <button type="button" class="btn btn-danger" onClick="location.href='Admin.php'"> Admin Login </button>
     </li>
   </ul>
<script>

}
                  </script>
   <br>



  </div>
  </div>
</div>
</div>
</div>
<?php

  if(isset($_POST['btn-login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $error = false;
    $errorMessage = "";

    if(empty($username)){
      $error = true;
      $errorMessage = "<br>Please enter username.";
    }

    if(empty($password)){
      $error = true;
      $errorMessage .= "<br>Please enter password.";
    }
    if(!$error){
      $query = "SELECT cID FROM customer WHERE username = '$username' AND password = '$password'";
      $result = $mysqli->query($query);
      $count = $result->num_rows;
      if($count==1){
        echo '<div class="container text-center">
              <div class="row">
              <div class="col-md-6 col-md-offset-3">
              <div class="alert alert-success" role="alert">
              <strong>Successfully!</strong> ,welcome.
              </div>
              </div>
              </div>
              </div>';
        $row = $result -> fetch_array();
        $_SESSION['customerID'] = $row['cID'];
        $_SESSION['customerFirstName'] = $row['cFName'];
        $_SESSION['customerLastName'] = $row['cLName'];
        $_SESSION['customerUsername'] = $row['userName'];
        $_SESSION['customerPhoneNum'] = $row['phoneNumber'];
        $_SESSION['customerEmail'] = $row['email'];
        echo("<script>location.href = 'index.php?is_login_fresh=true';</script>");
      }
      else{
        echo '<div class="container text-center">
              <div class="row">
              <div class="col-md-6 col-md-offset-3">
              <div class="alert alert-danger" role="alert">
              <strong>Failed!</strong> ,wrong username or password.
              </div>
              </div>
              </div>
              </div>';
      }
    }
    else{
      echo '<div class="container text-center">
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-danger" role="alert">
            <strong>There were error(s)!</strong>'.$errorMessage.'.
            </div>
            </div>
            </div>
            </div>';
    }
  }
 ?>
</body>
</html>

<!-- your account line 117 / search engine อยู่line 90-115 -->
