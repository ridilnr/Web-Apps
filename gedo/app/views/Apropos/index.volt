<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
<!-- MENU RESEARCH, LOGIN,...   -->
<div id="top-bar" class="container">
    <div class="row">
        <div class="span5">
            <form method="POST" action="index/set_search" class="search_form searchBar">
                <input required="required" name="search" id="autocomp" type="text" class="input-block-level search-query"  list="list1">
                <input type="submit" value="Recherche">
            </form>
        </div>
        <datalist id="list1">
            <?php
                foreach($productList as $prod)
                echo "<option value='$prod->productname :: $prod->category'>";
            ?>
        </datalist>
        <div class="account pull-right col-md-offset-1">
            <ul class="user-menu">
                <li class="btnContainer"><a href="Cart"><span class="borderCart">Mon Panier &nbsp;</span>&nbsp;&nbsp;<span class="productNum rounded-circle">0</span></a></li><span class="borderList"></span>
                <li><img height="50" width="20" src="img/British_Flag.jpg" alt="En"></li>
            </ul>
        </div>
    </div>
</div>
<!--  MAIN CONTENT PAGE -->
<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a href="index" class="logo pull- idLogo">
                <img height="100" width="100" src="img//logo.jpg" class="site_logo img-rounded" alt="">
            </a>
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
    <!-- BODY TITLE-->
    <section class="header_text sub">
        <h4><span>A PROPOS DE GEDO COLLECTION</span></h4>
    </section>
    <!--  SUB CATEGORIES, FILTER, RANDOMIZE, PRODUCTS -->
    <section class="main-content">
        <!--  MAIN ROW -->
        <div class="row">
            <!--  SUB CATEGORIES -->
            <div class="col-md-3">
                <a><img src="img/logo.jpg"></a><hr>
                <a href="Men"><img src="img/gedo.jpg"></a>
            </div>
            <!-- TEXTE PRINCIPAL -->
            <div class="col-md-9">
                <h3 class="text-justify"><b>
                        GEDO collection est une marque lanc&eacute;e en 2017 et qui propose une gamme d'articles de mode divers comprenant : des costumes, des vestons, des cravates, des pochettes, des noeuds, des broches fleur pour veste, des soutiens-gorge adh&eacute;sifs.
                        Avec nos ensembles costumes trois pi&egrave;ces et nos blazers &agrave; base de soie, de viscose et de polyester pour des tailles allant de 44 &agrave; 54, &agrave; assortir avec des accessoires multiples (cravates panach&eacute;es et unies, noeuds &agrave; imprim&eacute; floral et monochrome, broches fleur pour veste), nous vous lan&ccedil;ons une invitation &agrave; red&eacute;finir votre style en optant pour une tenue soign&eacute;e, d&eacute;cente et audacieuse &agrave; la fois, en harmonie avec votre personnalit&eacute;, afin de mettre en valeur votre charme en lieu de travail et lors d'&eacute;v&eacute;nements divers.
                        Notre mission est de construire une marque avec une identit&eacute; forte et authentique et dont les produits sont l'incarnation de la fusion entre la beaut&eacute; de la nature et les bienfaits des techniques modernes et artisanales.
                        GEDO Collection est une marque dot&eacute;e d'une forte politique de responsabilit&eacute; sociale.
                        Nous incluons, dans le processus de fabrication de nos produits, la main doeuvre des artisans Chypriotes et Turques (exclusivement dans la r&eacute;alisation des noeuds papillons et des broches fleur) afin de promouvoir le savoir-faire artisanal.
                        En outre, notre engagement social transparait &eacute;galement dans un programme d'assistance mis en place par notre &eacute;quipe et qui consiste &agrave; venir en aide aux femmes victimes des viols et autres atrocit&eacute;s ainsi qu'aux orphelins et aux enfants non-scolaris&eacute;s de la partie Est de la R&eacute;publique D&eacute;mocratique du Congo, plus exactement &agrave; Goma et &agrave; Beni.
                    </b>
                </h3>
            </div>
        </div>
    </section>
</div>
<script src="themes/js/common.js"></script>
<script src="themes/js/myScript.js"></script>
<script type="text/javascript">
    var myPid = [], myBar = [], myPro = [], myCat = [], mySub = [], myPri = [], myDis = [], mySty = [], myBra = [], myQty = [], myImg = [];
    var itemMenu = [], linkItem = "";

    setVariable();
    menuEvent(itemMenu, linkItem);

    function setVariable() {
        myPid[0] = '<?php echo $ppid[0];  ?>' ; myPid[1] = '<?php echo $ppid[1];  ?>' ; myPid[2] = '<?php echo $ppid[2];  ?>' ;
        myPid[3] = '<?php echo $ppid[3];  ?>' ; myPid[4] = '<?php echo $ppid[4];  ?>' ; myPid[5] = '<?php echo $ppid[5];  ?>' ;
        myPid[6] = '<?php echo $ppid[6];  ?>' ; myPid[7] = '<?php echo $ppid[7];  ?>' ; myPid[8] = '<?php echo $ppid[8];  ?>' ;

        myBar[0] = '<?php echo $pbar[0];  ?>' ; myBar[1] = '<?php echo $pbar[1];  ?>' ; myBar[2] = '<?php echo $pbar[2];  ?>' ;
        myBar[3] = '<?php echo $pbar[3];  ?>' ; myBar[4] = '<?php echo $pbar[4];  ?>' ; myBar[5] = '<?php echo $pbar[5];  ?>' ;
        myBar[6] = '<?php echo $pbar[6];  ?>' ; myBar[7] = '<?php echo $pbar[7];  ?>' ; myBar[8] = '<?php echo $pbar[8];  ?>' ;

        myPro[0] = '<?php echo $ppro[0];  ?>' ; myPro[1] = '<?php echo $ppro[1];  ?>' ; myPro[2] = '<?php echo $ppro[2];  ?>' ;
        myPro[3] = '<?php echo $ppro[3];  ?>' ; myPro[4] = '<?php echo $ppro[4];  ?>' ; myPro[5] = '<?php echo $ppro[5];  ?>' ;
        myPro[6] = '<?php echo $ppro[6];  ?>' ; myPro[7] = '<?php echo $ppro[7];  ?>' ; myPro[8] = '<?php echo $ppro[8];  ?>' ;

        myCat[0] = '<?php echo $pcat[0];  ?>' ; myCat[1] = '<?php echo $pcat[1];  ?>' ; myCat[2] = '<?php echo $pcat[2];  ?>' ;
        myCat[3] = '<?php echo $pcat[3];  ?>' ; myCat[4] = '<?php echo $pcat[4];  ?>' ; myCat[5] = '<?php echo $pcat[5];  ?>' ;
        myCat[6] = '<?php echo $pcat[6];  ?>' ; myCat[7] = '<?php echo $pcat[7];  ?>' ; myCat[8] = '<?php echo $pcat[8];  ?>' ;

        mySub[0] = '<?php echo $psub[0];  ?>' ; mySub[1] = '<?php echo $psub[1];  ?>' ; mySub[2] = '<?php echo $psub[2];  ?>' ;
        mySub[3] = '<?php echo $psub[3];  ?>' ; mySub[4] = '<?php echo $psub[4];  ?>' ; mySub[5] = '<?php echo $psub[5];  ?>' ;
        mySub[6] = '<?php echo $psub[6];  ?>' ; mySub[7] = '<?php echo $psub[7];  ?>' ; mySub[8] = '<?php echo $psub[8];  ?>' ;

        myPri[0] = '<?php echo $ppri[0];  ?>' ; myPri[1] = '<?php echo $ppri[1];  ?>' ; myPri[2] = '<?php echo $ppri[2];  ?>' ;
        myPri[3] = '<?php echo $ppri[3];  ?>' ; myPri[4] = '<?php echo $ppri[4];  ?>' ; myPri[5] = '<?php echo $ppri[5];  ?>' ;
        myPri[6] = '<?php echo $ppri[6];  ?>' ; myPri[7] = '<?php echo $ppri[7];  ?>' ; myPri[8] = '<?php echo $ppri[8];  ?>' ;

        myDis[0] = '<?php echo $pdis[0];  ?>' ; myDis[1] = '<?php echo $pdis[1];  ?>' ; myDis[2] = '<?php echo $pdis[2];  ?>' ;
        myDis[3] = '<?php echo $pdis[3];  ?>' ; myDis[4] = '<?php echo $pdis[4];  ?>' ; myDis[5] = '<?php echo $pdis[5];  ?>' ;
        myDis[6] = '<?php echo $pdis[6];  ?>' ; myDis[7] = '<?php echo $pdis[7];  ?>' ; myDis[8] = '<?php echo $pdis[8];  ?>' ;

        mySty[0] = '<?php echo $psty[0];  ?>' ; mySty[1] = '<?php echo $psty[1];  ?>' ; mySty[2] = '<?php echo $psty[2];  ?>' ;
        mySty[3] = '<?php echo $psty[3];  ?>' ; mySty[4] = '<?php echo $psty[4];  ?>' ; mySty[5] = '<?php echo $psty[5];  ?>' ;
        mySty[6] = '<?php echo $psty[6];  ?>' ; mySty[7] = '<?php echo $psty[7];  ?>' ; mySty[8] = '<?php echo $psty[8];  ?>' ;

        myBra[0] = '<?php echo $pbra[0];  ?>' ; myBra[1] = '<?php echo $pbra[1];  ?>' ; myBra[2] = '<?php echo $pbra[2];  ?>' ;
        myBra[3] = '<?php echo $pbra[3];  ?>' ; myBra[4] = '<?php echo $pbra[4];  ?>' ; myBra[5] = '<?php echo $pbra[5];  ?>' ;
        myBra[6] = '<?php echo $pbra[6];  ?>' ; myBra[7] = '<?php echo $pbra[7];  ?>' ; myBra[8] = '<?php echo $pbra[8];  ?>' ;

        myQty[0] = '<?php echo $pqty[0];  ?>' ; myQty[1] = '<?php echo $pqty[1];  ?>' ; myQty[2] = '<?php echo $pqty[2];  ?>' ;
        myQty[3] = '<?php echo $pqty[3];  ?>' ; myQty[4] = '<?php echo $pqty[4];  ?>' ; myQty[5] = '<?php echo $pqty[5];  ?>' ;
        myQty[6] = '<?php echo $pqty[6];  ?>' ; myQty[7] = '<?php echo $pqty[7];  ?>' ; myQty[8] = '<?php echo $pqty[8];  ?>' ;

        myImg[0] = '<?php echo $pimg[0];  ?>' ; myImg[1] = '<?php echo $pimg[1];  ?>' ; myImg[2] = '<?php echo $pimg[2];  ?>' ;
        myImg[3] = '<?php echo $pimg[3];  ?>' ; myImg[4] = '<?php echo $pimg[4];  ?>' ; myImg[5] = '<?php echo $pimg[5];  ?>' ;
        myImg[6] = '<?php echo $pimg[6];  ?>' ; myImg[7] = '<?php echo $pimg[7];  ?>' ; myImg[8] = '<?php echo $pimg[8];  ?>' ;
    }
</script>
</body>
</html>