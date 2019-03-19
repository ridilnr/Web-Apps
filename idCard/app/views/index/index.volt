<script src="js/html2canvas.js"></script>
<script src="js/jquery-3.2.1.min"></script>
<div data-spy="scroll" data-target="#main-navbar">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class='preloader'><div class='loaded'>&nbsp;</div></div>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar">Barcode</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img id="logo" src="assets/images/logo.png" alt="Logo de l'Université" onmouseover="LogoOver()" onmouseout="LogoOut()"/></a>
                <a class="navbar-brand" href="#" title="Voir les données de l'Université"><h2> UNIVERSITE AMERICAINE DE KINSHASA </h2></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="list-item1"><a href="#"><i class="fa fa-eye"></i></a>
                        <ul class="sub-list-item">
                            <li><img class="InfoBull-Title1" src="assets/images/Infobull_Img1.png"></li>
                        </ul>
                    </li>
                    <li class="list-item2"><a href="#toTop" target="_top"><i class="fa fa-arrow-up"></i></a>
                        <ul class="sub-list-item">
                            <li><img class="InfoBull-Title2" src="assets/images/Infobull_Img2.png"></li>
                        </ul>
                    </li>
                    <li class="list-item3"><a href="#contact" target="_self"><i class="fa fa-arrow-down"></i></a>
                        <ul class="sub-list-item">
                            <li><img class="InfoBull-Title3" src="assets/images/Infobull_Img3.png"></li>
                        </ul>
                    </li>
                    <li class="list-item4"><a class="linkAll"><i class="fa fa-tasks"></i></a>
                        <ul class="sub-list-item">
                            <li><img class="InfoBull-Title4" src="assets/images/Infobull_Img4.png"></li>
                        </ul>
                    </li>
                </ul>
                <!--<div class="InfoBull">
                    <img class="InfoBull-Title1" src="assets/images/title1_4.png">
                    <img class="InfoBull-Title2" src="assets/images/title1_3.png">
                    <img class="InfoBull-Title3" src="assets/images/title1_2.png">
                    <img class="InfoBull-Title4" src="assets/images/title1.png">
                </div>-->
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!--Home page style -->
    <header id="home" class="home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-content text-center">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2000">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="assets/images/diapo1.png">
                                </div>
                                <div class="item">
                                    <img src="assets/images/diapo2.png">
                                </div>
                                <div class="item">
                                    <img src="assets/images/diapo3.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="toTop"></div>
        </div>
    </header>
    <!-- Start body-->
    <header id="head-page" class="block-apart">
        <h2 class="row-apart-1">Compte</h2>
        <h2 class="row-apart-2">Données DBMS</h2>
        <h2 class="row-apart-3">Images Générées</h2>
        <h2 class="row-apart-4">Garder</h2>
    </header>
    <section id="corps">
        <div class="contain-all">
<?php
    $CountNum = 0;
    function printHtml($ULogo, $UNom, $EPhoto, $EFac, $EDepart, $ENumero, $ENom, $EPostnom, $EPrenom, $EClasse, $EDateNaiss, $ELieuNaiss, $num)
    {

        $randNum1 = rand(1000, 9999);
        $randNum2 = rand(10000, 99999);
        $randNum3 = rand(100000, 999999);
        $randNum4 = rand(1000000, 9999999);
        $adder = $num + 1;
        $Afficher = <<<HERE
        <div class="main1">
            <!-- First Column -->
            <div class="block0">
                <h2>$adder</h2>
            </div>
            <!-- Second Column -->
            <div id="$randNum4" class="borderClass block1">
                <div id="$randNum1">
                    <header class="row1">
                        <div class="row1-item1"><img src="$ULogo" alt="Logo Université"></div>
                        <div class="row1-item2">
                            <h1>$UNom</h1>
                            <h5>Let's level up congolese education</h5>
                        </div>
                        <div class="row1-item3"><img src="qrcode/qrcode_1710100001.png" alt="Qr Code"></div>
                    </header>
                    <aside class="row2">
                        <h3>CARTE D'ETUDIANT</h3>
                    </aside>
                    <footer class="row3">
                        <div class="row3-item1">
                            <img src="$EPhoto" alt="Photo Etudiant">
                        </div>
                        <div class="row3-item2">
                            <h4><span>Faculté de $EFac</span></h4>
                            <h5>Departement de $EDepart</h5>
                            <ul style="list-style-type: none">
                                <li><span>Noms : </span>$ENom $EPostnom $EPrenom</li>
                                <li><span>Promotion : </span>$EClasse</li>
                                <li><span>Date de Naissance : </span>$EDateNaiss</li>
                                <li><span>Lieu de Naissance : </span>$ELieuNaiss</li>
                                <li><span>Numero d'ordre : </span>$ENumero</li>
                            </ul>
                        </div>
                        <div class="row3-item3">
                            <img src="barcode/barcode_1710100001" alt="Barcode">
                        </div>
                    </footer>
                </div>
            </div>
            <!-- Third Column -->
            <div id="decorId" class="block2">
                <div id="$randNum2" >
                </div>
            </div>
            <!-- Last Column -->
            <div class="block3">
                <a id="$randNum3" class="download" href="#" download="$EPhoto" title="Telecharger"><i class="fa fa-download fa-4x"></i></a>
            </div>
        </div>
HERE;
        echo $Afficher;
        echo "<script>
            $(document).ready(function () {
                printAll($randNum1, $randNum2, $randNum3, $randNum4, $num);
            })
        </script>";
        }
        $Univ = Universite::findFirst();
        foreach($EtudInfo as $E)
        {
            printHtml($Univ->logo, $Univ->nom, $E->photo, $E->faculte, $E->departement, $E->numero, $E->nom, $E->postnom, $E->prenom, $E->nomclasse, $E->datenaissance, $E->lieunaissance, $CountNum++);
        }
        ?>
</div>
<aside id="button-all">
    <p><a class="linkAll" onmouseover="IconOver()" onmouseout="IconOut()" title="Tout Télécharger">Tout Télécharger <img id="icon" src="assets/images/download.png"></a></p>
</aside>
</section>
<!-- End body-->
<!--Footer-->
<footer id="contact" class="">
    <div class="container-fluid sections">
        <div class="copyright text-center">
            <p class="footer-para">Made with <i class="fa fa-heart"></i> by <a target="_blank" href="http://technoparcsystems.com/"> TECHNOPARK SYSTEMS </a>2016. All rights reserved.
            </p>
        </div>
    </div>
</footer>
</div>
<script>
    /* POINTEUR SUR LE LOGO ET L'ICONE DE TELECHARGEMENT*/
    function LogoOver() {
        var myLogo = document.getElementById('logo');
        myLogo.src = "assets/images/logo_hover.png";
    }
    function IconOver() {
        var icon = document.getElementById('icon');
        icon.src = "assets/images/download_2.png";
    }
    /* POINTEUR EN DEHORS DU LOGO ET L'ICONE DE TELECHARGEMENT*/
    function LogoOut() {
        var myLogo = document.getElementById('logo');
        myLogo.src = "assets/images/logo.png";
    }
    function IconOut() {
        var icon = document.getElementById('icon');
        icon.src = "assets/images/download.png";
    }
    /*
     IMPRESSION ALL AT A TIME
     */
    function printAll(Contenant, Conteneur, Telechargeur, changeIt, linkNum) {
        var getElem1 = document.getElementById(Contenant);
        var getElem2 = document.getElementById(Conteneur);
        $(document).ready(function () {
            var element = $(getElem1);
            var getCanvas;
            /* JOINT CANVAS A UN DIV ET L'ENREGISTRE COMME IMAGE APRES CLICK*/
            function sendMe() {
                html2canvas(element, {
                    onrendered : function (canvas) {
                        /* JOINT CANVAS AU DIV */
                        $(getElem2).append(canvas);
                        getCanvas = canvas;
                        /* ENREGISTRE CANVAS COMME IMAGE APRES CLICK */
                        var button = document.getElementById(Telechargeur);
                        button.addEventListener('click', function () {
                            var dataURL = canvas.toDataURL('image/png');
                            button.href = dataURL;
                        });
                    }
                });
                $(document).on("click", ".linkAll", function(){
                    $("a[title='Telecharger']").get(linkNum).click();
                });
            }
            sendMe();
            changeBackground(changeIt);
        });
    }
    /*CHANGE BACKGROUND DONNEES BRUTES*/
    function changeBackground(backDiv) {
        var getElem1bis = document.getElementById(backDiv);
        getElem1bis.style.backgroundColor = '#ffffff';
    }
    /*$(document).ready(function(){
        $("a").trigger("click");
    });*/
    /*
     IMPRESSION ONE BY ONE
     function recursiveFunc(main, preview) {
     $(document).ready(function () {
     var element = document.getElementById(main);
     var getCanvas;
     function sendMe() {
     html2canvas(element, {
     onrendered : function (canvas) {
     $(preview).append(canvas);
     getCanvas = canvas;
     }
     });
     }
     sendMe();
     });
     }*/
</script>
