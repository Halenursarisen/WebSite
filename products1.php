
<?php

session_start();
 
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: index.php');
}
  

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css/.css">
</head>
<body>
    <div class="header">
    <div id="menu-btn" class="fa-solid fa-bars-staggered">  
        </div> 
        <nav class="navbar">
            <a href="index1.php">Home </a>
            <a href="products1.php">Product </a>
            <a href="about1.php">About </a>
            <a href="communication1.php">Communication</a>
        </nav>
    </div>
    <div class="content">
  
       
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
  
       
        <?php  if (isset($_SESSION['username'])) : ?>
             
 
 
<p>
                WELCOME!
                <strong>
                    <?php echo $_SESSION['username']; ?>
                </strong>
            </p>
 
 
 
             
 
 
<p>
                <a href="index.php?logout='1'" style="color: red;">
                    Click here to LOGOUT
                </a>
            </p>
 
 
 
        <?php endif ?>
    </div>

    



<section class="popular">
<h1 class="heading">All <span>Products</span></h1>
<div class="box-container">

<div class="box"> 
    <div class="box-head">
<img src="images/pc3.jpg" alt="Product">
<span class="Product-category">LAPTOP</span>
<h3> MSI RAIDER GE78HX 13VH-038TR</h3>
<div class="price">$75 <span>/Monthly</span>
</div>
    </div>

    <div class="box-buttom">
        <a href="#" class="btn"> add to cart</a>

    </div>
</div>

<div class="box"> 
    <div class="box-head">
<img src="images/gmg-1.jpg" alt="Product">
<span class="Product-category">KULAKLIK</span>
<h3> JBLQuantum 200 Gaming Kulaklık</h3>
<div class="price">$50 <span>/Monthly</span></div>
    </div>

    <div class="box-buttom">
        <a href="#" class="btn"> add to cart</a>

    </div>
</div>

<div class="box"> 
    <div class="box-head">
<img src="images/tv-1.jpg" alt="Product">
<span class="Product-category">TV</span>
<h3> Samsung 55" Neo QLED 8K QN700B Smart TV</h3>
<div class="price">$100 <span>/Monthly</span></div>
    </div>

    <div class="box-buttom">
        <a href="#" class="btn"> add to cart</a>

    </div>
</div>
<div class="box"> 
    <div class="box-head">
<img src="images/kmr1.jpg" alt="Product">
<span class="Product-category">Kamera</span>
<h3>Canon Eos 1200D 18-55 mm DC <br>
  Profesyonel Dijital Fotoğraf Makinesi</h3>
<div class="price">$40 <span>/Monthly</span>
</div>
    </div>
    <div class="box-buttom">
        <a href="#" class="btn"> add to cart</a>

    </div>
</div>
<div class="box"> 
    <div class="box-head">
<img src="images/tlf1.jpg" alt="Product">
<span class="Product-category">Telefon</span>
<h3> iPhone 11 64GB</h3>
<div class="price">$25 <span>/Monthly</span>
</div>
    </div>

    <div class="box-buttom">
        <a href="#" class="btn"> add to cart</a>

    </div>
</div>
<div class="box"> 
    <div class="box-head">
<img src="images/klk-1.jpg" alt="Product">
<span class="Product-category">Kulaklık</span>
<h3> JBL Tune 560BT</h3>
<div class="price">$15 <span>/Monthly</span>
</div>
    </div>

    <div class="box-buttom">
        <a href="#" class="btn"> add to cart</a>

    </div>
</div>
</div>

</section>


<?php
include("footer1.php");

?>
 