<?php
/**
 * Created by PhpStorm.
 * User: RIDI
 * Date: 12/9/17
 * Time: 1:50 PM
 */

session_start();
$_SESSION["userName"] = "ridi";
$_SESSION["emailUser"] = "ridiluamba@gmail.com";
if(isset($_SESSION["userName"]) && isset($_SESSION["emailUser"])){
    header('location: realapp.php?result=3');
}

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- build:css css/main.css -->
        <!-- Default css of HTML5 BoilerTemplate -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <!-- Bootstrap CSS, Font-awesome CSS, Bootstrap-Social CSS and myStyle CSS -->
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
        <link rel="stylesheet" href="css/myStyle.css">
        <!-- endBuild -->
    </head>
    <body class="container">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Beginning of Web App Header -->
        <header class="row mt-1">
            <section class="container-fluid d-flex flex-row flex-nowrap justify-content-between align-items-center">
                <div id="divMenuIconApp" class="">
                    <span class="fa fa-bars fa-3x"></span>
                </div>
                <div id="divTitleApp" class="">
                    <h1 class="">TRAVEL GUIDE</h1>
                </div>
                <div id="divUserPicture" class="d-flex align-items-center">
                    <div class="mr-3 font-weight-bold">
                        <span id="spanStateLogin">
                            <?php
                                if(isset($_SESSION['userName']) && isset($_SESSION['emailUser'])){
                                    echo $_SESSION["userName"];
                                }
                                else{
                                    echo "Login";
                                    //echo "<script>window.location.href = 'index.php';</script>";
                                }
                            ?>
                        </span>
                    </div>
                    <div class="">
                        <span class="fa fa-user-circle fa-3x"></span>
                    </div>
                </div>
            </section>
        </header>
        <!-- End of Web App Header -->

        <!-- Beginning of Web App Body (Main Content) -->
        <main id="mainBodyApp" class="row">
<!----------------------------------------------------------------------------------------------------------------------
                                        MESSAGE
----------------------------------------------------------------------------------------------------------------------->
            <div id="signupMessage" class="row w-100 ml-2 mt-1">
                <div class="container-fluid text-center font-weight-bold">
                    <?php
                    if (isset($_GET['result']) && $_GET['result'] == 1){
                        // display message after insertion
                        echo "<div class='bg-success rounded'>"."Your account has been created successfully".
                            "<span class='closeMessage float-right mr-2'>
                                <i class='fa fa-times-circle-o' aria-hidden='true'></i>  
                             </span>".
                            "</div>";
                    }
                    else if (isset($_GET['result']) && $_GET['result'] == 2){
                        // display message after insertion failure
                        echo "<div class='bg-danger rounded'>"."Impossible to create your account. Please try again!".
                            "<span class='closeMessage float-right mr-2'>
                                        <i class='fa fa-times-circle-o' aria-hidden='true'></i>  
                                      </span>".
                            "</div>";
                    }else if (isset($_GET['result']) && $_GET['result'] == 4){
                        // display message after log in
                        echo "<div class='bg-danger' rounded'>"."Please make sure that you entered your email address and password correctly !".
                            "<span class='closeMessage float-right mr-2'>
                                       <i class='fa fa-times-circle-o' aria-hidden='true'></i>  
                                     </span>".
                            "</div>";
                    }
                    ?>
                </div>
            </div>
<!----------------------------------------------------------------------------------------------------------------------
                                        SECOND PAGE (LOGIN AND SIGN UP)
----------------------------------------------------------------------------------------------------------------------->
            <div id="loginSignupSection" class="container-fluid d-flex flex-column w-50">
                <!-- Beginning of "Login" section  -->
                <section id="loginSection" class="row mt-1 w-100 hidden">
                    <header class="container-fluid d-flex justify-content-between align-items-center font-weight-bold">
                        <div class="styleLoginSignup colorWhite ml-4" onclick="switchLoginSignup()">
                            <span>Login</span>
                        </div>
                        <div id="linkSignup" class="styleLoginSignup mr-4" onclick="switchLoginSignup()">
                            <span>Sign up</span>
                        </div>
                    </header>
                    <form method="post" action="phpfiles/login.php" id="loginForm" class="container-fluid">
                        <div class="d-flex flex-row mt-3">
                            <div class="w-25">
                                <label for="loginEmail">E-mail : </label>
                            </div>
                            <div class="input-group w-75">
                                <input id="loginEmail" name="loginEmail" type="email" class="form-control" placeholder="Email address"
                                       aria-label="Email" aria-describedby="basic-addon1" required>
                                <span class="input-group-addon" id="basic-addon1">
                                    <i class="fa fa-at" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-3 mb-3">
                            <div class="w-25">
                                <label for="loginPassword">Password : </label>
                            </div>
                            <div class="input-group w-75">
                                <input id="loginPassword" name="loginPassword" type="password" class="form-control" placeholder="password"
                                       aria-label="Password" aria-describedby="basic-addon2" required>
                                <span class="input-group-addon" id="basic-addon2">
                                    <i class=" fa fa-user-secret" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-3 mb-3">
                            <div class="w-25">
                                &nbsp;
                            </div>
                            <div class="w-25 ml-3">
                                <button type="submit" class="btn btn-block font-weight-bold">
                                    Connect
                                </button>
                            </div>
                            <div class="w-50 ml-5">
                                <a href="#" title="">
                                    <span>Forgot Password ?</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </section>
                <!-- End of "login" section  -->

                <!-- Beginning of "sign up" section  -->
                <section id="signupSection" class="row mt-1 w-100 hidden">
                    <header class="container-fluid d-flex justify-content-between align-items-center font-weight-bold">
                        <div class="styleLoginSignup colorWhite ml-4" onclick="switchLoginSignup()">
                            <span>Sign up</span>
                        </div>
                        <div id="linkLogin" class="styleLoginSignup mr-4" onclick="switchLoginSignup()">
                            <span>Login</span>
                        </div>
                    </header>
                    <form method="post" action="phpfiles/signup.php" id="signupForm" enctype="multipart/form-data" class="container-fluid">
                        <div class="d-flex flex-row mt-3">
                            <div class="w-25">
                                <label for="signupUname">Username : </label>
                            </div>
                            <div class="input-group w-75">
                                <input id="signupUname" name="signupUname" type="text" class="form-control" placeholder="User Name"
                                       aria-label="User Name" pattern="[A-Za-z0-9]{4,}" aria-describedby="basic-addon3" required>
                                <span class="input-group-addon" id="basic-addon3">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="w-25">
                                &nbsp;
                            </div>
                            <div class="w-75 ml-3">
                                <span class="example">E.g: Mamout (Enter at least 4 characters)</span>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-3">
                            <div class="w-25">
                                <label for="signupEmail">E-mail : </label>
                            </div>
                            <div class="input-group w-75">
                                <input id="signupEmail" name="signupEmail" type="email" class="form-control" placeholder="Email address"
                                       aria-label="Email address" aria-describedby="basic-addon5" required>
                                <span class="input-group-addon" id="basic-addon5">
                                    <i class="fa fa-at" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="w-25">
                                &nbsp;
                            </div>
                            <div class="w-75 ml-3">
                                <span class="example">E.g: sabr@gmail.com</span>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-3">
                            <div class="w-25">
                                <label for="signupPassword">Password : </label>
                            </div>
                            <div class="input-group w-75">
                                <input id="signupPassword" name="signupPassword" type="password" class="form-control" placeholder="password"
                                       aria-label="Password" pattern="[A-Za-z0-9]{8,}" aria-describedby="basic-addon6" required>
                                <span class="input-group-addon" id="basic-addon6">
                                    <i class=" fa fa-user-secret" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="w-25">
                                &nbsp;
                            </div>
                            <div class="w-75 ml-3">
                                <span class="example">E.g: tamam0017, 001tamam, ta001mami</span><br>
                                <span class="example"><strong>N.B: Enter at least 8 characters (digits and letters)</strong></span>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-3">
                            <div class="w-25">
                                <label for="signupAvatar">Avatar : </label>
                            </div>
                            <div class="input-group w-75">
                                <input id="signupAvatar" name="signupAvatar" type="file" class="form-control" placeholder="Upload image"
                                       aria-label="Profile Picture" aria-describedby="basic-addon8" accept="image/*">
                                <span class="input-group-addon" id="basic-addon8">
                                    <i class=" fa fa-file-image-o" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-3 mb-3">
                            <div class="w-25">
                                &nbsp;
                            </div>
                            <div class="w-25 ml-3">
                                <button type="submit" class="btn btn-block font-weight-bold">
                                    Submit
                                </button>
                            </div>
                            <div class="w-50 ml-5">
                                <a href="#" title="">
                                    <span>Privacy</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </section>
                <!-- End of "sign up" section  -->
            </div>
<!----------------------------------------------------------------------------------------------------------------------
                                        FIFTH PAGE ()
----------------------------------------------------------------------------------------------------------------------->
        </main>
        <!-- End of Web App Body -->

        <!-- Beginning of Web App Footer -->
        <footer class="row">
            <div class="container-fluid text-center">
                <span>&copy; 2017, power by SABR (Samuel, Adel, Ben and Ridi).</span>
                <span>All rights reserved</span>
            </div>
        </footer>
        <!-- End of Web App Footer -->

        <!-- build:js js/main.js -->
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Default js of HTML5 BoilerTemplate and myScript -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/index.js"></script>
        <!-- endBuild -->
    </body>
</html>
