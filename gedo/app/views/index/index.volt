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
    <link href="themes/css/jquery.fancybox.min.css" rel="stylesheet"/>
    <!-- global styles -->
    <link href="themes/css/flexslider.css" rel="stylesheet"/>
    <link href="/css/main.css" rel="stylesheet"/>
    <!-- scripts -->
    <script src="themes/js/jquery-1.7.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="themes/js/superfish.js"></script>
    <script src="themes/js/jquery.scrolltotop.js"></script>
    <script src="themes/js/jquery.fancybox.min.js"></script>
    <script src="themes/js/jquery.elevatezoom.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="apple-touch-icon" href="themes/images/favicon/apple-touch-icon.png" >
</head>
<body>
<!-- MENU RESEARCH, LOGIN,...   -->
<div id="top-bar" class="container">
    <div class="row">
        <div class="span5">
            <form method="POST" action="index/set_search" class="search_form searchBar">
                <input required="required" name="search" id="autocomp" type="text" class="input-block-level search-query" list="list1">
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
            <a href="index" class="logo pull-left idLogo"><img height="100" width="100" src="img/logo.jpg" class="site_logo img-rounded" alt=""></a>
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
    <!-- CAROUSSEL-->
    <section  class="homepage-slider" id="home-slider">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img width="500" height="100" src="homeslides/1.jpg" alt=""/>
                </li>
                <div class="intro">
                    <h1>BIENTOT LES COSTUMES POUR FEMME SUR LE MARCHE</h1>
                </div>
                <li>
                    <img width="500" height="100" src="homeslides/2.jpg" alt=""/>
                    <div class="intro">
                        <h1>GEDO COLLECTION OFFRE DES COSTUMES ET DES ACCESSOIRES DE HAUTE QUALITE</h1>
                        <p><span>AVEC UNE LIVRAISON A DOMICILE</span></p>
                        <p><span>PASSEZ VOTRE COMMANDE</span></p>
                    </div>
                </li>
                <li>
                    <img width="500" height="100" src="homeslides/3.jpg" alt=""/>
                    <div class="intro">
                        <h1>OBTENIR PLUSIEURS INFORMATIONS CONCERNANT LES PRODUITS GEDO</h1>
                        <p><span>AVEC UNE LIVRAISON A DOMICILE</span></p>
                        <p><a href="Apropos"><button class="btn btn-info btn-lg active">PLUS D'INFOS</button></a></p>
                    </div>
                </li>
                <li>
                    <img width="500" height="100" src="homeslides/4.jpg" alt=""/>
                    <div class="intro">
                        <h1>OBTENIR PLUSIEURS INFORMATIONS CONCERNANT LES PRODUITS GEDO</h1>
                        <p><span>AVEC UNE LIVRAISON A DOMICILE</span></p>
                        <p><a href="Apropos"><button class="btn btn-info btn-lg active">PLUS D'INFOS</button></a></p>
                    </div>
                </li>
                <li>
                    <img width="500" height="100" src="homeslides/5.jpg" alt=""/>
                    <div class="intro">
                        <h1>OBTENIR PLUSIEURS INFORMATIONS CONCERNANT LES PRODUITS GEDO</h1>
                        <p><span>AVEC UNE LIVRAISON A DOMICILE</span></p>
                        <p><a href="Apropos"><button class="btn btn-info btn-lg active">PLUS D'INFOS</button></a></p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <center>
        <h2 class="text-uppercase">GEDO COLLECTION OFFRE DES COSTUMES ET DES ACCESSOIRES DE HAUTE QUALITE</h2>
    </center>
    <!-- PRODUCTS IMAGES -->
    <section class="main-content center">
        <div class="row">
            <a href="Men"><img class="img-rounded" height="350" width="350" src="img/homme1.jpg"></a>
            <a href="Accessories"><img class="img-rounded" height="350" width="350" src="img/acc.jpg"></a>
            <a href="Men"><img class="img-rounded" height="350" width="350" src="img/homme2.jpg"></a>
        </div><br>
        <center>
        <div class="row pull-right">
            <div class="active item">
                <ul class="thumbnails">
                    <?php
                        $ppid = $pbar = $ppro = $pcat = $psub = $ppri = $pdis = $psty = $pbra = $pqty = $pimg = array(" ", " ", " ", " ", " ", " ", " ", " ", " ") ;
                        $x = 0;
                        foreach ($productInfo as $product){
                            $ppid[$x] = $product->pid;
                            $pbar[$x] = $product->barcode; $ppro[$x] = $product->productcode; $pcat[$x] = $product->category;
                            $psub[$x] = $product->subcat; $ppri[$x] = $product->price; $pdis[$x] = $product->discount;
                            $psty[$x] = $product->style; $pbra[$x] = $product->brand; $pqty[$x] = $product->qty;
                            $pimg[$x++] = $product->image;
                            $afficher = <<<Here
                            <li class="span3">
                                <div class="product-box">
                                    <span class="sale_tag"></span>
                                    <a href="ProductDetail">
                                        <img id="$product->pid" class="womenProduct" onclick="getImageLink(this)" alt="" style="width: 342px; height: 250px" src="$product->image">
                                    </a>
                                    <br/>
                                    <a id="a1Get" href="ProductDetail" onclick="getImageLink(this.parentNode.firstElementChild.nextElementSibling.firstElementChild)" class="title">$product->brand Product</a><br/>
                                    <a id="a2Get" href="ProductDetail" onclick="getImageLink(this.parentNode.firstElementChild.nextElementSibling.firstElementChild)" class="category">From $product->category</a>
                                    <p class="price">$$product->price</p>
                                </div>
                            </li>
Here;
                            print $afficher;
                        }
                    ?>
                </ul>
            </div>
        </div>
        </center>
        <div class="row center">
            <div class="row feature_box">
                <div class="span4">
                    <div class="service">
                        <div class="responsive">
                            <img src="img/noeu.jpg" height="250" width="250" alt="" />
                            <h4>PLUSIEURS <strong>OPTIONS</strong></h4>
                            <p>Devenez notre partenaire et revendeur officiel de GEDO.</p>
                        </div>
                    </div>
                </div>
                <div class="span3">
                    <div class="service">
                        <div class="customize">
                            <img src="img/gedo2.jpg" height="350" width="350" alt="" />
                            <h4>LIVRAISON <strong>GRATUITE</strong></h4>
                            <p>Pas besoin de payer les frais de transport. Commandez et recevez chez vous</p>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="service">
                        <div class="support">
                            <img src="img/cravate.jpg" height="350" width="350" alt="" />
                            <h4>DEUX SEMAINES <strong>D'ATTENTE SEULEMENT</strong></h4>
                            <p>Deux semaines maximum pour recevoir votre produit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
<script src="themes/js/myScript.js"></script>
<script type="text/javascript">
    var myPid = [], myBar = [], myPro = [], myCat = [], mySub = [], myPri = [], myDis = [], mySty = [], myBra = [], myQty = [], myImg = [];
    var itemMenu = [], linkItem = "";
	
    $(function() {
        $(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "fade",
                slideshowSpeed: 4000,
                animationSpeed: 600,
                controlNav: false,
                directionNav: true,
                controlsContainer: ".flex-container" // the container that holds the flexslider
            });
        });
    });
	
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