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
    <script src="themes/js/jquery.elevatezoom.js"></script>
    <script src="themes/js/jquery.fancybox.min.js"></script>
    <script src="themes/js/sjcl.js"></script>
    <script src="themes/js/crypt.io.min.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="top-bar" class="container">
    <div class="row">
        <div class="span5">
            <form method="POST" action="index/set_search" class="search_form searchBar">
                <input name="search" id="autocomp" type="text" class="input-block-level search-query"  list="list1">
                <input type="submit" value="Search">
            </form>
        </div>
        <datalist id="list1">
            <?php
                foreach($productList as $prod)
                echo "<option value='$prod->productname :: $prod->category'>";
            ?>
        </datalist>
            <div class="account pull-right">
                <ul class="user-menu">
                    <li class="btnContainer"><a href="Cart"><span class="borderCart">Mon Panier &nbsp;</span>&nbsp;&nbsp;<span class="productNum rounded-circle">0</span></a></li><span class="borderList"></span>
                    <li><img height="50" width="20" src="img/British_Flag.jpg" alt="En"></li>
                </ul>
            </div>
    </div>
</div>
<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a href="index" class="logo pull-left idLogo"><img width="100" height="100" src="img/logo.jpg" class="site_logo img-rounded" alt=""></a>
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
        <h4><span>DETAILS DU PRODUIT</span></h4>
    </section>
    <section id="mainContentProduct" class="main-content">
        <div class="row">
            <div class="span9">
                <div class="row">
                    <div class="span4">
                            <a id="tochange" href="" class="thumbnail" data-fancybox="img-group">
                                <img id="popup" onclick="imageChange()" alt="" src=""
                                     data-zoom-image="" data-pid="" data-barcode="" data-productcode="" data-category=""
                                     data-subcat="" data-price="" data-discount="" data-style="" data-brand=""
                                     data-qty="" data-image=""/>
                            </a>
                            <div id="uniformThumbnail">
                                <ul class="thumbnails">
                                    <li class="span1">
                                        <a id="mod1" href="" class="thumbnail"  data-image="" data-zoom-image="">
                                            <img id="submod1" onclick="reBuild()" src="" alt="">
                                        </a>
                                    </li>
                                    <li class="span1">
                                        <a id="modal1" onchange="reBuild()" href="" class="thumbnail" data-image="" data-zoom-image="" data-fancybox="img-group">
                                            <img id="submodal1" onclick="imageChange()" src="" alt="">
                                        </a>
                                    </li>
                                    <li class="span1" >
                                        <a id="modal2" onchange="reBuild()" href="" class="thumbnail" data-image="" data-zoom-image="" data-fancybox="img-group">
                                            <img id="submodal2" onclick="imageChange()" src="" alt="">
                                        </a>
                                    </li>
                                    <li class="span1">
                                        <a id="modal3" onchange="reBuild()" href="" class="thumbnail" data-image="" data-zoom-image="" data-fancybox="img-group">
                                            <img id="submodal3" onclick="imageChange()" src="" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                    </div>
                    <div class="span5">
                        <address>
                            <strong>MARQUE:</strong> <span class="productBrand"></span><br>
                            <strong>CODE DU PRODUIT: </strong><span class="productCode"></span><br>
                            <strong>CODEBAR: </strong><span class="productBarcode"></span><br>
                            <strong>POINTS: </strong> <span>0</span><br>
                            <strong>QUANTITE MAX: </strong> <span class="productQty"></span><br>
                            <strong>REDUCTION: </strong> <span class="productDiscount"></span><br>
                            <strong>DISPONIBILITE:</strong> <span>DISPONIBLE</span><br>
                        </address>
                        <h4><strong>Prix: $<span class="productPrice"></span></strong></h4>
                    </div>
                    <div class="span5">
                        <form class="form-inline">
                            <label class="checkbox">
                                <input type="checkbox" value=""> POUR L'OPTION 1
                            </label>
                            <br/>
                            <input type="checkbox" value="">
                            <label class="checkbox"> POUR L'OPTION 2</label>
                            <p>&nbsp;</p>
                            <label>QUANTITE: </label>
                            <input id="qty" type="number" oninput="changePrice(qty)"  min=1  max="" class="span1 productQtyInput" value=1><br>
                            <div id="selectOption">

                            </div>
                            <button class="btn btn-inverse" onclick="addButton();">Add to cart</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="span9">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#home">Description</a></li>
                            <li class=""><a href="#profile">Additional Information</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">The description of the products to be provided</div>
                            <div class="tab-pane" id="profile">
                                <table class="table table-striped shop_attributes">
                                    <tbody>
                                    <tr class="">
                                        <th>Size</th>
                                        <td>Large, Medium, Small, X-Large</td>
                                    </tr>
                                    <tr class="alt">
                                        <th>Colour</th>
                                        <td>Orange, Yellow</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="span9">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="themes/js/common.js"></script>
<script src="themes/js/myScript.js"></script>
<script type="text/javascript">
    var maxQuantity, unitPrice, priceTot;
    var myProductDetail, myCurrentProduct;
    var myCartArray = [], qtyToSend;
    var itemMenu = [], linkItem = "";
    maxQuantity = parseFloat(document.querySelector(".productQty").innerHTML);
    unitPrice = parseFloat(document.querySelector("#popup").getAttribute("data-price"));
    qtyToSend = parseFloat(document.querySelector("#qty").value);
    priceTot = unitPrice;
    myCurrentProduct = document.querySelector("#popup");
    checkProductToAdd();
    displayDropDown();
    function displayDropDown(){
        var myTempArray = [], mySelect, myOption = [], myLabel, x = 44,
                braArray = ['A', 'AA', 'B', 'C', 'D', 'DD', 'E', 'F'], listSize;
        myTempArray = getterSession(myNewCartArray, "productToAdd");
        mySelect = document.createElement("select");
        mySelect.id = "listOption";
        mySelect.style.margin = "0px 0px 10px 5px";
        mySelect.style.width = "100px";
        myLabel = document.createElement("label");
        myLabel.innerHTML = "TAILLE: ";
        if(myTempArray.subcat === "Costumes"){
            for(var i=0; i<5; i++){
                myOption[i] = document.createElement("option");
                myOption[i].value = x;
                myOption[i].innerHTML = x;
                mySelect.appendChild(myOption[i]);
                x = x + 2;
            }
        }
        else if(myTempArray.subcat === "soutien-gorge"){
            for(var j= 0; j<8; j++){
                myOption[i] = document.createElement("option");
                myOption[i].value = braArray[j];
                myOption[i].innerHTML = braArray[j];
                mySelect.appendChild(myOption[i]);
            }
        }
        document.querySelector("#selectOption").prepend(mySelect);
        document.querySelector("#selectOption").prepend(myLabel);
        listSize = document.querySelector('#listOption');
        myTempArray["size"] = listSize.options[listSize.selectedIndex].value;
        myCurrentProduct.setAttribute("data-size",  listSize.options[listSize.selectedIndex].value);
        setterSession(myTempArray, "productToAdd");
        listSize.onchange = function(){
            myCurrentProduct.setAttribute("data-size",  listSize.options[listSize.selectedIndex].value);
        };
    }
    function checkProductToAdd() {
        if(sessionStorage.productToAdd === undefined || sessionStorage.productToAdd === "")
            document.querySelector("#mainContentProduct").innerHTML = "<h3>No product selected</h3>";
    }

    function changePrice(currentObject) {
        if(currentObject.value  <= maxQuantity){
            document.querySelector(".productPrice").innerHTML  = " " + (unitPrice  * currentObject.value).toFixed(2);
        }
        qtyToSend = currentObject.value;
        priceTot = document.querySelector(".productPrice").innerHTML;
    }

    function addButton(){
        myProductDetail = {
            pid : myCurrentProduct.getAttribute("data-pid"),
            barcode : myCurrentProduct.getAttribute("data-barcode"),
            productcode : myCurrentProduct.getAttribute("data-productcode"),
            category : myCurrentProduct.getAttribute("data-category"),
            subcat : myCurrentProduct.getAttribute("data-subcat"),
            price : unitPrice,
            priceTotal : priceTot,
            discount : myCurrentProduct.getAttribute("data-discount"),
            style : myCurrentProduct.getAttribute("data-style"),
            brand : myCurrentProduct.getAttribute("data-brand"),
            image : myCurrentProduct.getAttribute("data-image"),
            qty : qtyToSend,
            qtyMax : myCurrentProduct.getAttribute("data-qty"),
            size : myCurrentProduct.getAttribute("data-size")
        };
        if(checkShoppingCart() === "false"){
            myCartArray = getterSession(myNewCartArray, "shoppingCart");
            for(var j=0; j < myCartArray.length; j++){
                if(myProductDetail.pid === myCartArray[j].pid){
                    myCartArray.splice(j, 1);
                }
            }
            myCartArray.push(myProductDetail);
            document.querySelector(".productNum").innerHTML = "" + myCartArray.length;
            setterSession(myCartArray, "shoppingCart");
        }
        else {
            myCartArray.push(myProductDetail);
            setterSession(myCartArray, "shoppingCart");
        }
    }

    for(var j = 0; j < document.querySelector(".categoryMenu").childElementCount ; j++){
        itemMenu[j] = document.querySelector(".categoryMenu").children[j];
    }

    itemMenu[0].firstElementChild.addEventListener('click', function () {
        linkItem = itemMenu[0].firstElementChild.getAttribute("href");
        sessionStorage.shoppingPage = JSON.stringify(linkItem);
        //setterSession(linkItem, "shoppingPage");
    });

    itemMenu[1].firstElementChild.addEventListener('click', function () {
        linkItem = itemMenu[1].firstElementChild.getAttribute("href");
        sessionStorage.shoppingPage = JSON.stringify(linkItem);
        //setterSession(linkItem, "shoppingPage");
    });

    itemMenu[2].firstElementChild.addEventListener('click', function () {
        linkItem = itemMenu[2].firstElementChild.getAttribute("href");
        sessionStorage.shoppingPage = JSON.stringify(linkItem);
        //setterSession(linkItem, "shoppingPage");
    });

    itemMenu[3].firstElementChild.addEventListener('click', function () {
        linkItem = itemMenu[3].firstElementChild.getAttribute("href");
        sessionStorage.shoppingPage = JSON.stringify(linkItem);
        //setterSession(linkItem, "shoppingPage");
    });

    itemMenu[4].firstElementChild.addEventListener('click', function () {
        linkItem = itemMenu[4].firstElementChild.getAttribute("href");
        sessionStorage.shoppingPage = JSON.stringify(linkItem);
        //setterSession(linkItem, "shoppingPage");
    });

    itemMenu[5].firstElementChild.addEventListener('click', function () {
        linkItem = itemMenu[5].firstElementChild.getAttribute("href");
        sessionStorage.shoppingPage = JSON.stringify(linkItem);
        //setterSession(linkItem, "shoppingPage");
    });
    itemMenu[itemMenu.length].parentNode.previousSibling.addEventListener('click', function () {
        linkItem = "index";
        sessionStorage.shoppingPage = JSON.stringify(linkItem);
        //setterSession(linkItem, "shoppingPage");
    });
</script>
</body>
</html>