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
</head>
<body>
<div id="top-bar" class="container">
    <div class="row">
        <div class="span4">
            <form method="POST" class="search_form searchBar">
                <input required="required" type="text" class="input-block-level search-query" >
                <input type="submit" class="btnContainer" value="Recherche">
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
                </ul>
            </div>
    </div>
</div>
<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a id="idLogo" href="index" class="logo pull-left"><img width="100" height="100" src="img/logo.jpg" class="site_logo img-rounded" alt=""></a>
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
    <section class="main-content">
        <div class="row">
            {{ flash.output() }}
            <div class="span"></div>
            <div class="span4">
                <h4 class="title"><span class="text">SE CONNECTER</span></h4>
                <form action="{{ url('Register/login') }}" method="post">
                    <fieldset>
                        <div class="control-group">
                            <label for="userEmail" class="control-label">Email Address</label>
                            <div class="controls">
                                <input type="email" placeholder="Enter your email address" name="userEmail" id="userEmail" class="input-xlarge" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="passwordField2" class="control-label">Password</label>
                            <div class="controls">
                                <input name="passwordField2" id="passwordField2"  type="password" placeholder="Enter your password" class="input-xlarge" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <input tabindex="3" class="btn btn-primary large" type="submit" value="connexion">
                            <hr>
                            <p class="reset">
                                <a class="bg-primary" tabindex="4" href="#" title="Recover your username or password">Mot de passe oubli&eacute;?</a>
                            </p>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="span6">
                <h4 class="title"><span class="text">CREER UN COMPTE</span></h4>
                <form action="{{ url('Register/sign') }}" method="post" class="form-stacked">
                    <div class="flex-container">
                        <fieldset class="group1">
                            <div class="control-group">
                                <label for="fullName" class="control-label">Nom Complet:</label>
                                <div class="controls">
                                    <input id="fullName" name="fullName" type="text" placeholder="Enter your username" class="input-xlarge" required>
                                </div>
                                <span class="example">EX: Gedeon Otshudi</span>
                            </div>
                            <div class="control-group">
                                <label for="emailAddress" class="control-label">Adresse Email:</label>
                                <div class="controls">
                                    <input id="emailAddress" name="emailAddress" type="email" placeholder="Enter your email" class="input-xlarge" required>
                                </div>
                                <span class="example">Ex: gedeon@gmail.com</span>
                            </div>
                            <div class="control-group">
                                <label for="passwordField1" class="control-label">Mot de passe:</label>
                                <div class="controls">
                                    <input id="passwordField1" name="passwordField1" pattern="[A-Za-z0-9]{8,}" type="password" placeholder="Enter your password" class="input-xlarge" required>
                                </div>
                                <span class="example">Ex: tamam0017, 001tamam, ta001mami</span><br>
                                <span class="example"><strong>N.B: Entrer au moins 8 charact<b>&egrave;</b>res (chiffres et lettres)</strong></span>
                            </div>
                        </fieldset>
                        <fieldset class="group2">
                            <div class="control-group">
                                <label for="mobilePhone" class="control-label">Phone:</label>
                                <div class="controls">
                                    <input id="mobilePhone" name="mobilePhone" pattern="[0-9]{10}" type="tel" placeholder="Enter your mobile phone number" class="input-xlarge" required>
                                </div>
                                <span class="example">E.g: 5488235777 ou 0813330826 (Entrer 10 digits)</span>
                            </div>
                            <div class="control-group">
                                <label for="address" class="control-label">Adresse Physique:</label>
                                <div class="controls">
                                    <input id="address" name="address" type="text" placeholder="Enter your residence address" class="input-xlarge" required>
                                </div>
                                <span class="example">E.x: Avenue Joyce, No 5, Apt 10</span>
                            </div>
                            <div class="control-group">
                                <label for="country" class="control-label">Pays:</label>
                                <div class="controls">
                                    <select id="country" name="country" required>
                                        <option value="DR Congo">DR Congo</option>
                                        <option value="Chypre Nord">Chypre Nord</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="city" class="control-label">Ville:</label>
                                <div class="controls">
                                    <select id="city" name="city" required>
                                        <option value="kinshasa">Kinshasa</option>
                                        <option value="lubumbashi">Lubumbashi</option>
                                        <option value="lefkosa">Lefko&scedil;a</option>
                                        <option value="magusa">Ma&gbreve;usa</option>
                                        <option value="girne">Girne </option>
                                        <option value="guzelyurt">Güzelyurt</option>
                                        <option value="iskele">&Idot;skele</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="control-group">
                        <p>CREER UN COMPTE ET RECEVOIR UNE REDUCTION?</p>
                    </div>
                    <hr>
                    <div class="actions">
                        <input tabindex="9" class="btn btn-primary large" type="submit" value="CREER MON COMPTE">
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<script src="themes/js/common.js"></script>
<script src="themes/js/myScript.js"></script>
<script type="text/javascript">

    var itemMenu = [], linkItem = "";

    menuEvent(itemMenu, linkItem);

    $(document).ready(function() {
        $('#checkout').click(function (e) {
            document.location.href = "checkout";
        })
    });
</script>
</body>
</html>