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
                            echo '<li><a href="Update"><span>Modifier Mon Compte</span>&nbsp; <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></li>';
                            echo '<li><a href="Register/logout"><span>&nbsp;&nbsp;DECONNEXION</span>&nbsp;&nbsp; <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>';
                            echo '</ul>';
                        echo '</li>';
                    echo '<li class="btnContainer"><a href="Cart"><span class="borderCart">Mon Panier &nbsp;</span>&nbsp;&nbsp;<span class="productNum rounded-circle">0</span></a></li>';
                    }
                    else{
                        echo '<li class="btnContainer"><a href="Cart"><span class="borderCart">Mon Panier &nbsp;</span>&nbsp;&nbsp;<span class="productNum rounded-circle">0</span></a></li>';
                        echo '<li class="btnContainer"><a href="Register">Connexion | Nouveau Compte</a></li>';
                    }
                    ?>
                </ul>
            </div>
    </div>
</div>
<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a href="index" class="logo pull-left idLogo"><img width="100" height="100" src="img//logo.jpg" class="site_logo img-rounded" alt=""></a>
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
        <h4><span>Liste de mes produits</span></h4>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span10">
                <h4 class="title"><span class="text">Mon Panier</span></h4>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>SUPRIMER</th>
                        <th>IMAGE</th>
                        <th>NOM</th>
                        <th>QUANTITE</th>
                        <th>PRIX UNITAIRE</th>
                        <th>PRIX TOTAL</th>
                    </tr>
                    </thead>
                    <tbody id="boardBody">

                    </tbody>
                </table>
                <h4>Confirmer votre commande ou continuer votre shopping?</h4>
                <p>Vous devez cr&eacute;er un compte avec vos informations personnelles pour recevoir vos produits &agrave; domicile.</p>
                <!--<label class="radio">
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                </label>
                <label class="radio">
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                </label>-->
                <hr>
                <p class="cart-total right">
                    <strong>Sub-Total</strong>:	$ <span class="subTotalProduct"></span><br>
                    <strong>Eco Tax (0.0%)</strong>: $ <span class="ecoTaxPercentage"></span><br>
                    <strong>TVA (0.0%)</strong>: $ <span class="vatPercentage"></span><br>
                    <strong>Total</strong>: $ <span class="totalProduct"></span><br>
                </p>
                <hr/>
                <p class="buttons center">
                    <a id="btnContinue" class="btn btn-danger">Continuer Mon Shopping</a>
                    <a id="btnCheckout" class="btn btn-primary">Confirmer Ma Commande</a>
                </p>
            </div>
        </div>
    </section>
</div>
<script src="themes/js/common.js"></script>
<script src="themes/js/myScript.js"></script>
<script>
   var bodyOfContent, myCartArray;
   var subTotal = 0;
   var itemMenu = [], linkItem = "";
   //var ecoTax, vat ;
   //ecoTax = parseFloat(document.querySelector(".ecoTaxPercentage").innerHTML) / 100;
   //vat = parseFloat(document.querySelector(".vatPercentage").innerHTML) / 100;
   //totalField = document.querySelector(".totalProduct");
   bodyOfContent = document.querySelector("#boardBody");
   $(document).ready(function() {
        var myLink;
         $('#btnCheckout').click(function (e) {
             location.href = "Checkout";
         });
         $('#btnContinue').click(function (e) {
             if(sessionStorage.shoppingPage===undefined)
             {
                 location.href = "index";
             }
             else
             {
                 location.href = getterSession(myLink, "shoppingPage");
             }
        });
		showShoppingCart();
    });

   menuEvent(itemMenu, linkItem);

    function resultTotPrice() {
        document.querySelector(".subTotalProduct").innerHTML = "" + subTotal.toFixed(2);
        document.querySelector(".totalProduct").innerHTML = document.querySelector(".subTotalProduct").innerHTML;
    }

    function showShoppingCart() {
        var row, column1, column2, column3, column4, column5, column6, buttonElem,
            imageElem, anchorElem, inputBox, spanField1, spanField2;
        if(checkShoppingCart()==="false"){
            myCartArray = getterSession(myNewCartArray, "shoppingCart");
            for(var i=0; i < myCartArray.length; i++){
                subTotal += + parseFloat(myCartArray[i].priceTotal);
                row = document.createElement("tr"); column1 = document.createElement("td");
                column2 = document.createElement("td"); column3 = document.createElement("td");
                column4 = document.createElement("td"); column5 = document.createElement("td");
                column6 = document.createElement("td"); buttonElem = document.createElement("button");
                imageElem = document.createElement("img"); anchorElem = document.createElement("a");
                inputBox = document.createElement("input"); spanField1 = document.createElement("span");
                spanField2 = document.createElement("span");
                anchorElem.href = "ProductDetail"; row.id = myCartArray[i].pid;
                imageElem.alt = ""; imageElem.src = myCartArray[i].image;
                buttonElem.className = "btn btn-inverse";
                imageElem.setAttribute("data-pid", myCartArray[i].pid);
                imageElem.setAttribute("data-barcode", myCartArray[i].barcode);
                imageElem.setAttribute("data-productcode", myCartArray[i].productcode);
                imageElem.setAttribute("data-category", myCartArray[i].category);
                imageElem.setAttribute("data-subcat", myCartArray[i].subcat);
                imageElem.setAttribute("data-price", myCartArray[i].price);
                imageElem.setAttribute("data-discount", myCartArray[i].discount);
                imageElem.setAttribute("data-style", myCartArray[i].style);
                imageElem.setAttribute("data-brand", myCartArray[i].brand);
                imageElem.setAttribute("data-image", myCartArray[i].image);
                imageElem.setAttribute("data-qty", myCartArray[i].qtyMax);
                imageElem.onclick = function () {
                    getImageLink(this);
                };
                inputBox.type = "number"; inputBox.value = myCartArray[i].qty;
                inputBox.className = "input-mini"; inputBox.disabled = "disabled";
                buttonElem.onclick = function () {
                    removeProduct(this.parentNode.parentNode);
                    bodyOfContent.removeChild(this.parentNode.parentNode);
                };
                buttonElem.innerHTML = "Remove";
                column1.appendChild(buttonElem); anchorElem.appendChild(imageElem);
                column2.appendChild(anchorElem); column3.innerHTML = myCartArray[i].brand + " product";
                column4.appendChild(inputBox); column5.innerHTML = "$";
                spanField1.innerHTML = myCartArray[i].price;
                column5.appendChild(spanField1); column6.innerHTML = "$";
                spanField2.innerHTML = myCartArray[i].priceTotal;
                column6.appendChild(spanField2);
                row.appendChild(column1); row.appendChild(column2); row.appendChild(column3);
                row.appendChild(column4); row.appendChild(column5); row.appendChild(column6);
                bodyOfContent.appendChild(row);
            }
        }
        else {
            bodyOfContent.innerHTML = "<h1>Votre panier est vide</h1>";
        }
        resultTotPrice();
    }

    function removeProduct(deleteCurrent) {
        for(var x=0; x < myCartArray.length; x++){
            if(myCartArray[x].pid === deleteCurrent.id){
                subTotal -= parseFloat(myCartArray[x].priceTotal);
                resultTotPrice();
                myCartArray.splice(x, 1);
                if(myCartArray.length !== 0){
                    sessionStorage.shoppingCart = JSON.stringify(myCartArray);
                }
                else {
                    sessionStorage.removeItem('shoppingCart');
                    bodyOfContent.innerHTML = "<h1>Votre panier est vide!</h1>";
                }
            }
			 document.querySelector(".productNum").innerHTML = "" + myCartArray.length;
        }
    }
</script>
<script src="themes/js/myScript.js"></script>
</body>
</html>