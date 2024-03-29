<?php
/**
 * Created by PhpStorm.
 * User: RIDI
 * Date: 12/9/17
 * Time: 1:50 PM
 */
require_once "dbconect/User.php";
require_once "dbconect/Place.php";
require_once "dbconect/Comment.php";
require_once "dbconect/Reply.php";
require_once "dbconect/Image.php";
include_once "phpfiles/checkstatus.php";

include_once "comment/functions.php";

if(isset($_POST['commentpl'])) {
    setReplys($_POST['commentpl']);
    echo"<script> runInitialize();</script>";
}

if(isset($_POST['cmtsub']))
    setComments();

if(isset($_POST['update'])) {
    updatepost();
    echo"<script> runInitialize();</script>";
}

if(isset($_POST['replySubmit'])) {
    setchildReplys();
    echo"<script> runInitialize();</script>";
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
    <body class="container" id="divMainBodyApp">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Beginning of Web App Header -->
        <header class="row mt-1">
            <section class="container-fluid d-flex flex-row flex-nowrap justify-content-between align-items-center">
                <div id="divMenuIconApp" class="">
                    <span class="fa fa-bars fa-3x"></span>
                </div>
                <div id="divTitleApp" class="" Recent >
                    <h1 class="">TRAVEL GUIDE</h1>
                </div>
                <div id="divUserPicture" class="d-flex align-items-center">
                    <div class="mr-3 font-weight-bold">
                        <span id="spanStateLogin">
                            <?php
                                if(isset($_SESSION['userName']) && isset($_SESSION['emailUser'])){
                                    echo ucfirst($_SESSION['userName']);
                                }
                                else{
                                    echo "Login";
                                    //echo "<script>window.location.href = 'index.php';</script>";
                                }
                            ?>
                        </span>
                        <span id="tempSpanStateLogin" class="hidden">Login</span>
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
                            <?php
                            $user = User::findThis($_SESSION["iduser"]);
                            $com = Comment::find("$",$user->userid);
                            $lng = 0;
                            if (!empty($com))
                                foreach ($com as $item)
                                    $lng++;
                            echo"
                            <span>$lng</span>";
                            ?>
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
                    if(isset($_GET['result']) && $_GET['result'] == 3){
                        // display message after log in
                        echo "<div class='bg-success rounded'>"."You have logged in successfully".
                            "<span class='closeMessage float-right mr-2'>
                                       <i class='fa fa-times-circle-o' aria-hidden='true'></i>  
                                     </span>".
                            "</div>";
                    }elseif(isset($_GET['result']) && $_GET['result'] == 5){
                        // display message after log in
                        echo "<div class='bg-success rounded'>"."Your account has been updated successfully".
                            "<span class='closeMessage float-right mr-2'>
                                       <i class='fa fa-times-circle-o' aria-hidden='true'></i>  
                                     </span>".
                            "</div>";
                    }elseif(isset($_GET['result']) && $_GET['result'] == 6){
                        // display message after log in
                        echo "<div class='bg-danger rounded'>"."Impossible to update your account. Try again or contact the admin".
                            "<span class='closeMessage float-right mr-2'>
                                       <i class='fa fa-times-circle-o' aria-hidden='true'></i>  
                                     </span>".
                            "</div>";
                    }
                    unset($_GET['result']);
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
                    <div id="divInformationPlace" class="container-fluid scrollable">
                        <?php
                        $plc = Place::findAll();
                        foreach ($plc as $pl) {
                            echo "
                        <div id='" . $pl->placeid. "' onclick='clickPostSection(this.id)' class='boxPlace row mt-1'>
                            <div class='container-fluid d-flex justify-content-between'>
                                <div class='divMapIcon' onclick='showMapFromMapIcon(this);'>
                                    <span class='fa fa-map-marker fa-3x'></span>
                                </div>
                                <div class='d-flex flex-column'>
                                    <div class=''>
                                        <span>$pl->pname</span>
                                    </div>
                                    <div class=''>
                                        <span>".$pl->description."</span>
                                    </div>
                                </div>
                                <div class='d-flex flex-column'>
                                    <div class=''>
                                        <span>".$pl->timet." \\ ".$pl->dated."</span>
                                    </div>
                                    <div class='divCommentIcon'>
                                        <span class='fa fa-commenting fa-2x'></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Beginning of the comment section -->
                            <div class=''>

                            </div>
                            <!-- End of the comment section -->
                        </div>";
                        }
                        ?>
                    </div>
                </section>
                <!-- End of "all and recent post" section  -->

                <!-- Beginning of "activities" section  -->
                <section id="activitySection" class="container-fluid d-flex flex-column mt-1">

                    <header class="row font-weight-bold align-items-center">
                        <div class="ml-5">
                            <span>Activity</span>
                        </div>
                    </header>

                    <div id="replyActivity" class="row ml-1 mr-1 reply-border">
                        <div id="containerReplyActivity" class="container-fluid">
                            <div class="">
                                <span>You replied to :</span>
                            </div>
                            <div class="container-fluid scrollable">
                                <?php
                                $user = User::findThis($_SESSION["iduser"]);
                                if ($user) {
                                    $rep = Reply::find("%",$user->userid);
                                    if(!empty($rep)){
                                        foreach ($rep as $rp){
                                            $com = Comment::findThis($rp->commentid);
                                            $plce = Place::findThis($com->placeid);
                                    echo "
                                <div class='row d-flex flex-column'>
                                    <div class='align-self-end mr-2'>
                                        <span>$rp->dated</span>
                                    </div>
                                    <div id='$plce->placeid' onclick='window.location = \"realapp.php?plc=\"+this.id;' class='mt-2 ml-2 mr-2 border-solid'>
                                        <div class='container-fluid d-flex justify-content-between'>
                                            <div class='divMapIcon' onclick='showMapFromMapIcon();'>
                                                <span class='fa fa-map-marker fa-3x'></span>
                                            </div>
                                            <div class='d-flex flex-column'>
                                                <div class=''>
                                                    <span>$user->fname</span>
                                                </div>
                                                <div class=''>
                                                    <span>$rp->message</span>
                                                </div>
                                            </div>
                                            <div class=''>
                                                <span>$rp->timet</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>";}
                                        }
                                    else
                                    echo "<div class='bg-info text-white text-center rounded'>"."You have no reply to a comment!!!".
                                        "<span class='closeMessage float-right mr-2'>
                                       <i class='fa fa-times-circle-o' aria-hidden='true'></i>  
                                     </span>".
                                        "</div>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div id="postActivity" class="row ml-1 mr-1 post-border">
                        <div id="containerPostActivity" class="container-fluid">
                            <div class="">
                                <span>You posted a location :</span>
                            </div>
                            <div class="container-fluid scrollable">
                                <?php
                                $user = User::findThis($_SESSION["iduser"]);
                                if ($user) {
                                    $Place = Place::find("%","%",$user->userid);
                                    if(!empty($Place)){
                                        foreach ($Place as $rp)
                                            echo "
                                <div class='row d-flex flex-column'>
                                    <div class='align-self-end mr-2'>
                                        <span>$rp->dated</span>
                                    </div>
                                    <div id='$rp->placeid' onclick='window.location = \"realapp.php?plc=\"+this.id;' class='mt-2 ml-2 mr-2 border-solid'>
                                        <div class='container-fluid d-flex justify-content-between'>
                                            <div class='divMapIcon' onclick='showMapFromMapIcon();'>
                                                <span class='fa fa-map-marker fa-3x'></span>
                                            </div>
                                            <div class='d-flex flex-column'>
                                                <div class=''>
                                                    <span>$user->fname</span>
                                                </div>
                                                <div class=''>
                                                    <span>$rp->description</span>
                                                </div>
                                            </div>
                                            <div class=''>
                                                <span>$rp->timet</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>";}
                                    else
                                    echo "<div class='bg-info text-white text-center rounded'>"."You have no location posted!!!".
                                        "<span class='closeMessage float-right mr-2'>
                                       <i class='fa fa-times-circle-o' aria-hidden='true'></i>  
                                     </span>".
                                        "</div>";
                                }
                                ?>
                            </div>

                            </div>
                        </div>
                    </div>

                </section>
                <!-- End of "activities" section  -->
            </div>
<!----------------------------------------------------------------------------------------------------------------------
                                        THIRD PAGE (REPLIES)
----------------------------------------------------------------------------------------------------------------------->
            <div id="divReplySection" class="container-fluid hidden">
                <!-- Beginning of "replies" section  -->
                <section id="replySection" class="container-fluid mt-1">

                    <header class="row font-weight-bold align-items-center">
                        <div class="stylePostActivity ml-4">
                            <span>REPLIES</span>
                        </div>
                    </header>
                    <div class="container-fluid scrollable">
                        <div class="row mt-1 mb-1 mainContainerReply reply-border">
                            <div class="container-fluid first-outer-div">
                                <div class="row d-flex flex-column second-outer-div">
                                    <?php
                                    $user = User::findThis($_SESSION["iduser"]);
                                    $com = Comment::find("$",$user->userid);
                                    if(!empty($com)) {
                                        foreach ($com as $co) {
                                            $repl = Reply::find($co->commentid,"%");
                                            $plc = Place::findThis($co->placeid);
                                            $k = 0;
                                            if(!empty($repl)) {
                                                $k++;
                                                foreach ($repl as $rep){
                                                    $usc = User::findThis($rep->userid);
                                                echo "
                                    <div class='ml-3'>
                                        <span class='nameUserReply'>$usc->fname</span>
                                        <span>has reply to your post</span>
                                    </div>
                                    <div id='".$co->placeid."' onclick='window.location = \"realapp.php?plc=\"+this.id;' class='mt-2 ml-1 mr-1 border-solid'>
                                        <div class='container-fluid d-flex justify-content-between'>
                                            <div class='divMessage w-75'>
                                                <span class=''>$rep->message</span>
                                            </div>
                                            <div class='divLocationInfo d-flex justify-content-around align-items-center w-25'>
                                                <div class='d-flex flex-column reply-border'>
                                                    <div class=''>
                                                        <span>$plc->pname</span>
                                                    </div>
                                                    <div class=''>
                                                        <span>$co->message</span>
                                                    </div>
                                                </div>
                                                <div class=''>
                                                    <span>$rep->timet</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";}
                                            }
                                        }
                                        if($k == 0)
                                            echo "<div class='bg-info text-white text-center rounded'>You have no replys to your post!!!
                                                <span class='closeMessage float-right mr-2'>
                                       <i class='fa fa-times-circle-o' aria-hidden='true'></i>  
                                     </span>".
                                                "</div>";
                                    }
                                    else
                                        echo "<div class='bg-info text-white text-center rounded ml-3 mr-3'>You have no comment posted!!!
                                            <span class='closeMessage float-right mr-2'>
                                       <i class='fa fa-times-circle-o' aria-hidden='true'></i>  
                                     </span>".
                                            "</div>";
                                    ?>
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
                            <?php
                            $place = Place::findThis($_GET['plc']);
                            if ($place){
                                $com = Comment::find($place->placeid,"%");
                                $user = User::findThis($place->userid);
                                $img = Image::find($place->placeid);
                            echo"
                            <div class='d-flex flex-column ml-4'>
                                <div class=''>
                                    <span>$place->pname</span>
                                </div>
                                <div class=''>
                                    <span>$place->description</span>
                                </div>
                            </div>
                            <div id='showUpdateSection' onclick='switchSlideMap(this.firstElementChild);' class='ml-5'>
                                <span class='fa fa-pencil-square-o fa-3x'></span>
                            </div>
                            <div id='showMapSlide' onclick='switchSlideMap(this.firstElementChild);' class='mr-4'>
                                <span class='fa fa-map fa-3x'></span>
                            </div>";}
                            ?>
                        </div>
                    </header>
                    <div class="row mt-1">
                        <!-- Beginning of the comment section -->
                        <div class="container-fluid d-flex flex-column">
                            <div id="divContainerSlider" class="">
                                <div id="carouselPlaceImage" class="carousel slide" data-ride="carousel">
                                    <?php
                                    $length = 0;
                                    if(!empty($img)){
                                        $i=0;
                                        $le = 0;
                                        foreach ($img as $im)
                                            $le++;
                                        foreach ($img as $im)
                                        {
                                            if($le == 1)
                                            $echo = "
                                    <ol class='carousel-indicators'>
                                        <li data-target='#carouselPlaceImage' data-slide-to='0' class='active'></li>
                                    </ol>";
                                            else{
                                                if($i == 0)
                                                    $echo = "
                                    <ol class='carousel-indicators'>
                                        <li data-target='#carouselPlaceImage' data-slide-to='$i' class='active'></li>";
                                                else
                                                    $echo .= "
                                            <li data-target='#carouselPlaceImage' data-slide-to='$i'></li>";
                                                $i++;
                                            }
                                        }
                                        $echo .= "</ol>";
                                        echo $echo;
                                        $i=0;
                                    foreach ($img as $im) {
                                        if($le == 1)
                                        $echo = "
                                    <div class='carousel-inner'>
                                        <div class='carousel-item active'>
                                            <img class='d-block w-100' src='" . $im->path . "' alt='" . $im->description . "'>
                                        </div>
                                    </div>";
                                        else {
                                            if ($i == 0)
                                                $echo = "<div class='carousel-inner'>
                                        <div class='carousel-item active'>
                                            <img class='d-block w-100' src='" . $im->path . "' alt='" . $im->description . "'>
                                            </div>";
                                            else
                                                $echo .= "<div class='carousel-item'>
                                            <img class='d-block w-100' src='" . $im->path . "' alt='" . $im->description . "'>
                                        </div>
                                    </div>";
                                            $i++;
                                        }
                                        }
                                        echo $echo;
                                    }
                                    else
                                        echo "
                                    <div class='carousel-inner'>
                                        <div class='carousel-item active'>
                                            <img class='d-block w-100' src='img/not-found.png' alt='Not found'>
                                        </div>
                                    </div>
                                        ";
                                    ?>
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
                                            <?php
                                            echo"
                                            <div class='font-weight-bold'>
                                                $user->fname
                                            </div>
                                            <div>
                                                $place->timet
                                            </div>
                                        </div>
                                    </div>
                                    <div class='font-weight-bold'>
                                        <span class=''>$place->dated</span>
                                    </div>";
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- End of the comment section -->
                                <?php
                                $us = User::findThis($_SESSION['iduser']);
                                ?>
                        <!-- Beginning of "displaying map posted" section -->
                        <div id="containerMap" class="container-fluid hidden">
                            <div id="iframeMap1">
                                <iframe src="map/map2.php"></iframe>
                            </div>
                            <?php
                            if($us->userid == $user->userid) {
                                $_SESSION['modposition'] = "ok";
                                echo "
                                <div id='iframeMap2' class=''>
                                    <!--<iframe src='map/map0.php'></iframe>-->
                                </div>";
                            }
                            ?>
                        </div>
                         <!-- Ending of "displaying map posted" section -->

                        <!-- Beginning of "updating post" section -->
                        <div id="updatePostSection" class="container-fluid hidden">
                            <div class="container-fluid">
                                <header class="row d-flex align-items-center pl-3">
                                    <span>Update Post</span>
                                </header>
                                <div id='updateMap' class='mt-1'>
                                    <iframe src='map/map1.php'></iframe>
                                </div>
                                <form method="post" action="#" id="updatePostForm" enctype="multipart/form-data">
                                    <div class="d-flex flex-row mt-1 mb-1">
                                        <div class="input-group">
                                            <input id="addPicture" name="files[]" type="file" class="form-control" placeholder="Upload image"
                                                   aria-label="Profile Picture" aria-describedby="span-basic-addon8" accept="image/*" multiple="multiple">
                                            <span class="input-group-addon" id="span-basic-addon8">
                                                <i class=" fa fa-file-image-o" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="ml-2">
                                            <button type="submit" name="update" class="btn btn-block font-weight-bold">
                                                Add Image
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                         <!-- Ending of "updating post" section -->

                    </div>
                </section>
                <!-- End of "all and recent post" section  -->


                <!-- Beginning of "activities" section  -->
                <section id="anyUserCommentSection" class="container-fluid d-flex flex-column mt-1">

                    <header class="row font-weight-bold align-items-center">
                        <div class="stylePostActivity ml-1">
                            <span>Comments</span>
                        </div>
                    </header>

                    <div class="row">
                        <div class="container-fluid d-flex flex-column">
                            <?php
                            if(!empty($com)) {
                                foreach ($com as $cmt) {
                                    $rus = User::findThis($cmt->userid);
                                    echo "
                                    <div class='nameUserComment mb-1'>
                                        <span>$rus->fname</span>
                                    </div>
                                    <div class='divAllComment d-flex flex-column mt-1 p-2''>
                                        <div class='mt-0'>
                                            <p class='mt-0 mb-0'>
                                                $cmt->message
                                            </p>
                                        </div>";
                                    $rep = Reply::find($cmt->commentid,"%");
                                    if(!empty($rep)){
                                        foreach ($rep as $rp){
                                            $rsu = User::findThis($rp->userid);
                                            echo "
                                            <div class='divUserNameReply d-flex flex-column pl-2 pr-2 mt-1'>
                                                <div class=''>
                                                    <span>$rsu->fname</span>
                                                </div>
                                                <div class=''>
                                                    <p class='mb-1'>
                                                        $rp->message
                                                    </p>
                                                </div>
                                            </div>";}
                                        echo "
                                        <div class='divReplyCommentForm container-fluid'>
                                            <form method='POST' action='#' class='row replyCommentForm mt-2'>
                                                <div class='input-group-sm container-fluid d-flex justify-content-end'>
                                                    <div class='input-group hidden'>
                                                        <input name='commid' value='".$cmt->commentid."' hidden>
                                                        <input name='replycom' type='text' class='form-control' placeholder='Type your comment here'
                                                               aria-label='Recipient\'s username' aria-describedby='basic-addon2'>
                                                        <button type='submit' name='replySubmit' class='input-group-addon'>
                                                            <i class='fa fa-paper-plane fa-rotate-90'></i>
                                                        </button>
                                                    </div>
                                                    <button type='button' onclick='displayReplyInput(this.previousElementSibling)' class='ml-3 normalButton'>
                                                        <span>Reply</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>";
                                    }
                                    else{
                                        echo "
                                        <div class='divReplyCommentForm container-fluid'>
                                            <form method='POST' action='#' class='row replyCommentForm mt-2'>
                                                <div class='input-group-sm container-fluid d-flex justify-content-end'>
                                                    <div class='input-group hidden'>
                                                        <input name='commid' value='".$cmt->commentid."' hidden>
                                                        <input name='replycom' type='text' class='form-control' placeholder='Type your comment here'
                                                               aria-label='Recipient\'s username' aria-describedby='basic-addon2'>
                                                        <button onclick='checkInputState()' type='submit' name='replySubmit' class='input-group-addon'>
                                                            <i class='fa fa-paper-plane fa-rotate-90'></i>
                                                        </button>
                                                    </div>
                                                    <button type='button' onclick='displayReplyInput(this.previousElementSibling)' class='ml-3 normalButton'>
                                                        <span>Reply</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>";
                                    }
                                    echo "</div>";
                                }
                            }
                            else
                                echo "<div class='bg-info rounded text-white text-center'>"."No comment on your post!!!".
                                    "<span class='closeMessage float-right mr-2'>
                                       <i class='fa fa-times-circle-o' aria-hidden='true'></i>  
                                     </span>".
                                    "</div>";
                            ?>
                        </div>
                    </div>
                    <div class="divReplyForm">
                        <form method='POST' action="#" class="replyForm mt-2">
                            <div class="input-group">
                                <input name="commentpl" type="text" class="form-control" placeholder="Type your comment here"
                                       aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                                <button onclick="checkInputState()" type="submit" class="input-group-addon">
                                    <i class="fa fa-paper-plane fa-rotate-90"></i>
                                </button onclick="checkInputState()">
                            </div>
                        </form>
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
                        <div class="d-flex flex-column w-100">
                            <div id="subTitlePost" class="d-flex  align-items-center justify-content-between">
                                <div class="ml-2">
                                    <span>Pin it !</span>
                                </div>
                                <div class="mr-2">
                                    <span class="fa fa-picture-o fa-2x"></span>
                                </div>
                            </div>
                            <div id="mapNewPost" class="">
                                <iframe src="map/map0.php" class=""></iframe>
                            </div>
                        </div>
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
                    <form method="post" action="phpfiles/update.php" id="editAccountForm" class="container-fluid">
                        <div class="d-flex flex-row mt-2">
                            <div class="w-25">
                                <?php
                                $user = User::findThis($_SESSION["iduser"]);
                                ?>
                                <label for="editUname">Username : </label>
                            </div>
                            <div class="input-group w-75">
                                <input id="editUname" name="editUname" <?php echo "value = '$user->fname'" ?> type="text" class="form-control" placeholder="User Name"
                                       aria-label="User Name" aria-describedby="span-basic-addon3" disabled="disabled">
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
                                <input id="editEmail" name="editEmail" <?php echo "value = '$user->email'" ?> type="email" class="form-control" placeholder="Email address"
                                       aria-label="Email address" aria-describedby="basic-addon5" disabled="disabled">
                                <span class="input-group-addon" id="span-basic-addon5">
                                    <i class="fa fa-at" aria-hidden="true"></i>
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
                                <input id="editPhone" name="editPhone" <?php echo "value = '$user->phone'" ?> type="tel" class="form-control" placeholder="Phone Number"
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
                                <label for="editPassword">Password : </label>
                            </div>
                            <div class="input-group w-75">
                                <input id="editPassword" name="editPassword" <?php echo "value = '$user->password'" ?> type="password" class="form-control" placeholder="password"
                                       aria-label="Password" aria-describedby="span-basic-addon6" disabled="disabled">
                                <span class="input-group-addon" id="span-basic-addon6">
                                    <i class=" fa fa-user-secret" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="divEditButton ml-3" onclick="enableEditAccount(this.previousElementSibling.firstElementChild, this.firstElementChild)">
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
        <?php
        if(isset($_GET['plc'])){
            $_SESSION['placeid'] = $_GET['plc'];
            unset($_GET['plc']);
            if (isset($_SESSION["iduser"])) {
                echo "<script> runInitialize();</script>";
                //echo "<script> runInitialize();</script>";
            }
        }
        ?>
    </body>
</html>
