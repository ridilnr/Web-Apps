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
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/responsiveStyle.css" rel="stylesheet"/>
    <!-- scripts -->
    <script src="themes/js/jquery-1.7.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="themes/js/superfish.js"></script>
    <script src="themes/js/jquery.scrolltotop.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <title>Alipgit/Register</title>
</head>
<body>
<div id="top-bar" class="container">
    <div class="row">
        <div class="span5 col-md-4">
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
                <li class="btnContainer"><a href="Cart"><span class="borderCart">My Bag &nbsp;</span>&nbsp;&nbsp;<span class="productNum rounded-circle">0</span></a></li>
            </ul>
        </div>
    </div>
</div>
<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a id="idLogo" href="index" class="logo pull-left"><img src="themes/images//logo.png" class="site_logo" alt=""></a>
            <nav id="menu" class="pull-right">
                <ul>
                    <li><a href="Women">Women</a>
							<ul class="categoryMenu">
                            <li><a href="Women/dresses">Dresses</a></li>
                            <li><a href="Women/tops">Tops</a></li>
                            <li><a href="Women/jeans">Jeans</a></li>
                            <li><a href="Women/jackets">Jackets & Coats</a></li>
                            <li><a href="Women/shorts">Shorts & Skirts</a></li>
                            <li><a href="Women/knitwear">Knitwear</a></li>
                            <li><a href="Women/trousers">Trousers & Jumpsuits</a></li>
                            <li><a href="Women/lingerie">Lingerie</a></li>
                            <li><a href="Women/nightwear">Nightwear</a></li>
                            <li><a href="Women/shoes">Shoes</a></li>
                        </ul>
                    </li>
                    <li><a href="Men">Men</a>
                        <ul>
                            <li><a href="Men/tshirts">Tshirts</a></li>
                            <li><a href="Men/jumpers">Jumpers & Cardigans</a></li>
                            <li><a href="Men/jackets">Jackets & Coats</a></li>
                            <li><a href="Men/jeans">Jeans</a></li>
                            <li><a href="Men/shirts">Shirts</a></li>
                            <li><a href="Men/trousers">Trousers</a></li>
                            <li><a href="Men/shorts">Shorts</a></li>
                            <li><a href="Men/nightwear">Nightwear</a></li>
                            <li><a href="Men/shoes">Shoes</a></li>
                        </ul>
                    </li>
                    <li><a href="Kids">Kids</a>
                        <ul>
                            <li><a href="Kids/boys">Boys</a></li>
                            <li><a href="Kids/girls">Girls</a></li>
                        </ul>
                    </li>
                    <li><a href="Accessories">Accessories</a>
                        <ul>
                            <li><a href="Accessories/bags">Bags & Purses</a></li>
                            <li><a href="Accessories/hats">Hats</a></li>
                            <li><a href="Accessories/scarves">Scarves</a></li>
                            <li><a href="Accessories/gloves">Gloves</a></li>
                            <li><a href="Accessories/belts">Belts</a></li>
                            <li><a href="Accessories/watches">Watches</a></li>
                            <li><a href="Accessories/jewelry">Jewelry</a></li>
                            <li><a href="Accessories/sunglasses">Sunglasses</a></li>
                            <li><a href="Accessories/phone">Phone & Tablet Cases</a></li>
                        </ul>
                    </li>
                    <li><a href="Beauty">Beauty</a>
                        <ul>
                            <li><a href="Beauty/makeup">Makeup</a></li>
                            <li><a href="Beauty/hair">Hair</a></li>
                            <li><a href="Beauty/skincare">Skincare</a></li>
                            <li><a href="Beauty/nails">Nails</a></li>
                            <li><a href="Beauty/body">Body</a></li>
                            <li><a href="Beauty/gifts">Gifts</a></li>
                        </ul>
                    </li>
                    <li><a href="Homeware">Homeware</a>
                        <ul>
                            <li><a href="Homeware/living">Living room</a></li>
                            <li><a href="Homeware/bedroom">Bedroom</a></li>
                            <li><a href="Homeware/kitchen">Kitchen</a></li>
                            <li><a href="Homeware/bathroom">Bathroom</a></li>
                            <li><a href="Homeware/kids">Kids room</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <section class="main-content">
        <h1>Message : <span>{{ flash.output() }}</span></h1>
        <div class="row flex-container">
            <div class="span6">
                <h4 class="title"><span class="text">Information about my account</span></h4>
                <hr>
                <form action="{{ url('Account/update') }}" method="post">
                    <fieldset>
                        <div class="control-group">
                            <label for="userEmail" class="control-label">Username</label>
                            <div class="controls">
                                <input type="email" placeholder="Enter your email address" name="userEmail" id="userEmail" class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="passwordField2" class="control-label">Password</label>
                            <div class="controls">
                                <input name="passwordField2" id="passwordField2"  type="password" placeholder="Enter your password" class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <input tabindex="3" class="btn btn-inverse large" type="submit" value="Save">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="span6">
                <h4 class="title"><span class="text">Delete my account</span></h4>
                <hr>
                <form action="{{ url('Account/delete') }}" method="post" class="form-stacked">
                    <div class="flex-container">
                        <fieldset class="group1">
                            <div class="control-group">
                                <label for="emailAddress" class="control-label">Email address:</label>
                                <div class="controls">
                                    <input id="emailAddress" name="emailAddress" type="email" placeholder="Enter your email" class="input-xlarge" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="passwordField1" class="control-label">Password:</label>
                                <div class="controls">
                                    <input id="passwordField1" name="passwordField1" type="password" placeholder="Enter your password" class="input-xlarge" required>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="actions">
                        <input tabindex="9" class="btn btn-inverse large" type="submit" value="Delete">
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