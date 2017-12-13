<?php
session_start();
require_once('connection.php');
$cID = $_SESSION['customerID'];
$query = "SELECT * FROM customer WHERE cID = $cID";
$result = $mysqli->query($query);
$row = $result->fetch_array();
$cFname = $row['cFName'];
$cLname = $row['cLName'];
$username =$row['userName'];
$password = $row['password'];
$phoneNumber =$row['phoneNumber'];
$email = $row['email'];
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

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}

.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}
/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}
#content{
  padding-top: 60px;
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
           <li class="active"><a href="login.php">Log In</a></li>
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

   <div class="container" >
       <div class="row profile">
   		<div class="col-md-3">
   			<div class="profile-sidebar">
   				<!-- SIDEBAR USERPIC -->
   				<div class="profile-userpic">
   					<img src="userimage.jpg" class="img-responsive" alt="">
   				</div>
   				<!-- END SIDEBAR USERPIC -->
   				<!-- SIDEBAR USER TITLE -->
   				<div class="profile-usertitle">
   					<div class="profile-usertitle-name">
   						<?php echo $_SESSION['customerFirstName']. ' '. $_SESSION['customerLastName'] ?>
   					</div>
   					<div class="profile-usertitle-job">
   						Developer
   					</div>
   				</div>
   				<!-- END SIDEBAR USER TITLE -->
   				<!-- SIDEBAR BUTTONS -->
   				<div class="profile-userbuttons">
   					<button type="button" class="btn btn-success btn-sm">Follow</button>
   					<button type="button" class="btn btn-danger btn-sm">Message</button>
   				</div>
   				<!-- END SIDEBAR BUTTONS -->
   				<!-- SIDEBAR MENU -->
   				<div class="profile-usermenu">
   					<ul class="nav">
   						<li >
   							<a href="#">
   							<i class="glyphicon glyphicon-home"></i>
   							Overview </a>
   						</li>
   						<li class="active">
   							<a href="editaccount.php">
   							<i class="glyphicon glyphicon-user"></i>
   							Account Settings </a>
   						</li>
   						<li>
   						<li>
   							<a href="#">
   							<i class="glyphicon glyphicon-flag"></i>
   							Help </a>
   						</li>
   					</ul>
   				</div>
   				<!-- END MENU -->
   			</div>
   		</div>
   		<div class="col-md-9">
    					<ul id="myTab" class="nav nav-tabs nav_tabs">

    						<li class="active"><a href="#service-one" data-toggle="tab">Edit profile</a></li>
    						<li><a href="#service-two" data-toggle="tab">Edit address</a></li>
    						<li><a href="#service-three" data-toggle="tab">Change password</a></li>

    					</ul>
    				<div id="myTabContent" class="tab-content">
    						<div class="tab-pane fade in active" id="service-one">

    							<section class="container product-info">
                    <form method="post">
                      <div class="container">
                      <div class="row">
                        <div class="col-md-4 col-md-offset-1" id="col">
                        <hr>
                        <div class="form-group">
                             <label>First Name</label>
                             <input type="text" class="form-control" name="firstname" value = <?php echo $cFname; ?>>
                        </div>
                        <div class="form-group">
                             <label>Last Name</label>
                             <input type="text" class="form-control" name="lastname" value = <?php echo $cLname; ?>>
                      </div>

                      <div class="form-group">
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" name="email" value = <?php echo $email; ?>>
                    </div>

                      <div class="form-group">
                      <label for="phonenum">Phone number:</label>
                      <input type="text" class="form-control" name="phonenum" value = <?php echo $phoneNumber; ?>>
                    </div>
                    <div class="form-group">
                    <input type="submit" value="Edit your profile" class="btn btn-success btn-lg btn-block" name="btn-edit"/>
                    </div>
                      </form>

                    </div>
                  </div>
                  </div>
    							</section>

    						</div>
    					<div class="tab-pane fade" id="service-two">
    						<section class="container">
    						</section>
    					</div>
    					<div class="tab-pane fade" id="service-three">
                <section class="container">
                  <hr>
                  <form method ="post">
                    <div class="container">
                    <div class="row">
                      <div class="col-md-4 col-md-offset-1" id="col">
                    <div class="form-group">
                      <label for="password">Enter new password:</label>
                      <input type="text" class="form-control" placeholder="New password" name="password">
                    </div>
                    <div class="form-group">
                      <label for="cpassword">Confirm your new password:</label>
                      <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword">
                    </div>

                  <div class="form-group">
                  <input type="submit" value="Change password" class="btn btn-success btn-lg btn-block" name="btn-changepass"/>
                  </div>
                    </form>

                  </div>
                </div>
                </div>
                </section>
    					</div>
    				</div>
    				<hr>
   		</div>
   	</div>
 </div>

 <?php
  if ( isset($_POST['btn-edit']) ) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
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

   if (empty($phonenum)){
    $error = true;
    $errorMessage .= "<br>Please enter your phone number.";
   }

   // if there's no error, continue to signup
   if( !$error) {
    $query = "UPDATE customer SET cFName='$firstname', cLName='$lastname', phoneNumber='$phonenum', email='$email' WHERE cID = $cID";
    if ($mysqli->query($query)) {
      echo '<div class="container text-center">
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-success" role="alert">
            <strong>Successfully Edit your profile!</strong>
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

  if(isset($_POST['btn-changepass'])){
    $password1 = $_POST['password'];
    $cpassword1 = $_POST['cpassword'];
    $error = false;
    $errorMessage = "";

    if(empty($password1)){
      $error = true;
      $errorMessage = "<br>Please enter password.";
    }

    if(empty($cpassword1)){
      $error = true;
      $errorMessage .= "<br>Please confirm password.";
    }
    if($password != $password1){
      $error = true;
      $errorMessage .= "<br>Password doesn't match with your current password.";
    }
    else{
    if($password1 != $cpassword1){
      $error = true;
      $errorMessage .= "<br>Provided password doesn't match.";
    }
  }
    if(!$error){
      $query = "UPDATE customer SET password='$password' WHERE cID = '$cID'";
      if ($mysqli->query($query)){
        echo '<div class="container text-center">
              <div class="row">
              <div class="col-md-6 col-md-offset-3">
              <div class="alert alert-success" role="alert">
              <strong>Successfully change your password!</strong>
              </div>
              </div>
              </div>
              </div>';
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

<script type="text/javascript">
$('#myTab a').click(function(e) {
  e.preventDefault();
  $(this).tab('show');
});

// store the currently selected tab in the hash value
$("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
  var id = $(e.target).attr("href").substr(1);
  window.location.hash = id;
});

// on load of the page: switch to the currently selected tab
var hash = window.location.hash;
$('#myTab a[href="' + hash + '"]').tab('show');


$('.alert').fadeOut(3500);
</script>
 </body>
 </html>
