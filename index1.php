
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

    

    <!--home section start-->
    <section class="home" >
   <div class="content">
    <h2> THE MOST SUITABLE PRODUCTS YOU ARE LOOKING FOR ARE HERE</h2>
    <p> Instantly Access Every Electronic Device You Need</p>
    <a href="products1.php" class="btn">Discover Products</a>
   </div>
 </section>



    <!--home section end-->


<!-- popular section start-->
<section class="popular">
<h1 class="heading"> Popular <span>Products</span></h1>
<div class="box-container">

    <!-- 1. ürün-->
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
<!-- 2. ürün-->

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

<!-- 3. ürün-->
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


</div>

</section>

<!-- popular section end-->




<!-- about section start-->
<section class="about">
    <h1 class="heading"> WHO<span>ARE</span>  WE?</h1>
<div class="row">
    <div class="image">
        <img src="images/who-we-are.png" alt="whoareyou">
    </div>
    <div class="content">
        <h3>How did we start?</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, doloremque!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius, perspiciatis? Consequatur sapiente ducimus optio molestias officiis! Nulla quis animi consequuntur illo doloribus fugit. Odit provident deserunt dolor. Quia, nobis perspiciatis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita corrupti quas natus recusandae, officia iste! Delectus molestiae unde fuga assumenda quidem voluptates? Sapiente nisi, in repellat optio natus nostrum omnis.
        </p>
        <a href="about1.php" class="btn">Learn More..</a>
    </div>
</div>

</section>

<!-- about section end-->


<!-- review section start-->
<section class="review">
    <h1 class="heading"> Customer's <span>Review</span> </h1>
    <div class="box-container">
        <div class="box">
            <img src="images/alıntı.png" alt="quote">
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque quae, quas magni dolorum eveniet aut illum eius possimus. Ex maxime quia rem voluptas in cumque? Ipsum deleniti nisi esse fugit!
            </p>
            <img src="images/avr-1.png" alt="user1">
            <h3> George  Davis</h3>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half"></i>
                <i class="fa-regular fa-star"></i>
  </div>
        </div>
        <div class="box">
            <img src="images/alıntı.png" alt="quote">
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque quae, quas magni dolorum eveniet aut illum eius possimus. Ex maxime quia rem voluptas in cumque? Ipsum deleniti nisi esse fugit!
            </p>
            <img src="images/avr-2.png" alt="user1">
            <h3> Olivia Brown</h3>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half"></i>
  </div>
        </div>
        <div class="box">
            <img src="images/alıntı.png" alt="quote">
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque quae, quas magni dolorum eveniet aut illum eius possimus. Ex maxime quia rem voluptas in cumque? Ipsum deleniti nisi esse fugit!
            </p>
            <img src="images/avr-3.png" alt="user1">
            <h3> Emily Wilson </h3>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>

  </div>
        </div>
    </div>



</section>
<!-- review section end-->



<!-- contact section start-->
<section>

<div class="contact">
    <h1 class="heading"> Contact <span>Us</span> </h1>
<div class="row">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12164.882400218108!2d27.9360007!3d40.3374521!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b5d4a80f94f805%3A0x9901064bc5b1c83!2sBand%C4%B1rma%20Onyedi%20Eyl%C3%BCl%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1686686428431!5m2!1str!2str"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<form class="map">
   <h3>Contact</h3>
   <div class="inputBox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="name"/>

   </div>
   <div class="inputBox">
    <i class="fas fa-envelope"></i>
    <input type="text" placeholder="email"/>

   </div>
   <div class="inputBox">
    <i class="fas fa-phone"></i>
    <input type="text" placeholder="number"/>

   </div>
<input type="submit" class="btn" value="contact now" >
</form>

</div>
</div>

</section>



<!-- contact section end-->


<?php
include("footer1.php");

?>

</body>
</html>