<?php 
    require 'baglan.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <style>
       .login{
        margin: 20px auto;
        width: 300px;
       }
.login-screen{
background-color: wheat;
padding: 20px;

border-radius: 5px;
}
.app-title{
    text-align: center;
    color: black;
}
.login-form{
text-align: center;


}
.control-group{
    margin-bottom: 10px;

}
input{
    text-align: center;
    background-color: aliceblue;
    border: 2px solid transparent;
    border-radius: 3px;
    font-size: 16px;
    font-weight: 200;
    padding: 10px 0;
    width: 250px;
    transition: border .5s;
}
.btn{
    border: 2px solid transparent;
    background-color: #ff6347;
    color: black;
    font-size: 16px;
    line-height: 25px;
    padding: 10px;
    text-decoration: none;
    text-shadow: none;
    border-radius:3px ;
    

}
.btn:hover{
    color: wheat;
}



</style>
</head>
<body>
     <div class="login">
        <div class="login-screen">
            <div class= app-title>
                <h1> Kayıt Ol</h1>
            </div>
         <form action="islem.php" method="POST" >
            <div class="login-form">
                <div class="control-group">
                    <input type="text" name="username" class="login-field" placeholder="Email" id="login-name">
                       <label class="login-field-icon fui user" for="login-name"></label>
                </div>
                <div class="control-group">
                <input type="password" name="password" class="login-field" placeholder="Şifre" id="login-pass">
                <label class="login-field-icon fui user" for="login-pass"></label>

                </div>
                <div class="control-group">
                <input type="password" name="password_again" class="login-field" placeholder="Tekrar Şifre" id="login-pass">
                <label class="login-field-icon fui user" for="login-pass"></label>

                </div>
                <button href="kayit-ol.php" name="kayit" class="btn btn-primary btn-large btn-block">Kayıt Ol</button>

            </div>
        </form>
<a href="giris-yap.php">  <button href="giris-yap.php" name="giris" class="btn btn-primary btn-large btn-block">Giriş Yap</button></a>
        </div>
     </div>
</body>
</html>