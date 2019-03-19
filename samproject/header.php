<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
          <link rel="shortcut icon" href="favicon.ico">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  
        <script type='text/javascript' src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>
    <script type='text/javascript' src="assets/js/priceSocket.js"></script>
    <script type="text/javascript" src="assets/js/cookieset.min.js"></script>
    <script type="text/javascript" src="assets/package/fancybox/source/jquery.fancybox.js"></script>
    <link rel="stylesheet" href="assets/package/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />

   

    <link rel="stylesheet" type="text/css" href="assets/css/common.css" />
      <link href="assets/css/main.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="styleme.css" />
     
    
            <meta name="description" content="">
        <title>CFD Online Trading and Forex | Topnotch Support | Mishovau</title>
    <link rel="manifest" href="manifest.json">
    <script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>



<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?604DkHjg4sVJhMRuiJACKOpopmwe3r6b";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->

    </head>
<body>
   

<!-- Header -->


    <div class="pt0">
        <div class="col4 col2_m logo"><a href="index.php"><img src="assets/img/logo2.png"></a></div>
            <div class="col6 col1_m text_right hide_mobile">
                <div class="login">
                    <a class="" href="#">
                        <i class="fa fa-phone "></i>+4420 3389 8459
                    </a>
                    <a class="login_button button_small button_middle" href="https://api.whatsapp.com/send?phone=447520638679" target="_blank" style="color:#009757">
                        <i class="fa fa-whatsapp"></i>WhatsApp
                    </a>
                    <a class="btn-t11 -arr-r acc-section__btn -text-s02" data-auto-event-category="cta_click" data-auto-event-action="choose-your-account-type-main" href="login/index.php">
                        <i class="fa fa-lock"  aria-hidden="true"></i>Start
                    </a>
                    <!--<div class="lang_button">
                        <img src="assets/img/en-flag.jpg"> <i class="fa fa-caret-down" aria-hidden="true"></i>
                        <ul>
                            <li><a href="/en/lang/change">English</a></li><li><a href="/ar/lang/change">العربية</a></li><li><a href="/it/lang/change">Italiano</a></li><li><a href="/cn/lang/change">简体中文</a></li>                    </ul>
                    </div>-->
                </div>
                <div class="menu">
                    <ul>
                        <li>Trading <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <ul><li><a href="#">Trading </a></li><li><a href="#"> Trade Index CFDs</a></li><li><a href="#">Commodity CFDs</a></li><li><a href="#">Account types</a></li></ul>
                        </li>
                    </ul>
                    <ul><li><a href="#">Platform</a></li></ul>
                    <ul>
                        <li>IB Program <i class="fa fa-angle-down" aria-hidden="true"></i></li>
                    </ul>
                    <ul>
                        <li>About Us <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <ul><li><a href="#">Who we are</a></li><li><a href="#">What our clients say</a></li><li><a href="#">Partnership</a></li><li><a href="#">Regulation</a></li><li><a href="#">Contact us</a></li></ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile_menu_button">
        <i class="fa fa-comments-o support_mobile" aria-hidden="true" style="padding-right:15px;font-size:30px;"></i>
        <i class="fa fa-bars" aria-hidden="true" style="font-size:30px;"></i>
    </div>


<!-- header close -->


    <?php
        if(isset($_SESSION['successLogin'])){
            echo "<div class='successMessage'>".$_SESSION['successLogin']."</div>";
            unset($_SESSION['successLogin']);
        }

        if(isset($_SESSION['successRegister'])){
            echo "<div class='successMessage'>".$_SESSION['successRegister']."</div>";
            unset($_SESSION['successRegister']);
        }
    ?>

<!-- carousel -->



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
     <img class="d-block w-100" src="assets/img/slide/a1.jpg" alt="First slide ">
    </div>
    <div class="carousel-item">
      
       <img class="d-block w-100" src="assets/img/slide/b2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/slide/b3.jpg" alt="Third slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/slide/b4.jpg" alt="Third slide">
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


<!-- carousel close -->





     
       