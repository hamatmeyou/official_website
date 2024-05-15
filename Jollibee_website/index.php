<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewfort" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jollibee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body scroll="no" style="overflow:hidden;">
  
<nav class="navbar">
      <ul>
        <li><a href="index.php" data-after="#home">Home</a></li>
        <li><a href="products.html" data-after="Programs">Products</a></li>  
        <li><a href="Location.html" data-after="Location">Location</a></li>
        <li><a href="About us.html" data-after="About us">About us</a></li>
        <li><a href="Contact us.html" data-after="Contact us">Contact us</a></li>
        <li><a href="logout.php" data-after="Logout">Logout</a></li> 
      </ul>
    </nav>
	    <section id="home">
      <div class="main">
        <a href="products.html" class="hire">Order Now!</a>
      </div>
      </head>
    </section>
</body>
</html>