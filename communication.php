<?php
   include("inc/head.php");
?>

 <!-- login form start--> 
 <div class="login-form-container">
    <span class="fas fa-times" id="close-login-form"></span>
<form action="">
    <h3>user login</h3>
   <input type="email" placeholder="email" class="box">
   <input type="password" placeholder="password" class="box">
   <p>forget your password <a href="#">click here</a></p>
   <input type="submit" value="login now" class="btn">
   <p>or login with</p>
   <div class="buttons">
    <a href="#"class=btn>google</a>
    <a href="#"class=btn>facebook</a>

   </div>
   <p>don't have an account <a href="#">create one </a></p>

</form></div>
<!-- login form end--> 



<!-- contact section start-->
<section>

<div class="contact">
    <h1 class="heading"> Contact <span>Us</span> </h1>
<div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6022.593284746129!2d29.081333!3d40.99688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac7d0845bf567%3A0x1b9dd0c66c249d5e!2zw5ZybmVrLCAzNDcwNCBBdGHFn2VoaXIvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1685636863428!5m2!1str!2str"loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<form class="map">
   <h3>İletişime Geç</h3>
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
include("inc/footer.php");

?>

</body>
</html>