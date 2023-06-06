<?php 
    require 'config.php';
    if ( $_POST ) {
        
        $email = $_POST['email'];
        $sifre = $_POST['sifre'];

        $kontrol = DB::getRow("SELECT * FROM uyeler WHERE email=? AND sifre=?",array(
            $email,
            $sifre
        ));

        /** başarılı ise */
        if ( $kontrol ) {
            $_SESSION['login'] = $kontrol->id;
            header("Location:index.php");
            die();
        }
        else
        {
            header("Location:index.php?error=1");
            die();
        }

        
    }

?>
 <!-- login form start--> 
 <div class="login-form-container">
    <span class="fas fa-times" id="close-login-form"></span>
<form action="">
    <h3>user login</h3>
   <input type="email" placeholder="email" class="box">
   <input type="password" placeholder="password" class="box">
   <input type="submit" value="login now" class="btn">
   <p>don't have an account <a href="inc/kayit-ol.php">create one </a></p>

   </div>

