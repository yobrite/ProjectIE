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


<div class="order"><p>Order:</p>
<table border='1'>
<tr>
    <td >cartID </td>
    <td >cID</td>
    <td >amount</td>
    <td >productID</td>
  </tr>

<?php
$queryy ="SELECT * FROM `history` ";
$result = $mysqli->query($queryy);

while($list=mysqli_fetch_array($result))
{
	$cartID=$list['cartID'];
	$cID=$list['cID'];
	$amount=$list['amount'];
	$productID=$list['productID'];
	
 echo "<history >
  <tr>
    <td >$cartID </td>
    <td >$cID</td>
    <td >$amount</td>
    <td >$productID</td>
  </tr>";
}




echo "
      <tr>
    <td >$cartID </td>
    <td >$cID</td>
    <td >$amount</td>
    <td >$productID</td>
      </tr>";

   while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['cartID'] . "</td>";
      echo "<td>" . $row['cID'] . "</td>";
	  echo "<td>" . $row['amount'] . "</td>";
      echo "<td>" . $row['productID'] . "</td>";
      echo "</tr>";
	  
	  
	  
   }
   echo "</table>";









?>


</body>
</html>