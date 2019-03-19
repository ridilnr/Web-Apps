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
</head>
<body>
<div id="top-bar" class="container">
    <div class="row">
        <div class="span5 col-md-4">
            <form method="POST" action="{{ url('index/set_search') }}" class="search_form searchBar">
                <input name="search" id="autocomp" type="text" class="input-block-level search-query" list="list1">
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
                        echo '<li><a href="Update"><span>My Account</span>&nbsp; <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></li>';
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
<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a  id="idLogo" href="index" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
            <nav id="menu" class="pull-right">
                <ul class="categoryMenu">
                    <li><a href="Newest?page=1">New In</a>
                    </li>
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
    <section class="header_text sub">
        <h4><span>Contact Us</span></h4>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <div>
                    <h5>CONTACT INFORMATION</h5>
                    <p><strong>Phone:</strong>&nbsp;(+90)5488235777<br>
                        <strong>Mobile:</strong>&nbsp;(+90)5488235777<br>
                        <strong>Email:</strong>&nbsp;<a href="#">firuzeosman@yahoo.com</a>
                    </p>
                    <h5>OFFICE ADDRESS</h5>
                    <p><strong>Phone:</strong>&nbsp;(+90)5488235777<br>
                        <strong>Mobile:</strong>&nbsp;(+90)5488235777<br>
                        <strong>Email:</strong>&nbsp;<a href="#">firuzeosman@yahoo.com</a>
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                Send us an email and receive detailed information about the services we offer on the island of North Cyprus
                <form method="post" action="#">
                    <fieldset>
                        <div class="clearfix">
                            <label for="name"><span>Name:</span></label>
                            <div class="input">
                                <input tabindex="1" size="18" id="name" name="name" type="text" value="" class="input-xlarge" placeholder="Name">
                            </div>
                        </div>

                        <div class="clearfix">
                            <label for="email"><span>Email:</span></label>
                            <div class="input">
                                <input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge" placeholder="Email Address">
                            </div>
                        </div>

                        <div class="clearfix">
                            <label for="message"><span>Message:</span></label>
                            <div class="input">
                                <textarea tabindex="3" class="input-xlarge" id="message" name="body" rows="7" placeholder="Message"></textarea>
                            </div>
                        </div>

                        <div class="actions">
                            <button tabindex="3" type="submit" class="btn btn-inverse">Send message</button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-sm-2"></div>
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
            location.href = "checkout";
        })
    });
</script>
</body>
</html>