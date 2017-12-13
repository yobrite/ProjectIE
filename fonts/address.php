<?php
  session_start();
  require_once('connection.php');
  $addressID = $_GET['viewaddress'];
  $query = "SELECT * FROM address WHERE addressID=$addressID";
  $result = $mysqli->query($query);
  $row = $result->fetch_array();
  $addressForm = $row['addressForm'];
  $district = $row['district'];
  $state = $row['state'];
  $postcode = $row['postcode'];
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
    						<li class="active">
    							<a href="#">
    							<i class="glyphicon glyphicon-home"></i>
    							Overview </a>
    						</li>
    						<li>
    							<a href="editaccount.php">
    							<i class="glyphicon glyphicon-user"></i>
    							Account Settings </a>
    						</li>
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
         <div class="profile-content" id="content">
           <h1><?php echo $_SESSION["customerUsername"].'\'s Address '?></h1>
         <table class="table">
           <tbody>
             <tr>
               <th>Address</td>
               <td><?php echo $addressForm ?></td>
             </tr>
             <tr>
               <th>District</td>
               <td><?php echo $district ?></td>
             </tr>
             <tr>
               <th>State</td>
               <td><?php echo $state ?></td>
             </tr>
             <tr>
               <th>Post code</td>
               <td><?php echo $postcode ?></td>
             </tr>
           </tbody>
         </table>
        <a class="btn btn-success" href="account.php"><span class="glyphicon glyphicon-arrow-left"></span> Go back to profile</a>
       </div>
    		</div>
    	</div>
  </div>

  </body>
  </html>
