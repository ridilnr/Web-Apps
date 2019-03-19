<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="../themes/css/bootstrappage.css" rel="stylesheet"/>
    <!-- global styles -->
    <link href="../themes/css/flexslider.css" rel="stylesheet"/>
    <link href="../css/main.css" rel="stylesheet"/>
    <link href="../css/style.css" rel="stylesheet"/>
    <link href="../css/responsiveStyle.css" rel="stylesheet"/>
    <!-- scripts -->
    <script src="../themes/js/jquery-1.7.2.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../themes/js/superfish.js"></script>
    <script src="../themes/js/jquery.scrolltotop.js"></script>
    <script src="../themes/js/sjcl.js"></script>
    <script src="../themes/js/crypt.io.min.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="../js/respond.min.js"></script>
    <![endif]-->
    <title>Alipgit/Kids_Products</title>
</head>
<body>
<!-- MENU RESEARCH, LOGIN,...   -->
<div id="top-bar" class="container">
    <div class="row">
        <div class="span5">
            <form method="POST" action="../index/set_search" class="search_form searchBar">
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
        <div class="account pull-right col-md-offset-1">
            <ul class="user-menu">
                <li class="btnContainer"><a href="Cart"><span class="borderCart">My Bag &nbsp;</span>&nbsp;&nbsp;<span class="productNum rounded-circle">0</span></a></li><span class="borderList"></span>
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
            <a href="../index" class="logo pull-left idLogo"><img src="../themes/images//logo.png" class="site_logo" alt=""></a>
            <nav id="menu" class="pull-right">
                <ul>
                    <li><a href="../Women">Women</a>
                        <ul>
                            <li><a href="../Women/dresses">Dresses</a></li>
                            <li><a href="../Women/tops">Tops</a></li>
                            <li><a href="../Women/jeans">Jeans</a></li>
                            <li><a href="../Women/jackets">Jackets & Coats</a></li>
                            <li><a href="../Women/shorts">Shorts & Skirts</a></li>
                            <li><a href="../Women/knitwear">Knitwear</a></li>
                            <li><a href="../Women/trousers">Trousers & Jumpsuits</a></li>
                            <li><a href="../Women/lingerie">Lingerie</a></li>
                            <li><a href="../Women/nightwear">Nightwear</a></li>
                            <li><a href="../Women/shoes">Shoes</a></li>
                        </ul>
                    </li>
                    <li><a href="../Men">Men</a>
                        <ul>
                            <li><a href="../Men/tshirts">Tshirts</a></li>
                            <li><a href="../Men/jumpers">Jumpers & Cardigans</a></li>
                            <li><a href="../Men/jackets">Jackets & Coats</a></li>
                            <li><a href="../Men/jeans">Jeans</a></li>
                            <li><a href="../Men/shirts">Shirts</a></li>
                            <li><a href="../Men/trousers">Trousers</a></li>
                            <li><a href="../Men/shorts">Shorts</a></li>
                            <li><a href="../Men/nightwear">Nightwear</a></li>
                            <li><a href="../Men/shoes">Shoes</a></li>
                        </ul>
                    </li>
                    <li><a href="../Kids">Kids</a>
                        <ul>
                            <li><a href="../Kids/boys">Boys</a></li>
                            <li><a href="../Kids/girls">Girls</a></li>
                        </ul>
                    </li>
                    <li><a href="../Accessories">Accessories</a>
                        <ul>
                            <li><a href="../Accessories/bags">Bags & Purses</a></li>
                            <li><a href="../Accessories/hats">Hats</a></li>
                            <li><a href="../Accessories/scarves">Scarves</a></li>
                            <li><a href="../Accessories/gloves">Gloves</a></li>
                            <li><a href="../Accessories/belts">Belts</a></li>
                            <li><a href="../Accessories/watches">Watches</a></li>
                            <li><a href="../Accessories/jewelry">Jewelry</a></li>
                            <li><a href="../Accessories/sunglasses">Sunglasses</a></li>
                            <li><a href="../Accessories/phone">Phone & Tablet Cases</a></li>
                        </ul>
                    </li>
                    <li><a href="../Beauty">Beauty</a>
                        <ul>
                            <li><a href="../Beauty/makeup">Makeup</a></li>
                            <li><a href="../Beauty/hair">Hair</a></li>
                            <li><a href="../Beauty/skincare">Skincare</a></li>
                            <li><a href="../Beauty/nails">Nails</a></li>
                            <li><a href="../Beauty/body">Body</a></li>
                            <li><a href="../Beauty/gifts">Gifts</a></li>
                        </ul>
                    </li>
                    <li><a href="../Homeware">Homeware</a>
                        <ul>
                            <li><a href="../Homeware/living">Living room</a></li>
                            <li><a href="../Homeware/bedroom">Bedroom</a></li>
                            <li><a href="../Homeware/kitchen">Kitchen</a></li>
                            <li><a href="../Homeware/bathroom">Bathroom</a></li>
                            <li><a href="../Homeware/kids">Kids room</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- BODY TITLE-->
    <section class="header_text sub">
        <h4><span>NEW Products</span></h4>
    </section>
    <div class="filter pull-right">
        Sort By:
        <select name="colour" class="selectMenu">
            <option value="volvo">Newest</option>
            <option value="saab" class="optionClass">Price - Low To High</option>
            <option value="fiat">Price - High To Low</option>
            <option value="audi">Rating Descending</option>
        </select>
    </div>
    <!--  SUB CATEGORIES, FILTER, RANDOMIZE, PRODUCTS -->
    <section class="main-content">
        <!--  MAIN ROW -->
        <div class="row">
            <!--  SUB CATEGORIES -->
            <div class="col-md-3">
                <div class="block">
                    <ul class="nav nav-list">
                        <li class="nav-header">PRODUCT TYPE</li>
                    </ul>
                    <br/>
                    <ul class="nav nav-list below">
                        <li class="nav-header">BRAND</li>
                    </ul>
                </div>
                <!--  FILTER -->
                <div id="filter">
                    <select id="colour" class="selectMenu" onchange="colors()">
                        <option value="volvo">Colour</option>
                        <option value="%">All</option>
                        <option value="Red">Red</option>
                        <option value="Blue">Blue</option>
                        <option value="Black">Black</option>
                    </select>
                    <select id="Size" class="selectMenu" onchange="sizer()">
                        <option value="volvo">Size</option>
                        <option value="%">All</option>
                        <option value="Small">Small</option>
                        <option value="Medium">Medium</option>
                        <option value="Large">Large</option>
                    </select>
                    <select id="Price" class="selectMenu" onchange="prices()">
                        <option value="volvo">Price</option>
                        <option value="L-H">Lower-higher</option>
                        <option value="H-L">Higher-lower</option>
                    </select>
                    <select id="Fit" class="selectMenu" onchange="fit()">
                        <option value="volvo">Fit</option>
                        <option value="%">All</option>
                        <option value="Slim">Slim</option>
                        <option value="Medium">Medium</option>
                        <option value="Large">Large</option>
                    </select>
                </div>
                <!-- RANDOMIZE -->
                <div>
                    <h4 class="title">
                        <span class="pull-left"><span class="text">Randomize</span></span>
                        <span class="pull-right">
                            <a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
                         </span>
                    </h4>
                    <div id="myCarousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="active item">
                                <ul class="thumbnails listing-products">
                                    <li class="span3">
                                        <div class="product-box">
                                            <span class="sale_tag"></span>
                                            <img alt="" style="width: 342px; height: 250px" src="../themes/images/kids/one.jpg"><br/>
                                            <a href="ProductDetail" class="title">Firuze Osman Product</a><br/>
                                            <a href="#" class="category">From Women</a>
                                            <p class="price">$261</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="thumbnails listing-products">
                                    <li class="span3">
                                        <div class="product-box">
                                            <img alt="" style="width: 342px; height: 250px" src="../themes/images/kids/two.jpg"><br/>
                                            <a href="product_detail.html" class="title">Firuze Osman Product</a><br/>
                                            <a href="#" class="category">From Women</a>
                                            <p class="price">$134</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="thumbnails listing-products">
                                    <li class="span3">
                                        <div class="product-box">
                                            <img alt="" style="width: 342px; height: 250px" src="../themes/images/kids/three.jpg"><br/>
                                            <a href="product_detail.html" class="title">Firuze Osman Product</a><br/>
                                            <a href="#" class="category">From Women</a>
                                            <p class="price">$134</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="thumbnails listing-products">
                                    <li class="span3">
                                        <div class="product-box">
                                            <img alt="" style="width: 342px; height: 250px" src="../themes/images/kids/four.jpg"><br/>
                                            <a href="product_detail.html" class="title">Firuze Osman Product</a><br/>
                                            <a href="#" class="category">From Women</a>
                                            <p class="price">$134</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="thumbnails listing-products">
                                    <li class="span3">
                                        <div class="product-box">
                                            <img alt="" style="width: 342px; height: 250px" src="../themes/images/kids/five.jpg"><br/>
                                            <a href="product_detail.html" class="title">Firuze Osman Product</a><br/>
                                            <a href="#" class="category">From Women</a>
                                            <p class="price">$134</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PRODUCTS IMAGES -->
            <div class="col-md-9">
                <div class="span9 ">
                    <ul class="thumbnails listing-products">
                        <?php
                             $counter = count($productInfo2);
                            $page = $counter/12;
                            $page1 = $counter%12;
                            if($page1 > 0)
                        $page++;
                        $nbp = $page;
                        $tab = array();
                        While ($page > 1)
                        {
                        $nbr = ($nbp + 1) - $page;
                        $tab[] = $nbr;
                        $page --;
                        }
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
                                <a href="../ProductDetail">
                                    <img id="$product->pid" class="menProduct" onclick="getImageLink(this)" alt="" style="width: 342px; height: 250px" src="../$product->image">
                                </a>
                                <br/>
                                <a id="a1Get" href="../ProductDetail" onclick="getImageLink(this.parentNode.firstElementChild.nextElementSibling.firstElementChild)" class="title">$product->brand Product</a><br/>
                                <a id="a2Get" href="../ProductDetail" onclick="getImageLink(this.parentNode.firstElementChild.nextElementSibling.firstElementChild)" class="category">From $product->category</a>
                                <p class="price">$$product->price</p>
                            </div>
                        </li>
Here;
                        print $afficher;
                        }
                        ?>
                    </ul>
                    <!-- PAGINATION -->
                    <hr class="lignPagination">
                    <?php
                     if (isset($deb)){
                        $deb = ($deb/6)+1;
                        $up = $deb+1;
                        $down = $deb-1;
                        echo "Page: ".$deb;
                        }
                     else
                        echo "Page: 1";?>
                    <div class="pagination pagination-small pagination-centered">
                        <ul>
                            <li>
                                <?php
                                if (isset($deb)){
                                    if($down == 0)
                                        echo"<a href='#' aria-label='Previous'>
                                <span aria-hidden='true'>&laquo;</span>
                                </a>";
                                else{
                                echo "<a href='../index/linker4/$down?from=/news' aria-label='Previous'>
                                    <span aria-hidden='true'>&laquo;</span>
                                </a>";}
                                }else
                                echo"<a href='#' aria-label='Previous'>
                                    <span aria-hidden='true'>&laquo;</span>
                                </a>";
                                ?>
                            </li>
                            <?php
                                foreach ($tab as $composent)
                                    echo "<li><a href='../index/linker4/$composent?from=/news'>". $composent ."</a></li>" ;
                            ?><li><?php
                                    $numb = count($tab);
                                    if(isset($deb)){
                                        if($up <= $numb){
                                            echo "<a href='../index/linker4/$up?from=/news' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a>";}
                                else
                                echo"<a href='#' aria-label='Next'>
                                    <span aria-hidden='true'>&raquo;</span>
                                </a>";
                                }else{
                                if(isset($tab[1]))
                                echo"<a href='../index/linker4/$tab[1]?from=/news' aria-label='Next'>
                                    <span aria-hidden='true'>&raquo;</span>
                                </a>";
                                else
                                echo"<a href='#' aria-label='Next'>
                                    <span aria-hidden='true'>&raquo;</span>
                                </a>";
                                }
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>
</div>
<script src="../themes/js/common.js"></script>
<script src="../themes/js/myScript.js"></script>
<script src="../themes/js/toggleButton.js"></script>
<script src="../themes/js/sortingFilter.js"></script>
<script type="text/javascript">
    var myPid = [], myBar = [], myPro = [], myCat = [], mySub = [], myPri = [], myDis = [], mySty = [], myBra = [], myQty = [], myImg = [];
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