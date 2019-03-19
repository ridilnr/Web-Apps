<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="themes/css/bootstrappage.css" rel="stylesheet"/>
    <!-- global styles -->
    <link href="themes/css/flexslider.css" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet"/>
    <!-- scripts -->
    <script src="themes/js/jquery-1.7.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="themes/js/superfish.js"></script>
    <script src="themes/js/jquery.scrolltotop.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <title>GEDO/PAIEMENT</title>
</head>
<body>
<div id="top-bar" class="container">
    <div class="row">
        <div class="span5">
            <form method="POST" class="search_form searchBar">
                <input type="text" class="input-block-level search-query" >
                <input type="submit" class="btnContainer" value="Search">
            </form>
        </div>
        <div class="account pull-right col-md-offset-1">
            <ul class="user-menu">
                <?php
                        if ($this->session->has('userEmail') and $this->session->has('userName'))
                {
                $userName = $this->session->get('userName');
                echo '<li id="accountMenu"><span class="connectSymbol"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;&nbsp;'.$userName.'&nbsp; <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></span>';
                    echo '<ul id="accountSubMenu">';
                        echo '<li><a href="Update"><span>Modifier Mon Compte</span>&nbsp; <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></li>';
                        echo '<li><a href="Register/logout"><span>&nbsp;&nbsp;DECONNEXION</span>&nbsp;&nbsp; <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>';
                        echo '</ul>';
                    echo '</li>';
                echo '<li class="btnContainer"><a href="Cart"><span class="borderCart">Mon Panier &nbsp;</span>&nbsp;&nbsp;<span class="productNum rounded-circle">0</span></a></li>';
                }
                else{
                    echo '<li class="btnContainer"><a href="Cart"><span class="borderCart">Mon Panier &nbsp;</span>&nbsp;&nbsp;<span class="productNum rounded-circle">0</span></a></li>';
                    echo '<li class="btnContainer"><a href="Register">CONNEXION | CREATION COMPTE</a></li>';
                }
                ?>
                <li><img height="50" width="20" src="img/British_Flag.jpg" alt="En"></li>
            </ul>
        </div>
    </div>
</div>
<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a  id="idLogo" href="index" class="logo pull-left"><img height="100" width="100" src="img/logo.jpg" class="site_logo img-rounded" alt=""></a>
            <nav id="menu" class="pull-right">
                <ul class="categoryMenu">
                    <li><a href="Apropos">A PROPOS</a></li>
                    <li><a href="Men">COSTUMES HOMMES</a></li>
                    <li><a href="Women">COSTUMES FEMMES</a></li>
                    <li><a href="Accessories">ACCESSOIRES</a></li>
                </ul>
            </nav>
        </div>
    </section>
    <section class="header_text sub">
        <h4><span>Commander et quitter</span></h4>
        <div>
            <span class="alertField">{{ flash.output() }}</span>
        </div>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span10">
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#">CREATION DE COMPTE OU CONNEXION</a>
                        </div>
                        <div id="collapseOne" class="accordion-body in collapse">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <h4>Nouveau Client</h4>
                                        <p>En cr&eacute;ant votre compte, vous serrez en mesure de faire du shopping avec les r&eacute;ductions que nous offrons et de confirmer votre commande.</p>
                                        <form action="{{ url('Register') }}" method="post">
                                            <fieldset>
                                                <label class="radio" for="register">
                                                    <input type="radio" name="accountValue" value="register" id="register" checked>CREATION DE COMPTE OU CONNEXION AVANT DE COMMANDER
                                                </label>
                                                <br>
                                                <input type="submit" class="btn btn-primary" value="CREER UN NOUVEAU COMPTE OU SE CONNECTER">
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="span6">
                                        <h4>CONFIRMATION DE LA COMMANDE</h4>
                                        <p>Veuillez cliquer sur Confirmer Ma Commande</p>

                                        <form id="confirmOrder" action="{{ url('Checkout/confirm11') }}"  method="post" enctype="multipart/form-data">
                                            <fieldset>
                                                <input id="confirmButton" type="submit" class="btn btn-primary active" value="Confirmer Ma commande">
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="themes/js/common.js"></script>
<script src="themes/js/myScript.js"></script>
<script>
    $(document).ready(function () {
        var myCartArray = getterSession(myNewCartArray, "shoppingCart");
        document.cookie = "fakeCart = ; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
        $("#confirmOrder").submit(function () {
            document.cookie = "fakeCart = " + JSON.stringify(myCartArray);
        });
    });
</script>
<script type="text/javascript">
    var itemMenu = [], linkItem = "";
    menuEvent(itemMenu, linkItem);
    /*var confirmOrder = document.getElementById("confirmButton");
    confirmOrder.submit()=function () {
        alert("You hein!");
    }*/
</script>
</body>
</html>