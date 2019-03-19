<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
        <!-- bootstrap -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="themes/css/bootstrappage.css" rel="stylesheet"/>
        <link href="themes/css/jquery.fancybox.min.css" rel="stylesheet"/>
        <!-- global styles -->
        <link href="themes/css/flexslider.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link href="css/main.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <link href="css/responsiveStyle.css" rel="stylesheet"/>
        <!-- scripts -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/respond.min.js"></script>
    </head>
    <body>
        {{ content() }}
        <section id="footer-bar">
        <div class="row small" style="margin-left: 70px">
            <div class="col-sm-3">
                <h4>Other Links</h4>
                <ul class="nav">
                    <!-- Trigger the about us modal with a button -->
                    <li><a href="#aboutUs" data-toggle="modal" data-target="#aboutUs">About Us</a></li>
                    <!-- Trigger the faqs modal with a button -->
                    <li><a href="#faqs" data-toggle="modal" data-target="#faqs">FAQs</a></li>
                    <!-- Trigger the t&cs modal with a button -->
                    <li><a href="#tcs" data-toggle="modal" data-target="#tcs">T&Cs</a></li>
                    <!-- Trigger the privacy & policy modal with a button -->
                    <li><a href="#privacyPolicy" data-toggle="modal" data-target="#privacyPolicy">Privacy & Policy</a></li>
                </ul>
            </div>
            <!-- About Us Modal -->
            <section>
                <div id="aboutUs" class="modal fade" role="dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">About Us</h4>
                        </div>
                        <div class="modal-body">
                            <h1>Where does it come from?</h1>
                            <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                            </p>
                            <p>
                                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                            </p>
                            <h1>Why do we use it?</h1>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                            </p>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <span class="">&copy; 2018 www.alipgit.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- FAQS Modal -->
            <section>
                <div id="faqs" class="modal fade" role="dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">FAQS</h4>
                        </div>
                        <div class="modal-body">
                            <h1>Where does it come from?</h1>
                            <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                            </p>
                            <p>
                                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                            </p>
                            <h1>Why do we use it?</h1>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                            </p>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <span class="">&copy; 2018 www.alipgit.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- FAQS Modal -->
            <section>
                <div id="tcs" class="modal fade" role="dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">T&CS</h4>
                        </div>
                        <div class="modal-body">
                            <h1>Where does it come from?</h1>
                            <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                            </p>
                            <p>
                                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                            </p>
                            <h1>Why do we use it?</h1>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                            </p>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <span class="">&copy; 2018 www.alipgit.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- FAQS Modal -->
            <section>
                <div id="privacyPolicy" class="modal fade" role="dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Privacy & Policy</h4>
                        </div>
                        <div class="modal-body">
                            <h1>Where does it come from?</h1>
                            <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                            </p>
                            <p>
                                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                            </p>
                            <h1>Why do we use it?</h1>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                            </p>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <span class="">&copy; 2018 www.alipgit.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="col-sm-3">
                <h4>Other Links</h4>
                <ul class="nav">
                    <li><a href="#">Delivery</a></li>
                    <li><a href="#">Returns & Exchange</a></li>
                    <li><a href="#">Size Guide</a></li>
                    <li><a href="#">Track Your Order</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h4>Navigation</h4>
                <ul class="nav">
                    <li><a href="Index">Home Page</a></li>
                    <li><a href="Cart">My Bag</a></li>
                    <li><a href="Register">My Account</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h4>Follow Us</h4>
                <ul class="nav">
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Pinterest</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section id="copyright">
        <div class="row">
            <div class="container-fluid">
                <div class="col-md-7 col-md-offset-1">
                    <span >Copyright <?php echo date("Y");?> Alipgit  All right reserved.</span>
                </div>
                <div class="col-md-3 col-xs-pull-0">
                    <span>Developped by <a href="http://www.technoparcsystems.com/en.php" target="_blank">TechnoParc Systems</a></span>
                </div>
            </div>
        </div>
    </section>
    <br>
    <script src="themes/js/jquery.flexslider-min.js"></script>
    <script src="themes/js/myScript.js"></script>
    </body>
</html>
