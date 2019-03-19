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
    <link href="../themes/css/jquery.fancybox.min.css" rel="stylesheet"/>
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
    <script src="../themes/js/jquery.fancybox.min.js"></script>
    <script src="../themes/js/jquery.elevatezoom.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="../js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="../themes/images/favicon/favicon.ico" >
    <link rel="icon" type="image/gif" href="../themes/images/favicon/animated_favicon1.gif" >
    <link rel="apple-touch-icon" href="../themes/images/favicon/apple-touch-icon.png" >
    <title>Alipgit/Search</title>
</head>
<body>
<!-- MENU RESEARCH, LOGIN,...   -->
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
        <div class="account pull-right col-md-offset-1">
            <ul class="user-menu">
                <li class="btnContainer"><a href="Cart"><span class="borderCart">My Bag &nbsp;</span>&nbsp;&nbsp;<span class="productNum rounded-circle">0</span></a></li><span class="borderList"></span>
                <li><img height="50" width="20" src="../img/Turkish_Flag.jpg" alt="En"></li>
            </ul>
        </div>
    </div>
</div>
<!--  MAIN CONTENT PAGE -->
<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a href="../index" class="logo pull-left"><img src="../themes/images/logo.png" class="site_logo" alt=""></a>
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
    <!-- BODY HEAD TEXT -->
    <section class="header_text">
        This is the result of your research.
    </section>
    <!-- PRODUCTS IMAGES -->
    <section class="main-content center">
        <center>
            <div class="row pull-right">
                <div class="active item">
                    <ul class="thumbnails">
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
                            foreach ($productInfo as $product){
                            $afficher = <<<Here
                                <li class="span3">
                        <div class="product-box">
                            <p><a href="ProductDetail">
                                    <img class="womenProduct" onclick="getImageLink(this)" alt="" src="../$product->image"
                                         data-pid="$product->pid" data-barcode="$product->barcode"
                                         data-productcode="$product->productcode" data-category="$product->category"
                                         data-subcat="$product->subcat" data-price="$product->price"
                                         data-discount="$product->discount" data-style="$product->style"
                                         data-brand="$product->brand" data-qty="$product->qty" data-image="../$product->image"/>
                                </a></p>
                            <a href="ProductDetail" class="title">$product->category Product</a><br/>
                            <a href="ProductDetail" class="category">$product->brand Product</a>
                            <p class="price">$$product->price</p>
                        </div>
                        </li>
Here;
                        echo $afficher;
                        }
                        ?>
                    </ul>
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
                                echo "<a href='../index/linker3/$down' aria-label='Previous'>
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
                                    echo "<li><a href='../index/linker3/$composent'>". $composent ."</a></li>" ;
                            ?><li><?php
                                    $numb = count($tab);
                                    if(isset($deb)){
                                        if($up <= $numb){
                                            echo "<a href='../index/linker3/$up' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a>";}
                                else
                                echo"<a href='#' aria-label='Next'>
                                    <span aria-hidden='true'>&raquo;</span>
                                </a>";
                                }else{
                                if(isset($tab[1]))
                                echo"<a href='../index/linker3/$tab[1]' aria-label='Next'>
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
        </center>
    </section>
</div>
<script src="../themes/js/myScript.js"></script>
</body>
</html>