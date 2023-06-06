<?php 
    require 'config.php';

    if ( $_POST ) {
        
        $isim_soyisim = $_POST['isim_soyisim'];
        $email        = $_POST['email'];
        $sifre        = $_POST['sifre'];

        $id = DB::insert("INSERT INTO uyeler(uye_adi,email,sifre) VALUES(?,?,?)",array(
            $isim_soyisim,
            $email,
            $sifre
        ));

        header("Location:login.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kayıt Ol</title>
    <style>
        
@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{

background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}


.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
    </style>
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Kayıt Ol</h3>
                <div class="d-flex justify-content-end social_icon">
                    <span><i class="fab fa-facebook-square"></i></span>
                    <span><i class="fab fa-google-plus-square"></i></span>
                    <span><i class="fab fa-twitter-square"></i></span>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="isim_soyisim" class="form-control" placeholder="İsim Soyisim">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="sifre" class="form-control" placeholder="Şifre">
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" value="Kayıt Ol" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    <a href="login.php">Giriş Yap</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>