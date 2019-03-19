<?php
/**
 * Created by PhpStorm.
 * User: RIDI
 * Date: 12/9/17
 * Time: 1:50 PM
 */
include_once "dbconect/User.php";
if ($_SESSION["firstName"] && $_SESSION['lastName'] && $_SESSION["emailUser"]){
    $findUser = new User();
    $findUser = $findUser ->find($_SESSION["firstName"], $_SESSION['lastName'], '%', '%');
    if($findUser){
        //print_r($findUser);
        if($findUser[0]->status === "inactive"){
            unset($_SESSION["firstName"], $_SESSION['lastName'], $_SESSION["emailUser"]);
            header('location: index.php');
        }
    }
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
                                if((isset($_SESSION['firstName']) && isset($_SESSION['lastName'])) && isset($_SESSION['emailUser'])){
                                    echo ucfirst($_SESSION['firstName'])." ".ucfirst($_SESSION['lastName']);
                                }
                                else{
                                    echo "Login";
                                    //echo "<script>window.location.href = 'index.php';</script>";
                                }
                            ?>
                        </span>
                        <span id="tempSpanStateLogin" class="hidden">
                            <?php
                                echo "Login";
                            ?>
                        </span>
                    </div>
                    <div class="">
                        <span class="fa fa-user-circle fa-3x"></span>
                    </div>
                </div>
            </section>
            <nav id="navigationMenu" class="container-fluid mt-0">
                <menu class="d-flex flex-nowrap justify-content-between font-weight-bold">
                    <div id="divItemHome" class="d-flex item-home align-items-center active">
                        <span>Home</span>
                    </div>
                    <div id="divReplyPlusNumber" class="d-flex">
                        <div class="item-reply">
                            <span>Replies</span>
                        </div>
                        <div class="ml-5 item-reply-number active">
                            <span>0</span>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <div  id="divItemSetting" class="d-flex">
                            <div class="item-setting">
                                <span>Account Settings</span>
                            </div>
                            <div class="ml-5 item-setting-icon">
                                <span class="fa fa-caret-down fa-2x"></span>
                            </div>
                        </div>
                        <div id="divDisconnect" class="text-center hidden">
                            <form method="post" action="phpfiles/logout.php" class="">
                                <button type="submit" class="btn btn-block">
                                    <span>Disconnect</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </menu>
            </nav>
        </header>
        <!-- End of Web App Header -->

        <!-- Beginning of Web App Body (Main Content) -->
        <main id="mainBodyApp" class="row">
<!----------------------------------------------------------------------------------------------------------------------
                                        SECOND PAGE (MESSAGE)
----------------------------------------------------------------------------------------------------------------------->
            <div id="signupMessage" class="row w-100 ml-2 mt-1">
                <div class="container-fluid text-center font-weight-bold">
                    <?php
                    if (isset($_GET['result']) && $_GET['result'] == 3){
                        // display message after log in
                        echo "<div class='bg-success rounded'>"."You have logged in successfully".
                            "<span class='closeMessage float-right mr-2'>
                                       <i class='fa fa-times-circle-o' aria-hidden='true'></i>  
                                     </span>".
                            "</div>";
                    }
                    ?>
                </div>
            </div>
<!----------------------------------------------------------------------------------------------------------------------
                                        FIRST PAGE (POSTS AND ACTIVITY)
----------------------------------------------------------------------------------------------------------------------->
            <div id="divPostActivity" class="container-fluid d-flex justify-content-between">
                <!-- Beginning of "all and recent post" section  -->
                <section id="postSection" class="container-fluid d-flex flex-column mt-1">
                    <header class="row d-flex justify-content-around align-items-center font-weight-bold">
                        <div class="stylePostActivity">
                            <span>Recent</span>
                        </div>
                        <div class="stylePostActivity active">
                            <span>All</span>
                        </div>
                    </header>
                    <div id="postUserID1" onclick="clickPostSection(this.id)" class="row mt-1 ml-1 mr-1">
                        <div class="container-fluid d-flex justify-content-between">
                            <div class="divMapIcon" onclick="showMapFromMapIcon(this);">
                                <span class="fa fa-map-marker fa-3x"></span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="">
                                    <span>199.221.221.0</span>
                                </div>
                                <div class="">
                                    <span>VENICE GLAM</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="">
                                    <span>3h</span>
                                </div>
                                <div class="divCommentIcon">
                                    <span class="fa fa-commenting fa-2x"></span>
                                </div>
                            </div>
                        </div>
                        <!-- Beginning of the comment section -->
                        <div class="">

                        </div>
                        <!-- End of the comment section -->
                    </div>
                    <div id="postUserID2" onclick="clickPostSection(this.id)" class="row mt-1 ml-1 mr-1">
                        <div class="container-fluid d-flex justify-content-between">
                            <div class="divMapIcon" onclick="showMapFromMapIcon();">
                                <span class="fa fa-map-marker fa-3x"></span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="">
                                    <span>199.221.221.0</span>
                                </div>
                                <div class="">
                                    <span>VENICE GLAM</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="">
                                    <span>3h</span>
                                </div>
                                <div class="divCommentIcon">
                                    <span class="fa fa-commenting fa-2x"></span>
                                </div>
                            </div>
                        </div>
                        <!-- Beginning of the comment section -->
                        <div class="">

                        </div>
                        <!-- End of the comment section -->
                    </div>
                    <div id="postUserID3" onclick="clickPostSection(this.id)" class="row mt-1 ml-1 mr-1">
                        <div class="container-fluid d-flex justify-content-between">
                            <div class="divMapIcon" onclick="showMapFromMapIcon();">
                                <span class="fa fa-map-marker fa-3x"></span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="">
                                    <span>199.221.221.0</span>
                                </div>
                                <div class="">
                                    <span>VENICE GLAM</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="">
                                    <span>3h</span>
                                </div>
                                <div class="divCommentIcon">
                                    <span class="fa fa-commenting fa-2x"></span>
                                </div>
                            </div>
                        </div>
                        <!-- Beginning of the comment section -->
                        <div class="">

                        </div>
                        <!-- End of the comment section -->
                    </div>
                    <div id="postUserID4" onclick="clickPostSection(this.id)" class="row mt-1 ml-1 mr-1">
                        <div class="container-fluid d-flex justify-content-between">
                            <div class="divMapIcon" onclick="showMapFromMapIcon();">
                                <span class="fa fa-map-marker fa-3x"></span>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="">
                                    <span>199.221.221.0</span>
                                </div>
                                <div class="">
                                    <span>VENICE GLAM</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="">
                                    <span>3h</span>
                                </div>
                                <div class="divCommentIcon">
                                    <span class="fa fa-commenting fa-2x"></span>
                                </div>
                            </div>
                        </div>
                        <!-- Beginning of the comment section -->
                        <div class="">

                        </div>
                        <!-- End of the comment section -->
                    </div>
                </section>
                <!-- End of "all and recent post" section  -->

                <!-- Beginning of "activities" section  -->
                <section id="activitySection" class="container-fluid d-flex flex-column mt-1">

                    <header class="row font-weight-bold align-items-center">
                        <div class="stylePostActivity ml-5">
                            <span>Activity</span>
                        </div>
                    </header>

                    <div class="row mt-1 ml-1 mr-1 reply-border">
                        <div class="container-fluid">
                            <div class="row d-flex flex-column">
                                <div class="d-flex justify-content-between ml-2 mr-2">
                                    <div class="">
                                        <span>You replied to :</span>
                                    </div>
                                    <div class="">
                                        <span>Nov 11</span>
                                    </div>
                                </div>
                                <div id="activityUserID1" onclick="clickPostSection(this.id)" class="mt-4 ml-2 mr-2 border-solid">
                                    <div class="container-fluid d-flex justify-content-between">
                                        <div class="divMapIcon" onclick="showMapFromMapIcon();">
                                            <span class="fa fa-map-marker fa-3x"></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <div class="">
                                                <span>199.221.221.0</span>
                                            </div>
                                            <div class="">
                                                <span>VENICE GLAM</span>
                                            </div>
                                        </div>
                                        <div class="">
                                            <span>3h</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row ml-1 mr-1 post-border">
                        <div class="container-fluid">
                            <div class="row d-flex flex-column">
                                <div class="d-flex justify-content-between ml-2 mr-2">
                                    <div class="">
                                        <span>You posted a location :</span>
                                    </div>
                                    <div class="">
                                        <span>Nov 10</span>
                                    </div>
                                </div>
                                <div id="activityUserID2" onclick="clickPostSection(this.id)" class="mt-4 ml-2 mr-2 border-solid">
                                    <div class="container-fluid d-flex justify-content-between">
                                        <div class="divMapIcon">
                                            <span class="fa fa-map-marker fa-3x"></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <div class="">
                                                <span>199.221.221.0</span>
                                            </div>
                                            <div class="">
                                                <span>VENICE GLAM</span>
                                            </div>
                                        </div>
                                        <div class="">
                                            <span>3h</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- End of "activities" section  -->
            </div>
<!----------------------------------------------------------------------------------------------------------------------
                                        SECOND PAGE (LOGIN AND SIGN UP)
----------------------------------------------------------------------------------------------------------------------->
            <div id="loginSignupSection" class="container-fluid d-flex flex-column w-50">
                <!-- Beginning of "all and recent post" section  -->
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
                <!-- End of "all and recent post" section  -->

                <!-- Beginning of "activities" section  -->
                <section id="signupSection" class="row mt-1 w-100 hidden">
                    <header class="container-fluid d-flex justify-content-between align-items-center font-weight-bold">
                        <div class="styleLoginSignup colorWhite ml-4" onclick="switchLoginSignup()">
                            <span>Sign up</span>
                        </div>
                        <div id="linkLogin" class="styleLoginSignup mr-4" onclick="switchLoginSignup()">
                            <span>Login</span>
                        </div>
                    </header>
                    <form method="post" action="phpfiles/signup.php" id="signupForm" class="container-fluid">
                        <div class="d-flex flex-row mt-3">
                            <div class="w-25">
                                <label for="signupFname">First Name : </label>
                            </div>
                            <div class="input-group w-75">
                                <input id="signupFname" name="signupFname" type="text" class="form-control" placeholder="First Name"
                                       aria-label="First Name" aria-describedby="basic-addon3" required>
                                <span class="input-group-addon" id="basic-addon3">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-1">
                            <div class="w-25">
                                <label for="signupLname">Last Name : </label>
                            </div>
                            <div class="input-group w-75">
                                <input id="signupLname" name="signupLname" type="text" class="form-control" placeholder="First Name"
                                       aria-label="First Name" aria-describedby="lname-basic-addon3" required>
                                <span class="input-group-addon" id="lname-basic-addon3">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-1">
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
                        <div class="d-flex flex-row mt-1">
                            <div class="w-25">
                                <label for="signupPhone">Mobile Phone : </label>
                            </div>
                            <div class="input-group w-75">
                                <input id="signupPhone" name="signupPhone" type="tel" class="form-control" placeholder="Phone Number"
                                       aria-label="Phone Number" aria-describedby="basic-addon7" required>
                                <span class="input-group-addon" id="basic-addon7">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-1">
                            <div class="w-25">
                                <label for="signupPassword">Password : </label>
                            </div>
                            <div class="input-group w-75">
                                <input id="signupPassword" name="signupPassword" type="password" class="form-control" placeholder="password"
                                       aria-label="Password" aria-describedby="basic-addon6" required>
                                <span class="input-group-addon" id="basic-addon6">
                                    <i class=" fa fa-user-secret" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-1">
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
                        <div class="d-flex flex-row mt-3 mb-2">
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
                <!-- End of "activities" section  -->
            </div>
<!----------------------------------------------------------------------------------------------------------------------
                                        THIRD PAGE (REPLIES)
----------------------------------------------------------------------------------------------------------------------->
            <div id="divReplySection" class="container-fluid hidden">
                <!-- Beginning of "replies" section  -->
                <section id="replySection" class="container-fluid">

                    <header class="row font-weight-bold align-items-center">
                        <div class="stylePostActivity ml-4">
                            <span>REPLIES</span>
                        </div>
                    </header>

                    <div class="row mt-1 ml-1 mr-1 mb-1 mainContainerReply reply-border">
                        <div class="container-fluid first-outer-div">
                            <div class="row d-flex flex-column second-outer-div">
                                <div class="ml-3">
                                    <span class="nameUserReply">OLUCHUWUKU</span>
                                    <span>has reply to your post</span>
                                </div>
                                <div id="replyPostUserID1" onclick="clickPostSection(this.id)" class="mt-2 ml-1 mr-1 border-solid">
                                    <div class="container-fluid d-flex justify-content-between">
                                        <div class="divMessage w-75">
                                            <span class="">Been there before, was a nice experience Been there before, was a nice experience Been there before, was a nice experience Been there before, was a nice experience</span>
                                        </div>
                                        <div class="divLocationInfo d-flex justify-content-around align-items-center w-25">
                                            <div class="d-flex flex-column reply-border">
                                                <div class="">
                                                    <span>199.221.221.0</span>
                                                </div>
                                                <div class="">
                                                    <span>CARCAS SUN</span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <span>3h</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-1 ml-1 mr-1 mb-1 mainContainerReply reply-border">
                        <div class="container-fluid first-outer-div">
                            <div class="row d-flex flex-column second-outer-div">
                                <div class="ml-3">
                                    <span class="nameUserReply">OLUCHUWUKU</span>
                                    <span>has reply to your post</span>
                                </div>
                                <div id="replyPostUserID2" onclick="clickPostSection(this.id)" class="mt-2 ml-1 mr-1 border-solid">
                                    <div class="container-fluid d-flex justify-content-between">
                                        <div class="divMessage w-75">
                                            <span class="">Been there before, was a nice experience Been there before, was a nice experience Been there before, was a nice experience Been there before, was a nice experience</span>
                                        </div>
                                        <div class="divLocationInfo d-flex justify-content-around align-items-center w-25">
                                            <div class="d-flex flex-column reply-border">
                                                <div class="">
                                                    <span>199.221.221.0</span>
                                                </div>
                                                <div class="">
                                                    <span>CARCAS SUN</span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <span>3h</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-1 ml-1 mr-1 mb-1 mainContainerReply reply-border">
                        <div class="container-fluid first-outer-div">
                            <div class="row d-flex flex-column second-outer-div">
                                <div class="ml-3">
                                    <span class="nameUserReply">OLUCHUWUKU</span>
                                    <span>has reply to your post</span>
                                </div>
                                <div id="replyPostUserID3" onclick="clickPostSection(this.id)" class="mt-2 ml-1 mr-1 border-solid">
                                    <div class="container-fluid d-flex justify-content-between">
                                        <div class="divMessage w-75">
                                            <span class="">Been there before, was a nice experience Been there before, was a nice experience Been there before, was a nice experience Been there before, was a nice experience</span>
                                        </div>
                                        <div class="divLocationInfo d-flex justify-content-around align-items-center w-25">
                                            <div class="d-flex flex-column reply-border">
                                                <div class="">
                                                    <span>199.221.221.0</span>
                                                </div>
                                                <div class="">
                                                    <span>CARCAS SUN</span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <span>3h</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- End of "replies" section  -->
            </div>
<!----------------------------------------------------------------------------------------------------------------------
                                        FOURTH PAGE (POST + COMMENT)
----------------------------------------------------------------------------------------------------------------------->
            <div id="divPostComment" class="container-fluid d-flex justify-content-between">
                <!-- Beginning of "all and recent post" section  -->
                <section id="anyUserPostSection" class="container-fluid d-flex flex-column mt-1">
                    <header class="row d-flex justify-content-around align-items-center font-weight-bold">
                        <div class="container-fluid d-flex justify-content-between">
                            <div class="d-flex flex-column ml-4">
                                <div class="">
                                    <span>199.221.221.0</span>
                                </div>
                                <div class="">
                                    <span>VENICE GLAM</span>
                                </div>
                            </div>
                            <div id="showMapSlide" onclick="switwhSlideMap(this.firstElementChild);" class="mr-4">
                                <span class="fa fa-map fa-2x"></span>
                            </div>
                        </div>
                    </header>
                    <div class="row mt-1">
                        <!-- Beginning of the comment section -->
                        <div class="container-fluid d-flex flex-column">
                            <div id="divContainerSlider" class="">
                                <div id="carouselPlaceImage" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselPlaceImage" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselPlaceImage" data-slide-to="1"></li>
                                        <li data-target="#carouselPlaceImage" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="img/slide/img1.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/slide/img2.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/slide/img3.jpg" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselPlaceImage" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselPlaceImage" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div id="userPlacePicture" class="p-2">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <span class="fa fa-user-circle fa-3x"></span>
                                        </div>
                                        <div class="ml-3">
                                            <div class="font-weight-bold">
                                                John Doe
                                            </div>
                                            <div>
                                                BEST PLACE !!!!!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <span class="">NOV 11</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of the comment section -->

                        <!--  -->
                        <div id="containerMap" class="hidden">
                            <img src="img/samplemap.jpg" class="img-fluid">
                        </div>
                        <!--  -->

                    </div>
                </section>
                <!-- End of "all and recent post" section  -->

                <!--  -->
                <div id="containerMap" class="row hidden">
                    <div class="container-fluid">
                        <img src="img/samplemap.jpg" class="img-fluid">
                    </div>
                </div>
                <!--  -->

                <!-- Beginning of "activities" section  -->
                <section id="anyUserCommentSection" class="container-fluid d-flex flex-column mt-1">

                    <header class="row font-weight-bold align-items-center">
                        <div class="stylePostActivity ml-1">
                            <span>Comments</span>
                        </div>
                    </header>

                    <div class="row">
                        <div class="container-fluid d-flex flex-column">
                            <div id="nameUserComment" class="">
                                <span>Oluchuwuku</span>
                            </div>
                            <div id="divAllComment" class="d-flex flex-column mt-2 p-2">
                                <div class="">
                                    <p class="">
                                        Lol nice place !
                                    </p>
                                </div>
                                <div class="divUserNameReply d-flex flex-column pl-2 pr-2 mt-0">
                                    <div class="">
                                        <span>USER1211</span>
                                    </div>
                                    <div class="">
                                        <p class="mb-1">
                                            I agree :)
                                        </p>
                                    </div>
                                </div>
                                <div class="divUserNameReply d-flex flex-column pl-2 pr-2">
                                    <div class="">
                                        <span>USER1211</span>
                                    </div>
                                    <div class="">
                                        <p class="mb-1">
                                            I agree :)
                                        </p>
                                    </div>
                                </div>
                                <div class="divUserNameReply d-flex flex-column pl-2 pr-2">
                                    <div class="">
                                        <span>USER1211</span>
                                    </div>
                                    <div class="">
                                        <p class="mb-1">
                                            I agree :)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="divReplyForm">
                                <form action="#" class="replyForm mt-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type your reply here"
                                               aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <button type="submit" class="input-group-addon">
                                            <i class="fa fa-paper-plane fa-rotate-90"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- End of "activities" section  -->
            </div>
<!----------------------------------------------------------------------------------------------------------------------
                                        FIFTH PAGE (NEW POST)
----------------------------------------------------------------------------------------------------------------------->
            <div id="divNewPost" class="container-fluid hidden">
                <!-- Beginning of "replies" section  -->
                <section id="pinSection" class="container-fluid mt-1 mb-1">

                    <header class="row font-weight-bold align-items-center">
                        <div class="stylePostActivity ml-4">
                            <span>NEW POST</span>
                        </div>
                    </header>

                    <div class="d-flex justify-content-between mt-1">
                        <div class="d-flex flex-column w-50">
                            <div id="subTitlePost" class="d-flex  align-items-center justify-content-between">
                                <div class="ml-2">
                                    <span>Pin it !</span>
                                </div>
                                <div class="mr-2">
                                    <span class="fa fa-picture-o fa-2x"></span>
                                </div>
                            </div>
                            <div class="m-2">
                                <img src="img/samplemap.jpg" class="img-fluid">
                            </div>
                        </div>
                        <form class="d-flex flex-column justify-content-between w-50 ml-3">
                            <div class="form-group">
                                <label for="titlePlace" class="font-weight-bold">Title : </label>
                                <div class="input-group">
                                    <input type="text" id="titlePlace" class="form-control" placeholder="Type your place title here"
                                           aria-label="title-place" aria-describedby="titlePlace" required>
                                    <span class="input-group-addon"><i class="fa fa-align-justify" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="labelPlaceImage" class="font-weight-bold">Comment</label>
                                <textarea class="form-control" id="labelPlaceImage" rows="2" required></textarea>
                            </div>
                            <label class="custom-file">
                                <span class="custom-file-control fa fa-paperclip"></span>
                                <input type="file" id="uploadImage" class="custom-file-input form-control-lg" accept="image/*"
                                       multiple required>
                            </label>
                            <div class="align-self-end d-flex">
                                <div class="divSubmitButton">
                                    <button type="submit" class="btn">Post</button>
                                </div>
                                <div class="divResetButton ml-3">
                                    <button type="reset" class="">
                                        <i class="fa fa-times-circle fa-3x"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                <!-- End of "replies" section  -->
            </div>
<!----------------------------------------------------------------------------------------------------------------------
                                        SIXTH PAGE (ACCOUNT SETTINGS)
----------------------------------------------------------------------------------------------------------------------->
            <div id="divEditAccountSection" class="container-fluid d-flex justify-content-center mb-2 w-100">
                <!-- Beginning of "activities" section  -->
                <section id="editAccountSection" class="row mt-1 w-75 hidden">
                    <header class="container-fluid d-flex justify-content-between align-items-center font-weight-bold">
                        <div class="styleLoginSignup colorWhite ml-4">
                            <span>Edit Parameters</span>
                        </div>
                    </header>
                    <form id="editAccountForm" class="container-fluid">
                        <div class="d-flex flex-row mt-2">
                            <div class="w-25">
                                <label for="editFname">First Name : </label>
                            </div>
                            <div class="input-group w-75">
                                <input id="editFname" name="editFname" type="text" class="form-control" placeholder="First Name"
                                       aria-label="First Name" aria-describedby="span-basic-addon3" disabled="disabled">
                                <span class="input-group-addon" id="span-basic-addon3">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="divEditButton ml-3" onclick="enableEditAccount(this.previousElementSibling.firstElementChild, this.firstElementChild)">
                                <span class="fa fa-pencil-square-o fa-3x" state="off"></span>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="w-25">
                                <label for="editEmail">E-mail : </label>
                            </div>
                            <div class="input-group w-75">
                                <input id="editEmail" name="editEmail" type="email" class="form-control" placeholder="Email address"
                                       aria-label="Email address" aria-describedby="basic-addon5" disabled="disabled">
                                <span class="input-group-addon" id="span-basic-addon5">
                                    <i class="fa fa-at" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="divEditButton ml-3" onclick="enableEditAccount(this.previousElementSibling.firstElementChild, this.firstElementChild)">
                                <span class="fa fa-pencil-square-o fa-3x" state="off"></span>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2 mb-3">
                            <div class="w-25">
                                <label for="editPassword">Password : </label>
                            </div>
                            <div class="input-group w-75">
                                <input id="editPassword" name="editPassword" type="password" class="form-control" placeholder="password"
                                       aria-label="Password" aria-describedby="span-basic-addon6" disabled="disabled">
                                <span class="input-group-addon" id="span-basic-addon6">
                                    <i class=" fa fa-user-secret" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="divEditButton ml-3" onclick="enableEditAccount(this.previousElementSibling.firstElementChild, this.firstElementChild)">
                                <span class="fa fa-pencil-square-o fa-3x" state="off"></span>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="w-25">
                                <label for="editPhone">Mobile Phone : </label>
                            </div>
                            <div class="input-group w-75">
                                <input id="editPhone" name="editPhone" type="tel" class="form-control" placeholder="Phone Number"
                                       aria-label="Phone Number" aria-describedby="span-basic-addon7" disabled="disabled">
                                <span class="input-group-addon" id="span-basic-addon7">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="divEditButton ml-3"  onclick="enableEditAccount(this.previousElementSibling.firstElementChild, this.firstElementChild)">
                                <span class="fa fa-pencil-square-o fa-3x" state="off"></span>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2 mb-3">
                            <div class="w-25">
                                <label for="editAvatar">Avatar : </label>
                            </div>
                            <div class="input-group w-75">
                                <input id="editAvatar" name="editAvatar" type="file" class="form-control" placeholder="Upload image"
                                       aria-label="Profile Picture" aria-describedby="span-basic-addon8" accept="image/*" disabled="disabled">
                                <span class="input-group-addon" id="span-basic-addon8">
                                    <i class=" fa fa-file-image-o" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="divEditButton ml-3" onclick="enableEditAccount(this.previousElementSibling.firstElementChild, this.firstElementChild)">
                                <span class="fa fa-pencil-square-o fa-3x" state="off"></span>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2 mb-3">
                            <div class="w-25">
                                &nbsp;
                            </div>
                            <div class="w-25">
                                <button type="submit" class="btn btn-block font-weight-bold">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </section>
                <!-- End of "activities" section  -->
            </div>
<!----------------------------------------------------------------------------------------------------------------------
                                        FIFTH PAGE ()
----------------------------------------------------------------------------------------------------------------------->
        </main>
        <!-- End of Web App Body -->

        <!-- Beginning of Adding post button of the web app -->
        <aside class="row">
            <!--<div id="divIconDisconnect" class="">
                <span class="fa fa-plus-circle fa-5x"></span>
            </div>-->
            <div id="divIconNewPost" class="">
                <span class="fa fa-plus-circle fa-5x"></span>
            </div>
        </aside>
        <!-- End of Adding post button of the web app -->

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
        <script src="js/realapp.js"></script>
        <!-- endBuild -->
    </body>
</html>
