<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/responsiveStyle.css" rel="stylesheet"/>
    <!-- scripts -->
    <script src="themes/js/jquery-1.7.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="themes/js/superfish.js"></script>
    <script src="themes/js/jquery.scrolltotop.js"></script>
    <script src="themes/js/sjcl.js"></script>
    <script src="themes/js/crypt.io.min.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <title>Newest Products</title>
</head>
<body>
<!-- MENU RESEARCH, LOGIN,...   -->
<div id="top-bar" class="container">
    <div class="row">
        <div class="span5 col-md-4">
            <form method="POST" action="index/set_search" class="search_form searchBar">
                <input name="search" id="autocomp" type="text" class="input-block-level search-query"  list="list1">
                <input type="submit" value="Search">
            </form>
        </div>
        <div class="account pull-right col-md-offset-1">
            <ul class="user-menu">
                <?php
                        if ($this->session->has('userEmail') and $this->session->has('userName'))
                {
                $userName = $this->session->get('userName');
                echo '<li id="accountMenu"><span class="connectSymbol"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;'.$userName.'&nbsp; <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></span>';
                    echo '<ul id="accountSubMenu">';
                        echo '<li><a href="Update"><span>Edit Account</span>&nbsp; <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></li>';
                        echo '<li><a href="MyOrders"><span>My Orders</span>&nbsp; <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></li>';
                        echo '<li><a href="Register/logout"><span>&nbsp;&nbsp;Disconnect</span>&nbsp;&nbsp; <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>';
                        echo '</ul>';
                    echo '</li>';
                echo '<li class="btnContainer"><a href="Cart"><span class="borderCart">My Bag &nbsp;</span>&nbsp;&nbsp;<span class="productNum rounded-circle">0</span></a></li>';
                }
                else{
                echo '<li class="btnContainer"><a href="Cart"><span class="borderCart">My Bag &nbsp;</span>&nbsp;&nbsp;<span class="productNum rounded-circle">0</span></a></li>';
                echo '<li class="btnContainer"><a href="Register">Login | SignUp</a></li>';
                }
                ?>
                <li><img height="50" width="20" src="img/Turkish_Flag.jpg" alt="En"></li>
            </ul>
        </div>
    </div>
</div>
<!--  MAIN CONTENT PAGE -->
<div id="wrapper" class="container">
    <!--  MAIN MENU -->
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a href="index" class="logo pull-left idLogo"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
            <nav id="menu" class="pull-right">
                <ul class="categoryMenu">
                    <li><a href="Women?page=1">Women</a>
                        <ul>
                            <li><a href="Women/dresses?page=1">Dresses</a></li>
                            <li><a href="Women/tops?page=1">Tops</a></li>
                            <li><a href="Women/jeans?page=1">Jeans</a></li>
                            <li><a href="Women/jackets?page=1">Jackets & Coats</a></li>
                            <li><a href="Women/shorts?page=1">Shorts & Skirts</a></li>
                            <li><a href="Women/knitwear?page=1">Knitwear</a></li>
                            <li><a href="Women/trousers?page=1">Trousers & Jumpsuits</a></li>
                            <li><a href="Women/lingerie?page=1">Lingerie</a></li>
                            <li><a href="Women/nightwear?page=1">Nightwear</a></li>
                            <li><a href="Women/shoes?page=1">Shoes</a></li>
                        </ul>
                    </li>
                    <li><a href="Men?page=1">Men</a>
                        <ul>
                            <li><a href="Men/tshirts?page=1">Tshirts</a></li>
                            <li><a href="Men/jumpers?page=1">Jumpers & Cardigans</a></li>
                            <li><a href="Men/jackets?page=1">Jackets & Coats</a></li>
                            <li><a href="Men/jeans?page=1">Jeans</a></li>
                            <li><a href="Men/shirts?page=1">Shirts</a></li>
                            <li><a href="Men/trousers?page=1">Trousers</a></li>
                            <li><a href="Men/shorts?page=1">Shorts</a></li>
                            <li><a href="Men/nightwear?page=1">Nightwear</a></li>
                            <li><a href="Men/shoes?page=1">Shoes</a></li>
                        </ul>
                    </li>
                    <li><a href="Kids?page=1">Kids</a>
                        <ul>
                            <li><a href="Kids/boys?page=1">Boys</a></li>
                            <li><a href="Kids/girls?page=1">Girls</a></li>
                        </ul>
                    </li>
                    <li><a href="Accessories?page=1">Accessories</a>
                        <ul>
                            <li><a href="Accessories/bags?page=1">Bags & Purses</a></li>
                            <li><a href="Accessories/hats?page=1">Hats</a></li>
                            <li><a href="Accessories/scarves?page=1">Scarves</a></li>
                            <li><a href="Accessories/gloves?page=1">Gloves</a></li>
                            <li><a href="Accessories/belts?page=1">Belts</a></li>
                            <li><a href="Accessories/watches?page=1">Watches</a></li>
                            <li><a href="Accessories/jewelry?page=1">Jewelry</a></li>
                            <li><a href="Accessories/sunglasses?page=1">Sunglasses</a></li>
                            <li><a href="Accessories/phone?page=1">Phone & Tablet Cases</a></li>
                        </ul>
                    </li>
                    <li><a href="Beauty?page=1">Beauty</a>
                        <ul>
                            <li><a href="Beauty/makeup?page=1">Makeup</a></li>
                            <li><a href="Beauty/hair?page=1">Hair</a></li>
                            <li><a href="Beauty/skincare?page=1">Skincare</a></li>
                            <li><a href="Beauty/nails?page=1">Nails</a></li>
                            <li><a href="Beauty/body?page=1">Body</a></li>
                            <li><a href="Beauty/gifts?page=1">Gifts</a></li>
                        </ul>
                    </li>
                    <li><a href="Homeware?page=1">Homeware</a>
                        <ul>
                            <li><a href="Homeware/living?page=1">Living room</a></li>
                            <li><a href="Homeware/bedroom?page=1">Bedroom</a></li>
                            <li><a href="Homeware/kitchen?page=1">Kitchen</a></li>
                            <li><a href="Homeware/bathroom?page=1">Bathroom</a></li>
                            <li><a href="Homeware/kids?page=1">Kids room</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- BODY TITLE-->
    <section class="header_text sub">
        <h4><span>New In Stock</span></h4>
    </section>
    <div class="filter pull-right">
        Sort By:
        <select id="Price" class="selectMenu" onchange="prices(document.location.href)">
            <option value="volvo">Price</option>
            <option value="l">Lower-higher</option>
            <option value="h">Higher-lower</option>
        </select>
    </div>
    <!--  SUB CATEGORIES, FILTER, RANDOMIZE, PRODUCTS -->
    <section class="main-content">
        {{ flash.output() }}
        <!--  MAIN ROW -->
        <div class="row rowMainContent">
            <div id="containerFilter" class="col-md-2">
                <!--  FILTER -->
                <div class="filter">
                    <form role="form" method="post" action="{{ url('Women/SearchCothes') }}">
                        <div class="divButtonColor">
                            <button type="button" class="btn btn-default btn-block" id="buttonColor">
                                <span>Color <i class="iconColor glyphicon glyphicon-menu-down pad-xs-8 pad-sm-10 pad-md-5"></i></span>
                            </button>
                        </div>
                        <div class="row rowColor">
                            <div id="rowColorColOne" class="col-sm-6">
                                <label class="container mycontainer"><input value="Black" name="black" type="checkbox">black<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input value="Blue" name="blue" type="checkbox">blue<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input value="Brown" name="brown" type="checkbox">brown<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input value="Camel" name="camel" type="checkbox">camel<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input value="Cream" name="cream" type="checkbox">cream<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input value="Green" name="green" type="checkbox">green<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input value="Grey" name="grey" type="checkbox">grey<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input value="Metallic" name="metallic" type="checkbox">metallic<span class="checkmark"></span></label>
                            </div>
                            <div id="rowColorColTwo" class="col-sm-6">
                                <label class="container mycontainer"><input value="Multi" name="multi" type="checkbox">multi<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input value="Nude" name="nude" type="checkbox">nude<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input value="Pink" name="pink" type="checkbox">pink<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input value="Purple" name="purple" type="checkbox">purple<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input value="Red" name="red" type="checkbox">red<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input value="White" name="white" type="checkbox">white<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input value="Yellow" name="yellow" type="checkbox">yellow<span class="checkmark"></span></label>
                            </div>
                        </div><br>
                        <div>
                            <button type="button" class="btn btn-default btn-block" id="buttonSize">
                                <span class="">Size <i class="iconSize glyphicon glyphicon-menu-down pad-xs-8 pad-sm-10 pad-md-5"></i></span>
                            </button>
                        </div>
                        <div class="row rowSize">
                            <div id="rowSizeColOne" class="col-sm-6">
                                <label class="container mycontainer"><input name="s32" value="32" type="checkbox">32<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input name="s34" value="34" type="checkbox">34<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input name="s36" value="36" type="checkbox">36<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input name="s38" value="38" type="checkbox">38<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input name="s40" value="40" type="checkbox">40<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input name="s42" value="42" type="checkbox">42<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input name="s44" value="44" type="checkbox">44<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input name="s46" value="46" type="checkbox">46<span class="checkmark"></span></label>
                            </div>
                            <div id="rowSizeColTwo" class="col-sm-6">
                                <label class="container mycontainer"><input name="XXS" value="XXS" type="checkbox">XXS<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input name="XS" value="XS" type="checkbox">XS<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input name="S" value="S" type="checkbox">S<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input name="M" value="M" type="checkbox">M<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input name="L" value="L" type="checkbox">L<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input name="XL" value="XL" type="checkbox">XL<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input name="XXL" value="XXL" type="checkbox">XXL<span class="checkmark"></span></label>
                                <label class="container mycontainer"><input name="XXXL" value="XXXL" type="checkbox">XXXL<span class="checkmark"></span></label>
                            </div>
                        </div><br>
                        <div id="filter3">
                            <div class="row">
                                <div class="col-sm-6">
                                    <select name="brand" id="color" class="selectMenu pull-left">
                                        <option value="">Brand</option>
                                        <?php
                                    $find = Brand::find([
                                    "status = 'active'",
                                    "order" => "brandname ASC"
                                        ]
                                        );
                                        foreach($find as $b)
                                        {
                                        echo "<option>$b->brandname</option>";
                                        }
                                        ?>
                                    </select>
                                </div><br><br>
                                <div class="col-sm-6">
                                    <select name="subcat" id="color" class="selectMenu pull-left">
                                        <option value="">From</option>
                                        <?php
                                    $find = Subcat::find([
                                    "categoryname LIKE '%'",
                                    "order" => "subcatname ASC"
                                        ]
                                        );
                                        foreach($find as $b)
                                        {
                                        echo "<option>$b->subcatname</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="searchButton">
                                <input type="submit" value="Search" class="btn btn-inverse">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- PRODUCTS IMAGES -->
            <div class="col-md-10">
                <!-- Read data and paginate here -->
                <?php
        use Phalcon\Paginator\Adapter\Model as PaginatorModel;
        $currentPage = (int) $_GET["page"];

        $paginator = new PaginatorModel(
        [
            "data" => $ProductListe,
                "limit" => 9,
                "page" => $currentPage,
                ]);
                $page = $paginator->getPaginate();
                ?>
                <!--<div id="filter" class="pull-left"><?php echo "Page ", $page->current, " Sur ", $page->total_pages; ?></div>-->

                <!-- properties -->
                <?php foreach ($page->items as $item) { ?>
                <div class="span3">
                    <div class="product-box">
                        <span class="sale_tag"></span>
                        <a href="ProductDetail/SetterPID/<?php echo $item->pid ?>">
                            <img id="<?php echo $item->pid ?>" class="womenProduct" onclick="getImageLink(this)" alt="" style="width: 342px; height: 250px" src="http://admin.alipgit.com/en/public/<?php echo $item->image ?>">
                        </a>
                        <br/>
                        <a id="a1Get" href="ProductDetail/SetterPID/<?php echo $item->pid ?>" onclick="getImageLink(this.parentNode.firstElementChild.nextElementSibling.firstElementChild)" class="title"><?php echo $item->brand ?> Product</a><br/>
                        <a id="a2Get" href="ProductDetail/SetterPID/<?php echo $item->pid ?>" onclick="getImageLink(this.parentNode.firstElementChild.nextElementSibling.firstElementChild)" class="category">From <?php echo $item->category ?></a>
                        <p class="price"><?php echo $item->price ?> TL</p>
                    </div>
                </div>
                <?php } ?>
                <ul class="thumbnails listing-products">
                    <?php
                    $ppid = $pbar = $ppro = $pcat = $psub = $ppri = $pdis = $psty = $pbra = $pqty = $pname = $pimg = array(" "," ", " ", " ", " ", " ", " ", " ", " ", " ") ;
                    $x = 0;
                    foreach ($page->items as $product){
                    $ppid[$x] = $product->pid; $pbar[$x] = $product->barcode; $ppro[$x] = $product->productcode;
                    $pcat[$x] = $product->category; $psub[$x] = $product->subcat; $ppri[$x] = $product->price;
                    $pdis[$x] = $product->discount; $psty[$x] = $product->style; $pbra[$x] = $product->brand;
                    $pname[$x] = $product->productname;
                    $pqty[$x] = $product->qty; $pimg[$x++] = $product->image;
                    }
                    ?>
                </ul>
                <div class="center">
                    <ul class="pagination">
                        <li><a href="Newest?page=<?= $page->before; ?>"><<</a></li>
                        <li><a href="Newest?page=<?= $page->next; ?>"><?php echo $page->current?></a></li>
                        <li><a href="Newest?page=<?= $page->next; ?>">>></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</div>
<script src="themes/js/common.js"></script>
<script src="themes/js/myScript.js"></script>
<script src="themes/js/toggleButton.js"></script>
<script src="themes/js/sortingFilter.js"></script>
<script type="text/javascript">
    var myPid = [], myBar = [], myPro = [], myCat = [], mySub = [], myPri = [], myDis = [], mySty = [], myBra = [], myQty = [], myImg = [], myNa = [];
    var itemMenu = [], linkItem = "";

    setVariable();
    menuEvent(itemMenu, linkItem);

    function setVariable() {
        myPid[0] = "<?php echo $ppid[0];  ?>" ; myPid[1] = "<?php echo $ppid[1];  ?>" ; myPid[2] = "<?php echo $ppid[2];  ?>" ;
        myPid[3] = "<?php echo $ppid[3];  ?>" ; myPid[4] = "<?php echo $ppid[4];  ?>" ; myPid[5] = "<?php echo $ppid[5];  ?>" ;
        myPid[6] = "<?php echo $ppid[6];  ?>" ; myPid[7] = "<?php echo $ppid[7];  ?>" ; myPid[8] = "<?php echo $ppid[8];  ?>" ;

        myBar[0] = "<?php echo $pbar[0];  ?>" ; myBar[1] = "<?php echo $pbar[1];  ?>" ; myBar[2] = "<?php echo $pbar[2];  ?>" ;
        myBar[3] = "<?php echo $pbar[3];  ?>" ; myBar[4] = "<?php echo $pbar[4];  ?>" ; myBar[5] = "<?php echo $pbar[5];  ?>" ;
        myBar[6] = "<?php echo $pbar[6];  ?>" ; myBar[7] = "<?php echo $pbar[7];  ?>" ; myBar[8] = "<?php echo $pbar[8];  ?>" ;

        myPro[0] = "<?php echo $ppro[0];  ?>" ; myPro[1] = "<?php echo $ppro[1];  ?>" ; myPro[2] = "<?php echo $ppro[2];  ?>" ;
        myPro[3] = "<?php echo $ppro[3];  ?>" ; myPro[4] = "<?php echo $ppro[4];  ?>" ; myPro[5] = "<?php echo $ppro[5];  ?>" ;
        myPro[6] = "<?php echo $ppro[6];  ?>" ; myPro[7] = "<?php echo $ppro[7];  ?>" ; myPro[8] = "<?php echo $ppro[8];  ?>" ;

        myCat[0] = "<?php echo $pcat[0];  ?>" ; myCat[1] = "<?php echo $pcat[1];  ?>" ; myCat[2] = "<?php echo $pcat[2];  ?>" ;
        myCat[3] = "<?php echo $pcat[3];  ?>" ; myCat[4] = "<?php echo $pcat[4];  ?>" ; myCat[5] = "<?php echo $pcat[5];  ?>" ;
        myCat[6] = "<?php echo $pcat[6];  ?>" ; myCat[7] = "<?php echo $pcat[7];  ?>" ; myCat[8] = "<?php echo $pcat[8];  ?>" ;

        mySub[0] = "<?php echo $psub[0];  ?>" ; mySub[1] = "<?php echo $psub[1];  ?>" ; mySub[2] = "<?php echo $psub[2];  ?>" ;
        mySub[3] = "<?php echo $psub[3];  ?>" ; mySub[4] = "<?php echo $psub[4];  ?>" ; mySub[5] = "<?php echo $psub[5];  ?>" ;
        mySub[6] = "<?php echo $psub[6];  ?>" ; mySub[7] = "<?php echo $psub[7];  ?>" ; mySub[8] = "<?php echo $psub[8];  ?>" ;

        myPri[0] = "<?php echo $ppri[0];  ?>" ; myPri[1] = "<?php echo $ppri[1];  ?>" ; myPri[2] = "<?php echo $ppri[2];  ?>" ;
        myPri[3] = "<?php echo $ppri[3];  ?>" ; myPri[4] = "<?php echo $ppri[4];  ?>" ; myPri[5] = "<?php echo $ppri[5];  ?>" ;
        myPri[6] = "<?php echo $ppri[6];  ?>" ; myPri[7] = "<?php echo $ppri[7];  ?>" ; myPri[8] = "<?php echo $ppri[8];  ?>" ;

        myDis[0] = "<?php echo $pdis[0];  ?>" ; myDis[1] = "<?php echo $pdis[1];  ?>" ; myDis[2] = "<?php echo $pdis[2];  ?>" ;
        myDis[3] = "<?php echo $pdis[3];  ?>" ; myDis[4] = "<?php echo $pdis[4];  ?>" ; myDis[5] = "<?php echo $pdis[5];  ?>" ;
        myDis[6] = "<?php echo $pdis[6];  ?>" ; myDis[7] = "<?php echo $pdis[7];  ?>" ; myDis[8] = "<?php echo $pdis[8];  ?>" ;

        mySty[0] = "<?php echo $psty[0];  ?>" ; mySty[1] = "<?php echo $psty[1];  ?>" ; mySty[2] = "<?php echo $psty[2];  ?>" ;
        mySty[3] = "<?php echo $psty[3];  ?>" ; mySty[4] = "<?php echo $psty[4];  ?>" ; mySty[5] = "<?php echo $psty[5];  ?>" ;
        mySty[6] = "<?php echo $psty[6];  ?>" ; mySty[7] = "<?php echo $psty[7];  ?>" ; mySty[8] = "<?php echo $psty[8];  ?>" ;

        myBra[0] = "<?php echo $pbra[0];  ?>" ; myBra[1] = "<?php echo $pbra[1];  ?>" ; myBra[2] = "<?php echo $pbra[2];  ?>" ;
        myBra[3] = "<?php echo $pbra[3];  ?>" ; myBra[4] = "<?php echo $pbra[4];  ?>" ; myBra[5] = "<?php echo $pbra[5];  ?>" ;
        myBra[6] = "<?php echo $pbra[6];  ?>" ; myBra[7] = "<?php echo $pbra[7];  ?>" ; myBra[8] = "<?php echo $pbra[8];  ?>" ;

        myNa[0] = "<?php echo $pname[0];  ?>" ; myNa[1] = "<?php echo $pname[1];  ?>" ; myNa[2] = "<?php echo $pname[2];  ?>" ;
        myNa[3] = "<?php echo $pname[3];  ?>" ; myNa[4] = "<?php echo $pname[4];  ?>" ; myNa[5] = "<?php echo $pname[5];  ?>" ;
        myNa[6] = "<?php echo $pname[6];  ?>" ; myNa[7] = "<?php echo $pname[7];  ?>" ; myNa[8] = "<?php echo $pname[8];  ?>" ;

        myQty[0] = "<?php echo $pqty[0];  ?>" ; myQty[1] = "<?php echo $pqty[1];  ?>" ; myQty[2] = "<?php echo $pqty[2];  ?>" ;
        myQty[3] = "<?php echo $pqty[3];  ?>" ; myQty[4] = "<?php echo $pqty[4];  ?>" ; myQty[5] = "<?php echo $pqty[5];  ?>" ;
        myQty[6] = "<?php echo $pqty[6];  ?>" ; myQty[7] = "<?php echo $pqty[7];  ?>" ; myQty[8] = "<?php echo $pqty[8];  ?>" ;

        myImg[0] = "<?php echo $pimg[0];  ?>" ; myImg[1] = "<?php echo $pimg[1];  ?>" ; myImg[2] = "<?php echo $pimg[2];  ?>" ;
        myImg[3] = "<?php echo $pimg[3];  ?>" ; myImg[4] = "<?php echo $pimg[4];  ?>" ; myImg[5] = "<?php echo $pimg[5];  ?>" ;
        myImg[6] = "<?php echo $pimg[6];  ?>" ; myImg[7] = "<?php echo $pimg[7];  ?>" ; myImg[8] = "<?php echo $pimg[8];  ?>" ;
    }
</script>
</body>
</html>