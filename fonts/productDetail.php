<?php
session_start();
require_once('connection.php');
$productID = $_GET['view-productID'];
$query = "SELECT productName,productTypeName,productPrice,promotionName,startDate,endDate,percentDiscount,shortDescription,longDescription FROM product,producttype,promotion
          WHERE product.productTypeID = producttype.productTypeID AND product.promotionID = promotion.promotionID AND productID = $productID";
$result = $mysqli->query($query);
$row = $result -> fetch_array();
$productName = $row['productName'];
$productTypeName = $row['productTypeName'];
$price = $row['productPrice'];
$promotionName = $row['promotionName'];
$startDate = $row['startDate'];
$endDate = $row['endDate'];
$percentDiscount = $row['percentDiscount'];
$shortDescription = $row['shortDescription'];
$longtDescription = $row['longDescription'];
$imagedir =  array("productpic/$productID/1.jpg","productpic/$productID/2.jpg","productpic/$productID/3.jpg","productpic/$productID/4.jpg");
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
     margin-bottom: 20px;
     border-radius: 0;
   }
   #searchbox{
     position: absolute;
     top:12px;
     left: 350px;
   }
   .navbar li{
     font-size: 1.2em;
     padding-top: 2px;
     padding-left:10px;
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

/*********************************************
           Theme Elements
*********************************************/

.gold{
 color: #FFBF00;
}

/*********************************************
         PRODUCTS
*********************************************/

.product{
 border: 1px solid #dddddd;
 height: 501px;
}

.product>img{
 max-width: 300px;
}

.product-rating{
 font-size: 20px;
 margin-bottom: 25px;
}

.product-title{
 font-size: 20px;

}
.product-type{
  font-size: 16px;
}

.product-desc{
 font-size: 14px;
}

.product-price{
 font-size: 22px;
 color: #FD9729;
 font-weight: bold;
}

.product-stock{
 color: #74DF00;
 font-size: 20px;
 margin-top: 10px;
}
.product-price-before{
  color: #9999A5;
  font-size: 14px;
}
.product-info{
   margin-top: 50px;
}

/*********************************************
         VIEW
*********************************************/

.content-wrapper {
 max-width: 1140px;
 background: #fff;
 margin: 0 auto;
 margin-top: 25px;
 margin-bottom: 10px;
 border: 0px;
 border-radius: 0px;
}

.margin{
 max-width: 1140px;
 margin: 0 auto;
}

.view-wrapper {
 float: right;
 max-width: 70%;
 margin-top: 25px;
}

.container {
 padding-left: 0px;
 padding-right: 0px;
 max-width: 100%;
}

/*********************************************
       ITEM
*********************************************/

.service1-items {
 padding: 0px 0 0px 0;
 float: left;
 position: relative;
 overflow: hidden;
 max-width: 100%;
 height: 501px;
 width: 130px;
}

.service1-item {
 height: 167px;
 width: 120px;
 display: block;
 float: left;
 position: relative;
 padding-right: 20px;
 border-right: 1px solid #DDD;
 border-top: 1px solid #DDD;
 border-bottom: 1px solid #DDD;
}

.service1-item > img {
 max-height: 110px;
 max-width: 110px;
 opacity: 0.6;
 transition: all .2s ease-in;
 -o-transition: all .2s ease-in;
 -moz-transition: all .2s ease-in;
 -webkit-transition: all .2s ease-in;
}

.service1-item > img:hover {
 cursor: pointer;
 opacity: 1;
}

.service-image-left {
 padding-right: 50px;
}

.service-image-right {
 padding-left: 50px;
}

.service-image-left > center > img,.service-image-right > center > img{
 max-height: 155px;
}
.col-md-1{
  margin-right: 35px;
}
#pic{
  height: 500px;
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


   <div class="container-fluid margin">
    <div class="content-wrapper">
		<div class="item-container">
			<div class="container" >
				<div class="col-md-12">
					<div class="product col-md-6 service-image-left">

						<center>
							<img id="item-display" src=<?php echo '"'.$imagedir[0].'"'; ?> alt="More picture"></img>
						</center>
					</div>

					<div class="container service1-items col-sm-2 col-md-2 pull-left">
						<center>
							<a id="item-1" class="service1-item">
								<img src=<?php echo '"'.$imagedir[1].'"'; ?> alt="More picture"></img>
							</a>
							<a id="item-2" class="service1-item">
								<img src=<?php echo '"'.$imagedir[2].'"'; ?> alt="More picture"></img>
							</a>
							<a id="item-3" class="service1-item">
								<img src=<?php echo '"'.$imagedir[3].'"'; ?> alt="More picture"></img>
							</a>
						</center>
					</div>

				<div class="col-md-4">
					<div class="product-title"><?php echo $productName ?></div>
          <div class="product-type"><?php echo "Category: ".$productTypeName ?></div>
          <br/>
					<div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
					<hr>
					<div class="product-price"><?php echo "Discounted Price: ". $price ." Baht"?></div>
          <div class="product-price-before"><s><?php echo "Price: ". $price ." Baht"?></s></div>
          <div class="promotiontext"><?php echo "Promotion ends at: ". $endDate?></div>
					<div class="product-stock">In Stock</div>
					<hr>
          <div class="container">
          <div class="row">
            <div class="col-md-1">
          <div class="shipping"><p>Shipping:</p>
          </div>
        </div>
          <div class="col-md-1">
          <div class="container">
          <select class="selectpicker" data-style="btn-info">
            <option>Thailand Post</option>
            <option>EMS</option>
            <option>Kerry Express</option>
            <option>FedEx</option>
            <option>UPS</option>
          </select>

        </div>
        </div>
      </div>
      </div>
      <br/>
      <div class="container">
      	<div class="row">
          <div class="col-md-1">
        <div class="Quantity"><p>Quantity:</p>
        </div>
      </div>
          <div class="col-md-1">
            <select class="selectpicker" id="select_id" onchange="val()">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
      	</div>
      </div>
      <br/>
					<div class="btn-group wishlist">
						<button type="button" class="btn btn-danger" <?php echo 'onclick="return addToCart('.$productID.');"' ?>>
							<span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
						</button>
					</div>
				</div>
			</div>
    </div>
		</div>
		<div class="container-fluid margin">
			<div class="col-md-12 product-info">
					<ul id="myTab" class="nav nav-tabs nav_tabs">

						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
						<li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
						<li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>

					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">

							<section class="container product-info">
  								<div class="product-desc"><?php echo $shortDescription ?></div>

  								<h3>Corsair Gaming Series GS600 Features:</h3>
  								<li>It supports the latest ATX12V v2.3 standard and is backward compatible with ATX12V 2.2 and ATX12V 2.01 systems</li>
  								<li>An ultra-quiet 140mm double ball-bearing fan delivers great airflow at an very low noise level by varying fan speed in response to temperature</li>
  								<li>80Plus certified to deliver 80% efficiency or higher at normal load conditions (20% to 100% load)</li>
  								<li>0.99 Active Power Factor Correction provides clean and reliable power</li>
  								<li>Universal AC input from 90~264V — no more hassle of flipping that tiny red switch to select the voltage input!</li>
  								<li>Extra long fully-sleeved cables support full tower chassis</li>
  								<li>A three year warranty and lifetime access to Corsair’s legendary technical support and customer service</li>
  								<li>Over Current/Voltage/Power Protection, Under Voltage Protection and Short Circuit Protection provide complete component safety</li>
  								<li>Dimensions: 150mm(W) x 86mm(H) x 160mm(L)</li>
  								<li>MTBF: 100,000 hours</li>
  								<li>Safety Approvals: UL, CUL, CE, CB, FCC Class B, TÜV, CCC, C-tick</li>
							</section>

						</div>
					<div class="tab-pane fade" id="service-two">
						<section class="container">
						</section>
					</div>
					<div class="tab-pane fade" id="service-three">

					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
var amount =1;
function val() {
amount = document.getElementById("select_id").value;
}
function addToCart(id)
{
if(confirm("Are you sure you want to add this product to your cart?")==true)
         window.location="cart.php?add-cart="+id+"&amount="+amount;
  return false;
}
</script>
 </body>
 </html>
