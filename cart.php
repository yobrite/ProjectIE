<?php
session_start();
require_once('connection.php');
$cID = $_SESSION['customerID'];
$query = "SELECT cartID,cID,productName,productPrice,amount FROM product,shoppingcart WHERE product.productID = shoppingcart.productID AND shoppingcart.cID = $cID";
$result = $mysqli -> query($query);


if(isset($_GET['del']))
  {
    $del =$_GET['del'];
   $querydel = "DELETE FROM shoppingcart WHERE cartID = $del";
   $mysqli -> query($querydel);
   header('Location: cart.php');
  }

  if(isset($_GET['add-cart']))
  {
    $add =$_GET['add-cart'];
    $amount = $_GET['amount'];
    $queryadd = "INSERT INTO shoppingcart(cartID,cID,amount,productID) VALUES ('','$cID','$amount','$add')";
    $mysqli -> query($queryadd);
    header('Location: cart.php');
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


  .col-md-13 {  margin-right: 35px;
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
            </div><
            <input type="email" class="form-control" id="email" placeholder="Search for..."/>
            <span class="input-group-btn ">
            <button class="btn btn-success" type="button"><span class="glyphicon glyphicon-search"></span> Search!</button>
          </span>
          </div>
        </div>
        </form>-->
        <ul class="nav navbar-nav navbar-right">
          <!--<li><a href="account.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>-->
          <li class="active"><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container">
      <div class="row">
          <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
            <thead>
              <tr>
                <th class="text-center"><table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Product</th>
                      <th>Quantity</th>
                      <th class="text-center">Price</th>
                      <th class="text-center">Total</th>
                      <th> </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sumbeforeshipping = 0;
                    for($i=0;$i<$result->num_rows;$i++){
                      $row = $result -> fetch_array();
                      $total = 1;
                      $total = $row["productPrice"]*$row["amount"];
                      $sumbeforeshipping += $total;
                      echo '
                          <tr>
                          <td class="col-sm-8 col-md-6">
                          <div class="media">
                              <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                              <div class="media-body">
                                  <h4 class="media-heading"><a href="#">'.$row['productName'].'</a></h4>
                                  <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                  <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                              </div>
                          </div></td>
                          <td class="col-sm-1 col-md-1" style="text-align: center">
                          <input type="email" class="form-control" id="exampleInputEmail1" value="'.$row["amount"].'">
                          </td>
                          <td class="col-sm-1 col-md-1 text-center"><strong>'.$row["productPrice"].'</strong></td>
                          <td class="col-sm-1 col-md-1 text-center"><strong>'.$total.'</strong></td>
                          <td class="col-sm-1 col-md-1">
                          <button type="button" class="btn btn-danger" value="'.$row["cartID"].'" onclick="return Deleteqry(this.value);">
                              <span class="glyphicon glyphicon-remove"></span> Remove
                          </button></td>
                      </tr>';
                    }
                   ?>
                    <tr>
                      <td>   </td>
                      <td>   </td>
                      <td>   </td>
                      <td><h5>Subtotal</h5></td>
                      <td class="text-right"><h5><strong><?php echo $sumbeforeshipping; ?></strong></h5></td>
                    </tr>
                    <tr>
                      <td>   </td>
                      <td>   </td>
                      <td>   </td>
                      <td><h5>Estimated shipping</h5></td>
                      <td class="text-right"><h5><strong>100</strong></h5></td>
                    </tr>
                    <tr>
                      <td>   </td>
                      <td>   </td>
                      <td>  
                        <button type="button" class="btn btn-default" onClick="location.href='index.php'"> <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping </button></td>
                      <td><h3>Total</h3></td>
                      <td class="text-right"><h3><strong><?php echo $sumbeforeshipping+100; ?></strong></h3></td>
                    </tr>
                    <tr>
                      <td>   </td>
                      <td>   </td>
                      <td>   </td>
                      <td>&nbsp;</td>
                      <td><p>Address</p>
                        <p><span class="form-group">
                          <textarea name="Input Credit Card Number3" class="form-control" id="Input Credit Card Number3" placeholder="Address"></textarea>
                        </span></p>
                        <p>Postcode<span class="form-group">
                          <input type="text" class="form-control" placeholder="Postcode" name="Input Credit Card Number" id="Input Credit Card Number">
                        </span></p>
                        <p>Payment Method</p>
                        <div class="col-md-13">
                          <p>
                            <select name="select_id" class="selectpicker" id="select_id" onChange="val()">
                              <option value="0">---Choose Your Payment Method---</option>
                              <option value="1">VISA</option>
                              <option value="2">MasterCard</option>
                              <option value="3">Discover©</option>
                              <option value="4">AmericanExpress</option>
                            </select>
                          </p>
                        </div>
                        <p>Credit Card<span class="form-group">
                          <input type="text" class="form-control" placeholder="Credit Card" name="Credit" id="Credit">
                        </span></p>
                        <p>CCV Number</p>
                        <p><span class="form-group">
                          <input type="text" class="form-control" placeholder="CCV" name="CCV" id="CCV">
                        </span></p>
                        <p>
                        <button type="button" class="btn btn-success" onClick="location.href='success.php'"> <span class="glyphicon glyphicon-shopping-cart"> Checkout</span> 



                        
                         </button>

                          <script>
						  
						  INSERT 

}
                  </script>
                          <p></p>
                        </button></td>
                    </tr>
                  </tbody>
                </table></th>
              </tr>
            </thead>
            </table>
          <img src="credit.png" width="889" height="233"></div>
      </div>
  </div>
  
  
  
  
<span class="glyphicon glyphicon-play"></span>




<script type="text/javascript">
function Deleteqry(id)
{
if(confirm("Are you sure you want to delete this row?")==true)
         window.location="cart.php?del="+id;
  return false;
}
</script>
</body>
</html>

<!-- your account line 112 / search engine อยู่line 85-110 -->

