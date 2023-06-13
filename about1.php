
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

    





<!-- about section start-->
<section class="about">
    <h1 class="heading"> WHO<span>ARE</span>  WE?</h1>
<div class="row">
    <div class="image">
        <img src="images/who-we-are.png" alt="whoareyou">
    </div>
    <div class="content">
        <h3>How did we start?</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, doloremque!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius, perspiciatis? Consequatur sapiente ducimus optio molestias officiis! Nulla quis animi consequuntur illo doloribus fugit. Odit provident deserunt dolor. Quia, nobis perspiciatis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita corrupti quas natus recusandae, officia iste! Delectus molestiae unde fuga assumenda quidem voluptates? Sapiente nisi, in repellat optio natus nostrum omnis. lorem10
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis sed a asperiores tempora enim maiores, quaerat possimus corporis architecto eveniet recusandae. Est, beatae optio quaerat eligendi sint architecto maiores quod odit officiis qui animi porro alias asperiores autem explicabo doloribus nostrum ab velit voluptate fuga cumque cupiditate odio eius. Obcaecati beatae veniam molestias eligendi, expedita voluptate! Expedita veniam in harum suscipit id dolores beatae eos, tenetur totam ad! Atque quas suscipit nulla ab? Veniam facilis debitis sed natus recusandae explicabo unde distinctio asperiores nemo ex laudantium sint, laborum culpa eligendi quae dolore doloribus quod reprehenderit, officia aliquid eius provident nam!
    </p>
       
    </div>
</div>

</section>

<?php
include("footer1.php");

?>