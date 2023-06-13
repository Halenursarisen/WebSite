
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
include("footer.php");

?>


</body>
</html>