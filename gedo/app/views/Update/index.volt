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
    <title>GEDO/Register</title>
</head>
<body>
<div id="top-bar" class="container">
    <div class="row">
        <div class="span4">
            <form method="POST" class="search_form searchBar">
                <input type="text" class="input-block-level search-query" >
                <input type="submit" class="btnContainer" value="Search">
            </form>
        </div>
        <div class="account pull-right">
            <ul class="user-menu">
                <?php
                        if ($this->session->has('userEmail') and $this->session->has('userName'))
                {
                $userName = $this->session->get('userName');
                echo '<li id="accountMenu"><span class="connectSymbol"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;&nbsp;'.$userName.'&nbsp; <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></span>';
                    echo '<ul id="accountSubMenu">';
                        echo '<li><a href="#"><span>Modifier Mon Compte</span>&nbsp; <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></li>';
                        echo '<li><a href="Register/logout"><span>&nbsp;&nbsp;DECONNEXION</span>&nbsp;&nbsp; <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="btnContainer"><a href="Cart"><span class="borderCart">Mon Panier &nbsp;</span>&nbsp;&nbsp;<span class="productNum rounded-circle">0</span></a></li>';
                }
                else{
                    echo '<li class="btnContainer"><a href="Cart"><span class="borderCart">Mon Panier &nbsp;</span>&nbsp;&nbsp;<span class="productNum rounded-circle">0</span></a></li>';
                    echo '<li class="btnContainer"><a href="Register">CONNEXION | CREER UN COMPTE</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a id="idLogo" href="index" class="logo pull-left"><img height="100" width="100" src="img/logo.jpg" class="site_logo img-rounded" alt=""></a>
            <nav id="menu" class="pull-right">
                <ul class="categoryMenu">
                    <li><a href="Apropos">A PROPOS</a></li>
                    <li><a href="Men">COSTUMES HOMMES</a></li>
                    <li><a href="Women">COSTUMES FEMMES</a></li>
                    <li><a href="Accessories">ACCESSOIRES</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <span class="alertField">{{ flash.output() }}</span>
        </div>
    </section>
    <section class="main-content">
        <div class="row rowForm">
            <div class="span"></div>
            <div class="span8">
                <h4 class="title"><span class="text">Modifier Mes Informations</span></h4>
                <hr>
                <form id="form1" action="{{ url('Update/update') }}" onsubmit="submitForm(this)" method="post" class="form-stacked">
                    <div class="flex-container flexContainerUpdate">
                        <fieldset class="group1">
                            <div class="control-group control-group-update">
                                <label for="fullName" class="control-label">Nom Complet:</label>
                                <div class="controls controls-update">
                                    <div class="divInput">
                                        <input id="fullName" name="fullName" pattern="[A-Za-z]" type="text" placeholder="{{ userName }}" class="input-xlarge changeState" disabled>
                                    </div>
                                    <div class="span1 editButton">
                                        <button class="buttonInput" onclick="changeStateInput(this)" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="emailAddress" class="control-label">Adresse Email:</label>
                                <div class="controls">
                                    <div class="divInput">
                                        <input id="emailAddress" name="emailAddress" type="email" placeholder="{{ userEmail }}" class="input-xlarge changeState" disabled>
                                    </div>
                                    <div class="span1 editButton">
                                        <button class="buttonInput" onclick="changeStateInput(this)" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="passwordField1" class="control-label">Mot de passe:</label>
                                <div class="controls">
                                    <div class="divInput">
                                        <input id="passwordField1" name="passwordField1" pattern="[A-Za-z0-9]{8,}" type="password" placeholder="{{ userPassword }}" class="input-xlarge changeState" disabled>
                                    </div>
                                    <div class="span1 editButton">
                                        <button class="buttonInput" onclick="changeStateInput(this)" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="group2">
                            <div class="control-group">
                                <label for="mobilePhone" class="control-label">Phone:</label>
                                <div class="controls">
                                    <div class="divInput">
                                        <input id="mobilePhone" name="mobilePhone" pattern="[0-9]{11}" type="tel" placeholder="{{ userPhone }}" class="input-xlarge changeState" disabled>
                                    </div>
                                    <div class="span1 editButton">
                                        <button class="buttonInput3" onclick="changeStateInput(this)" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="address" class="control-label">Adresse Physique:</label>
                                <div class="controls">
                                    <div class="divInput">
                                        <input id="address" name="address" type="text" placeholder="{{ userAddress }}" class="input-xlarge changeState" disabled>
                                    </div>
                                    <div class="span1 editButton">
                                        <button class="buttonInput4" onclick="changeStateInput(this)" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="city" class="control-label">Ville:</label>
                                <div class="controls">
                                    <div class="divInput">
                                        <input type="text" name="city" placeholder="{{ userCity }}" class="input-xlarge changeState" disabled>
                                    </div>
                                    <div class="span1 editButton">
                                        <button class="buttonInput" onclick="changeStateInput(this)" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <hr>
                    <div class="actions" id="containerSubForm">
                        <input tabindex="10" class="btn btn-inverse large" type="submit" value="Sauvegarder">
                    </div>
                </form>
            </div>
            <div class="span2">
                <form id="form2" action="{{ url('Update/delete') }}" onsubmit="submitForm(this)" method="post">
                    <input class="btn btn-inverse large" type="submit" value="Suprimer Mon Compte">
                </form>
            </div>
        </div>
    </section>
</div>
<script src="themes/js/common.js"></script>
<script src="themes/js/myScript.js"></script>
<script type="text/javascript">
    var itemMenu = [], linkItem = "";
    var divInputElem;
    divInputElem = document.querySelectorAll('.changeState');

    function changeStateInput(myButton){
        myButton.parentNode.previousElementSibling.firstElementChild.removeAttribute('disabled');
        //myButton.parentNode.previousElementSibling.firstElementChild.removeAttribute('placeholder');
    }
    checkForm();
    function checkForm() {
        var myBool = "false";
        for(var i = 0; i < divInputElem.length; i++){
            if((divInputElem[i].hasAttribute("disabled")) && (divInputElem[i].getAttribute("placeholder") === "")){
                myBool = "true";
            }
        }
        if(myBool === "true")
            document.querySelector(".main-content").innerHTML = "<h3 class='text-center'><span class='alert alert-warning'>" +
                                                                "Oups! Sorry, VOUS DEVEZ ETRE CONNECTE POUR ACCEDER A CETTE PAGE</span>" +
                                                                "<br><br><a href='Register'><span class='alert-info'>CREER UN COMPTE</span></a></h3>";

    }

    function submitForm(myForm) {
        for(var i = 0; i < divInputElem.length; i++){
            if(divInputElem[i].hasAttribute("disabled")){
                divInputElem[i].removeAttribute("disabled");
                divInputElem[i].value = divInputElem[i].getAttribute("placeholder");
            }
        }
        myForm.submit();
    }
    menuEvent(itemMenu, linkItem);
    $(document).ready(function() {
        $('#checkout').click(function (e) {
            document.location.href = "checkout";
        })
    });
</script>
</body>
</html>