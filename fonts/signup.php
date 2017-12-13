<?php
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
    background-color: #212021;
  }
  #searchbox{
    position: absolute;
    top:12px;
    left: 350px;
  }
    #col p{
      padding: 0;
      font-size: 2.5em;
    }
    #col{
      padding-top: 20px;
      background-color: rgba(255, 255, 255, 0.8);
    }
    body{
      background-color: #FAFAFA;
    }
    textarea{
      resize: none;
    }
    .navbar{}
    .navbar li{
      font-size: 1.2em;
      padding-top: 2px;
      padding-left:10px;
    }
    #background{
      background-image: url('loginbg1.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      height: 1000px;
    }
    #content{
      padding-top: 100px;
    }
    h1{
      color: white;
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
          <li><a href="index.php">Home</a></li>
          <li><a href="login.php">Log In</a></li>
          <li class="active"><a href="signup.php">Sign Up</a></li>
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
  <div id="background">
  <form method="post">
    <div class="container" id="content">
    <h1 class="text-center">Please Log in</h1>
    <div class="row">
      <div class="col-md-4 col-md-offset-4" id="col">
      <p>Register</p>
      <hr>
      <div class="form-group">
			     <label>First Name</label>
					 <input type="text" placeholder="First Name" class="form-control" name="firstname">
			</div>
			<div class="form-group">
			     <label>Last Name</label>
			     <input type="text" placeholder="Last Name" class="form-control" name="lastname">
    </div>

    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" placeholder="Username" name="username">
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" placeholder="Password" name="password">
    </div>

    <div class="form-group">
      <label for="cpassword">Confirm Password:</label>
      <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword">
    </div>

    <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Email Address" name="email">
  </div>

    <div class="form-group">
    <label for="phonenum">Phone number:</label>
    <input type="text" class="form-control" placeholder="Phone Number" name="phonenum">
  </div>
  <div class="form-group">
  <input type="submit" value="Sign up" class="btn btn-success btn-lg btn-block" name="btn-signup"/>
  </div>
    </form>

  </div>
</div>
</div>
</div>
<?php
 if ( isset($_POST['btn-signup']) ) {
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];
   $email = $_POST['email'];
   $phonenum = $_POST['phonenum'];
   $error = false;
   $errorMessage = "";
  // basic name validation
  if (empty($firstname)) {
   $error = true;
   $errorMessage = "<br>Please enter your first name.";
}
if (empty($lastname)) {
 $error = true;
 $errorMessage .= "<br>Please enter your last name.";
}
  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $errorMessage .= "<br>Please enter valid email address.";
  } else {
   // check email exist or not
   $query = "SELECT email FROM customer WHERE email='$email'";
   $result = $mysqli->query($query);
   $count = $result->num_rows;
   if($count!=0){
    $error = true;
    $errorMessage .= "<br>Provided Email is already in use.";
   }
  }
  if (empty($username)){
   $error = true;
   $errorMessage .= "<br>Please enter username.";
 }
 $query = "SELECT username FROM customer WHERE username='$username'";
 $result = $mysqli->query($query);
 $count = $result->num_rows;
 if($count!=0){
  $error = true;
  $errorMessage .= "<br>Provided Username is already in use.";
 }

  // password validation
  if (empty($password)){
   $error = true;
   $errorMessage .= "<br>Please enter password.";
 } else if(strlen($password) < 6) {
   $error = true;
   $errorMessage .= "<br>Password must have atleast 6 characters.";
  }
  else if($password != $cpassword){
    $error = true;
    $errorMessage .= "<br>Password must does not match";
  }
  if (empty($phonenum)){
   $error = true;
   $errorMessage .= "<br>Please enter your phone number.";
  }
  // if there's no error, continue to signup
  if( !$error) {
   $query = "INSERT INTO customer(cID,cFname,cLname,username,password,phoneNum,email) VALUES ('','$firstname','$lastname','$username','$password','$phonenum','$email')";
   if ($mysqli->query($query)) {
     echo '<div class="container text-center">
           <div class="row">
           <div class="col-md-6 col-md-offset-3">
           <div class="alert alert-success" role="alert">
           <strong>Successfully registered!</strong> ,you may login now.
           </div>
           </div>
           </div>
           </div>';
   } else {
    echo '<div class="container text-center">
           <div class="row">
           <div class="col-md-6 col-md-offset-3">
           <div class="alert alert-danger" role="alert">
           <strong>Something went wrong!</strong> ,try again later...
           </div>
           </div>
           </div>
           </div>';
    echo "Something went wrong, try again later...<br>" ;
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
