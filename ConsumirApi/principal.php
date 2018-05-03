<?php 
  session_start();
  if(isset($_GET["cerrar"])){
    unset($_SESSION["token"]);
    //unset($_SESSION["token"][1]);
  }
  if(isset($_SESSION["token"])){
    header('Location: userIndex.php');
  }
  if(isset($_GET["token"]) && isset($_GET["tipo"])){
    $_SESSION["token"][0] = $_GET["token"];
    $_SESSION["token"][1] = $_GET["tipo"];
    header('Location: userIndex.php');
  }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Principal</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/Logueado">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <br />
        <br />
        <br />
        <br />
        
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>Login to Your Account</h1><br>
                    <form>
                        <input id="username" type="text" name="user" placeholder="Username">
                        <input id="password" type="password" name="pass" placeholder="Password">
                
                        <a class="btn btn-success" onclick="login()">Registrar</a>
                    </form>
                    
                    <div class="login-help">
                        <a href="#">Register</a> - <a href="#">Forgot Password</a>
                    </div>
                </div>
            </div>
        </div>
        <style >
        @import url(http://fonts.googleapis.com/css?family=Roboto);
        /****** LOGIN MODAL ******/
        .loginmodal-container {
        padding: 30px;
        max-width: 350px;
        width: 100% !important;
        background-color: #F7F7F7;
        margin: 0 auto;
        border-radius: 2px;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        overflow: hidden;
        font-family: roboto;
        }
        .loginmodal-container h1 {
        text-align: center;
        font-size: 1.8em;
        font-family: roboto;
        }
        .loginmodal-container input[type=submit] {
        width: 100%;
        display: block;
        margin-bottom: 10px;
        position: relative;
        }
        .loginmodal-container input[type=text], input[type=password] {
        height: 44px;
        font-size: 16px;
        width: 100%;
        margin-bottom: 10px;
        -webkit-appearance: none;
        background: #fff;
        border: 1px solid #d9d9d9;
        border-top: 1px solid #c0c0c0;
        /* border-radius: 2px; */
        padding: 0 8px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        }
        .loginmodal-container input[type=text]:hover, input[type=password]:hover {
        border: 1px solid #b9b9b9;
        border-top: 1px solid #a0a0a0;
        -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        }
        .loginmodal {
        text-align: center;
        font-size: 14px;
        font-family: 'Arial', sans-serif;
        font-weight: 700;
        height: 36px;
        padding: 0 8px;
        /* border-radius: 3px; */
        /* -webkit-user-select: none;
        user-select: none; */
        }
        .loginmodal-submit {
        /* border: 1px solid #3079ed; */
        border: 0px;
        color: #fff;
        text-shadow: 0 1px rgba(0,0,0,0.1);
        background-color: #4d90fe;
        padding: 17px 0px;
        font-family: roboto;
        font-size: 14px;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
        }
        .loginmodal-submit:hover {
        /* border: 1px solid #2f5bb7; */
        border: 0px;
        text-shadow: 0 1px rgba(0,0,0,0.3);
        background-color: #357ae8;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
        }
        .loginmodal-container a {
        text-decoration: none;
        color: #666;
        font-weight: 400;
        text-align: center;
        display: inline-block;
        opacity: 0.6;
        transition: opacity ease 0.5s;
        }
        .login-help{
        font-size: 12px;
        }
        </style>
        
        
    </div>
    
    
</div>
</div>
</div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

</ol>
<div class="carousel-inner" role="listbox">
<div class="carousel-item active">
    <img class="d-block img-fluid" src="images/vfx-blog-13-super-estatisticas-video-marketing-para-empresas-twitter-02.jpg" alt="First slide">
</div>
<div class="carousel-item">
    <img class="d-block img-fluid" src="images/la empresa 1280 x 500.jpg" alt="Second slide">
</div>
<div class="carousel-item">
    <img class="d-block img-fluid" src="images/94.analise_financeira.jpg" alt="Third slide">
</div>
<div class="carousel-item">
    <img class="d-block img-fluid" src="images/four_blog_imagem_orcamento.jpg" alt="Third slide">
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
<style>
/* Carousel */
.carousel-item {
font-size: 20px;
line-height: 1.4;
}
/* Make .svg files in the carousel display properly in older browsers */
.carousel-inner .item img[src$=".jpg"] {
width: 120%;
}
/* QR code generator */
#qrCode {
margin: 15px;
}
/* Hide/rearrange for smaller screens */
@media screen and (max-width: 767px) {
/* Hide captions */
.carousel-caption {
display: none;
}
}
</style>



<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<script>
    
    function login(){

        var username= document.getElementById("username").value;
        var password= document.getElementById("password").value;
        var paremetros={
            "username":username,
            "password":password
        }
        $.ajax({
            data:paremetros,
            url:"http://localhost:3000/sessions",
            type:"post",
            success:function(response){
                response= response.replace("token:","");
                response= response.split(",");
                window.location.replace("http://localhost/ConsumirApi/principal.php?token="+response[0]+"&tipo="+response[1]);
            }
});
    }
    
</script>

</body>
</html>