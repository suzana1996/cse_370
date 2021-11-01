<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>

<html>

  <head>
    <title> Cart | Fastfood-Cafe </title>
  </head>

  

  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <?php include 'includes/header.php'?>

    
<?php
if(!empty($_SESSION["cart"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
        <h1>Your Shopping Cart</h1>
        <p>Looks tasty...!!!</p>
        
      </div>
      
    </div>
    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="35%">Item Id</th>
<th width="35%">Food Name</th>
<th width="10%">Quantity</th>
<th width="20%">Price Details</th>
<th width="15%">Order Total</th>
<th width="5%">Action</th>
</tr>
</thead>


<?php  

$total = 0;
foreach($_SESSION["cart"] as $keys => $values)
{
?>
<tr>
<td><?php echo $values["id"]; ?></td>
<td><?php echo $values["food_name"]; ?></td>
<td><?php echo $values["food_quantity"] ?></td>
<td>&#2547 <?php echo $values["food_price"]; ?></td>
<td>&#2547 <?php echo number_format($values["food_quantity"] * $values["food_price"], 2); ?></td>
<td><a href="cart.php?action=delete&id=<?php echo $values["id"]; ?>"><span class="text-danger">Remove</span></a></td>
</tr>
<?php 
$total = $total + ($values["food_quantity"] * $values["food_price"]);
}
?>
<tr>
<td colspan="3" align="right">Total</td>
<td align="right">&#2547 <?php echo number_format($total, 2); ?></td>
<td></td>
</tr>
</table>
<?php
  echo '<a href="cart.php?action=empty">
  <button class="btn btn-danger">
  <span class="glyphicon glyphicon-trash">
  </span> Empty Cart</button>
  </a>&nbsp;<a href="foodlist.php">
  <button class="btn btn-warning">Continue Shopping</button></a>
  
  &nbsp;<a href="payment.php"><button class="cobtn pull-right">
  <div class="cobtn1 glyphicon-share-alt"> Check Out</button></div></a>';
?>
</div>
<br><br><br><br><br><br><br>
<?php
}
if(empty($_SESSION["cart"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
        <h1>Your Shopping Cart</h1>
        <p>Oops! We can't smell any food here. Go back and <a href="foodlist.php">order now.</a></p>
        
      </div>
      
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
}
?>


<?php


if(isset($_POST["add"]))
{
if(isset($_SESSION["cart"]))
{
$item_array_id = array_column($_SESSION["cart"], "id");
if(!in_array($_GET["id"], $item_array_id))
{
$count = count($_SESSION["cart"]);

$item_array = array(
'id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'food_quantity' => $_POST["quantity"]
);
$_SESSION["cart"][$count] = $item_array;
echo '<script>window.location="cart.php"</script>';
}
else
{
echo '<script>alert("Products already added to cart")</script>';
echo '<script>window.location="cart.php"</script>';
}
}
else
{
$item_array = array(
'id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'food_quantity' => $_POST["quantity"]
);
$_SESSION["cart"][0] = $item_array;
}
}
if(isset($_GET["action"]))
{
if($_GET["action"] == "delete")
{
foreach($_SESSION["cart"] as $keys => $values)
{
if($values["id"] == $_GET["id"])
{
unset($_SESSION["cart"][$keys]);
echo '<script>alert("Food has been removed")</script>';
echo '<script>window.location="cart.php"</script>';
}
}
}
}

if(isset($_GET["action"]))
{
if($_GET["action"] == "empty")
{
foreach($_SESSION["cart"] as $keys => $values)
{

unset($_SESSION["cart"]);
echo '<script>alert("Cart is made empty!")</script>';
echo '<script>window.location="cart.php"</script>';

}
}
}


?>
<?php

?>

    </body>
    <link rel="stylesheet" type = "text/css" href ="css/cart.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <style>
    .cobtn {
    
    margin-top: 20px;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    border: 0;
    transition: .8s;
}

.cobtn1 {
    position: relative;
    width: 180px;
    overflow: hidden;
    font-size: 14px;
    text-align: center;
    padding: 2px;
    color: #ffffff;
    border: 2px groove #00FF00;
    border-radius: 5px;
    letter-spacing: 5px;
    text-transform: uppercase;
    cursor: pointer;
    transition: .5s;
    transition-property: width;
    background-color: #4e8509;
    transition: .8s;
}

.cobtn1:hover {

    width: 250px;
    border: 5px groove #eff0f870;
    box-shadow: 0px 5px 30px 0px inset, 0px 0px 0px 0px inset, 0px 5px 30px 0px, 0px 5px 30px 0px;
    text-shadow: 0px 5px 30px 0px, 0px 0px 0px 0px, 0px 5px 30px 0px, 0px 5px 30px 0px;

}
    .cobtn1:hover {
    position: relative;
    
    overflow: hidden;
    font-size: 16px;
    font-weight: 600;
    text-align: center;
    padding: 5px;
    color: #c7cadf;
    background-color: #2539d5;
    border: 2px groove #2539d5;
    border-radius: 5px;
    letter-spacing: 5px;
    text-transform: uppercase;
    cursor: pointer;
    transition: .5s;
    transition-property: width;
}

    </style>
</html>