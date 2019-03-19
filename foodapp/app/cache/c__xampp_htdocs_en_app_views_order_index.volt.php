<?php
    $sumFood = 0.0;
    $sumDrink = 0.0;
    $price = 0;
    $size = "";
    $tax = 10.25;
?>
<main class="container-fluid">
    <div class="row">
        <!-- Start Navigation Menu -->
        <section id="mainLeft2" class="mainLeft col-4 col-sm-3 col-lg-2 bg-danger">
            <div class="container-fluid divTitle d-flex flex-row justify-content-around align-items-center">
                <!--<div class="container-fluid divTitle">-->
                <div class="">
                    <span><?= $restaurantName ?></span>
                </div>
                <div class="divArrow">
                    <span class="pl-2 fas fa-angle-double-left"></span>
                </div>
            </div>
            <div class="container-fluid p-2 text-center">
                <img src="<?= $restaurantPhoto ?>" class="img-fluid">
            </div>
            <div id="boxMainNavigation" class="cardMenu card" style="color: #0b2e13">
                <div id="dashboardMenu" class="dashboard card-header bg-danger container-fluid p-2 text-center d-flex flex-row justify-content-around">
                    <div>
                        <i class="rIcon fas fa-th"></i>
                    </div>
                    <div class="text-center">
                        <span>Dashboard</span>
                    </div>
                </div>
                <div id="mainNavigation" class="container-fluid list-group list-group-flush d-flex flex-column">
                    <div id="configurationMenu" class="row configItem d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <i class="rIcon fa-spin fas fa-cogs"></i>
                        </div>
                        <div class="">
                            <span>Configuration</span>
                        </div>
                    </div>
                    <div id="orderSumMenu" class="row orderItem active d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <i class="rIcon fas fa-copy"></i>
                        </div>
                        <div class="">
                            <span>Orders</span>
                        </div>
                        <div class="">
                            <i class="fas fa-circle fa-2x"></i>
                        </div>
                        <div class="boxCounter">
                            <span><?= $numOrder ?></span>
                        </div>
                    </div>
                    <div id="foodDrinkMenu" class="row foodItem d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <i class="rIcon fas fa-utensils"></i>
                            <i class="rIcon fas fa-glass-martini"></i>
                        </div>
                        <div class="">
                            <span>Food + Drink</span>
                        </div>
                        <div class="">
                            <i class="fas fa-circle fa-2x"></i>
                        </div>
                        <div class="boxCounter">
                            <span><?= $numFood ?> + <?= $numDrink ?></span>
                        </div>
                    </div>
                    <div id="notificationMenu" class="row notificationItem d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <i class="rIcon fas fa-flag"></i>
                        </div>
                        <div class="">
                            <span>Notification</span>
                        </div>
                        <div class="">
                            <i class="rIcon fas fa-envelope fa-2x"></i>
                        </div>
                        <div class="boxCircle">
                            <div class="">
                                <i class="fas fa-circle fa-2x"></i>
                            </div>
                            <div class="boxCounter">
                                <span>47</span>
                            </div>
                        </div>
                    </div>
                    <div id="customerMenu" class="row customerItem d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <i class="rIcon fas fa-users"></i>
                        </div>
                        <div class="">
                            <span>Customers</span>
                        </div>
                        <div class="">
                            <i class="fas fa-circle fa-2x"></i>
                        </div>
                        <div class="boxCounter">
                            <span><?= $numCustomer ?></span>
                        </div>
                    </div>
                    <div id="logoutMenu" class="row logoutItem d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <i class="rIcon fas fa-sign-out-alt"></i>
                        </div>
                        <div class="">
                            <span>Logout</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Navigation Menu -->

        <!-- Start Main contain (body) of dashboard -->
        <section id="mainRight" class="col-8 col-sm-9 col-lg-10">
            <!-- Start header main content of dashboard -->
            <header class="divTitle d-flex align-items-center">
                <div class="restaurantName container-fluid">
                    <span><i class="fas fa-copy"></i></span>
                    <span class="p-md-3">Orders Page</span>
                </div>
                <div class="container-fluid d-flex flex-row justify-content-end align-items-center">
                    <a href="Dashboard">
                        <div class="iconBtn btn btn-outline-danger border-light">
                            <span class=""><i class="fas fa-home"></i></span>
                        </div>
                    </a>
                    <div class="ml-2 mr-2 separator">
                        &nbsp;
                    </div>
                    <div class="iconBtn btn btn-outline-danger border-light" data-container="body" data-html="true" data-toggle="popover" data-placement="bottom" data-content="<select class='custom-select'>
                                                                                                                                                                            <option>Select a language</option>
                                                                                                                                                                            <option>TR</option>
                                                                                                                                                                            <option>EN</option>
                                                                                                                                                                        </select>">
                        <span class=""><i class="fas fa-language"></i></span>
                    </div>
                    <div class="ml-2 mr-2 separator">
                        &nbsp;
                    </div>
                    <a href="Index/logout">
                        <div class="iconBtn btn btn-outline-danger border-light">
                            <span class=""><i class="fas fa-power-off"></i></span>
                        </div>
                    </a>
                    <div class="ml-2 mr-2 separator">
                        &nbsp;
                    </div>
                    <div id="boxSearchIcon" class="iconBtn btn btn-outline-danger border-light">
                        <span class=""><i class="fas fa-search"></i></span>
                    </div>
                    <div class="ml-2 mr-2 separator">
                        &nbsp;
                    </div>
                    <form method="post" class="iconBtn" action="/en/Order/stateConnect">
                        <select id="selectBoxConnectivity" name="stateConnectivity" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option value="Online">Online</option>
                            <option value="Offline">Offline</option>
                            <option value="Busy">Busy</option>
                            <option value="Closed">Closed</option>
                        </select>
                        <button id="buttonConnectivity" type="submit" class="displayNone"></button>
                    </form>
                </div>
            </header>
            <!-- End header main content of dashboard -->

            <!-- Start searching section -->
            <section id="searchSection" class="ml-3 mr-3 mt-2 disabled">
                <form>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </section>
            <!-- End searching section -->

            <!-- Start Printing Format -->
            <aside id="invoiceOrder" class="container text-dark border border-danger mt-3 p-3">
                <div class="d-flex flex-row justify-content-between">
                    <div class="w-35">
                        <img class="img-thumbnail w-35" src="img/qrcode.png">
                    </div>
                    <div class="text-center">
                        <span class="text-uppercase"><i><?= $restaurantName ?></i></span><br>
                        <span><?= $restaurantAddress ?></span>
                    </div>
                    <div class="w-35 text-right">
                        <img class="img-thumbnail w-35" src="<?= $restaurantPhoto ?>">
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between mt-3">
                    <div>
                        <span class="text-danger"><b>Date:</b> <?= $specOrderDate ?></span><br>
                        <span class="text-danger"><b>Time:</b> <?= $specOrderTime ?></span>
                    </div>
                    <div class="text-right">
                        <span class="font-weight-bold text-danger"><u>Customer Details</u> :</span><br>
                        <span><i class="text-danger">Name: </i><?= $customerName ?></span><br>
                        <span><i class="text-danger">Phone: </i><?= $customerPhone ?></span><br>
                        <span><i class="text-danger">City: </i><?= $customerCity ?></span>
                        <div>
                            <span class="font-italic text-danger">Address:</span><br>
                            <span><?= $customerHomeAddress ?></span>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between mt-3">
                    <div class="text-center">
                        <span class="font-weight-bold text-danger"><u>Food Details</u></span>
                        <?php
                            if(sizeof($foodOrder) > 0){
                                $numFood = count($foodOrder);
                                foreach($foodOrder as $fo){
                                    if(($fo->foodprice == 0 && $fo->foodpricemedium == 0)){
                                        if(($fo->foodpricesmall != 0) && ($fo->foodpricebig == 0)){
                                            $price = $fo->foodpricesmall;
                                            $size = "Small";
                                        }else if(($fo->foodpricesmall == 0) && ($fo->foodpricebig != 0)){
                                            $price = $fo->foodpricebig;
                                            $size = "Big";
                                        }
                                    }else{
                                        $price = $fo->foodprice;
                                        $size = "Normal";
                                    }
                                    $sumFood = $sumFood + ($price * $fo->foodqty);
                                    $printFood = "<div>
                                                        <span>$fo->foodname ($fo->foodqty)</span> : <span>$price <i class='fas fa-lira-sign text-info'></i> ($size)</span>
                                                    </div>";
                                    print $printFood;
                                }
                            }
                        ?>
                    </div>
                    <div class="text-center">
                        <span class="font-weight-bold text-danger"><u>Drink Details</u></span>
                        <?php
                            if(sizeof($drinkOrder) > 0){
                                $numDrink = count($drinkOrder);
                                foreach($drinkOrder as $do)
                                    $sumDrink = $sumDrink + ($do->drinkprice * $do->drinkqty);
                                foreach($drinkOrder as $do){
                                    $printDrink = "<div>
                                                        <span>$do->drinkname ($do->drinkqty)</span> : <span>$do->drinkprice <i class='fas fa-lira-sign text-info'></i></span>
                                                    </div>";
                                    print $printDrink;
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-center mt-3">
                    <div class="text-center">
                        <span>Sub Total Food :</span><span> <?= $sumFood ?> <i class='fas fa-lira-sign text-info'></i></span><br>
                        <span>Sub Total Drink :</span><span> <?= $sumDrink ?> <i class='fas fa-lira-sign text-info'></i></span><br>
                        <span>Tax :</span><span> <?= $tax ?> <i class='fas fa-lira-sign text-info'></i></span><br>
                        <span class="text-danger"><b>Total</b> :</span><span> <?= ($sumFood + $sumDrink + $tax) ?> <i class='fas fa-lira-sign text-info'></i></span><br>
                    </div>
                </div>
            </aside>
            <!-- End Printing Format -->

            
            <div class="modal fade" id="modalInvoiceOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Invoice Order from <?= $restaurantName ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div id="invoiceCaptured" class="modal-body d-flex flex-row justify-content-center">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            
                        </div>
                    </div>
                </div>
            </div>
            

            
            <div class="modal fade" tabindex="-1" id="modalOrderProcessing" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <form method="post" action="/en/Order/processOrder" class="modal-content">
                        <input type="hidden" name="orderCodeProcessing" id="orderCodeProcessing" value="<?= $specOrderCode ?>">
                        <input type="hidden" name="orderFrom" id="orderFrom" value="<?= $customerName ?>">
                        <div class="modal-body text-center text-success">
                            <div class="mb-2">
                                <strong>Processing Order</strong>
                            </div>
                            <div>
                                <span class="fas fa-check-circle fa-3x"></span>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="submit" class="displayNone"></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                    onclick="this.previousElementSibling.click()">
                                Close
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            

            
            <div class="modal fade bd-example-modal-lg" id="modalOrderCancel" tabindex="-1" role="dialog" aria-labelledby="modalAddFoodTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered w-60" role="document">
                    <form method="post" onsubmit="submitOrderCancelling(this, event, 'Order')" class="modal-content text-danger">
                        <div class="modal-header p-1 bg-light">
                            <h5 class="modal-title text-danger ml-2" id="exampleModalLongTitle">Order Cancelling</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="modalOrderCancelInfo">
                                <div class="form-group d-flex flex-column">
                                    <input type="hidden" name="orderCodeCancel" id="orderCodeCancel" value="<?= $specOrderCode ?>">
                                    <input type="hidden" name="orderFrom" id="orderFrom" value="value="<?= $customerName ?>">
                                    <div>
                                        <label for="reasonCancelSelect">Please select a reason of order cancelling :</label>
                                    </div>
                                    <div>
                                        <select class="form-control" name="reasonCancelSelect" onchange="displayTextArea(this)">
                                            <option value="Customer doesn't pick up his phone">Customer doesn't pick up his phone</option>
                                            <option value="We already closed">We already closed</option>
                                            <option value="Customer is very impolite">Customer is very impolite</option>
                                            <option value="It's a bayran day so we do not open today">It's a bayran day so we do not open today</option>
                                            <option value="Customer is not at his home">Customer is not at his home</option>
                                            <option value="The delivery men are very busy now">The delivery men are very busy now</option>
                                            <option value="otherReason">Other reason...</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="divReasonCancelTextArea" class="form-group d-flex flex-column displayNone">
                                    <div>
                                        <label for="reasonCancelTextArea">Please type down your reason</label>
                                    </div>
                                    <div>
                                        <textarea class="form-control" name="reasonCancelTextArea" id="reasonCancelTextArea" rows="2"></textarea>
                                    </div>
                                </div>
                                <div id="errorMessageOrderCancel" class="text-danger font-weight-bold">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer p-1 bg-light">
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">
                                <span>Close</span>
                            </button>
                            <button type="submit" class="btn btn-sm btn-outline-danger mr-1">
                                <span><i class="fas fa-envelope"></i></span>
                                <span>Send</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            

            <!-- Start section displaying main content -->
            <section id="mainContent" class="container-fluid mt-3">
                <article id="mainContentOrderDetails">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span>Current Time: </span>
                            <span id="setTime" class="lightDark"></span>
                        </div>
                        <div class="mb-3">
                            <a href="OrderSum">
                                <button class="btn btn-sm btn-outline-info">
                                    <span>Go Back</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    

                    <!-- Start aside section displaying messages -->
                    <aside class=" mt-3">
                        <div class="text-center" id="displayMessage">
                            <?= $this->flash->output() ?>
                        </div>
                    </aside>
                    <!-- End aside section displaying messages -->

                    <div id="boxOrderCustomerDetails" class="d-flex flew-row flex-wrap justify-content-between">
                        <div>
                            <?php
                            echo('<table id="tableFoodDetail" class="table border">');
                                if(sizeof($foodOrder) > 0){
                                    echo('<tr class="bg-white lightDark">');
                                    
                                    echo(   '<th>Food Name</th>');
                                    echo(   '<th>Food Price</th>');
                                    echo(   '<th>Food Qty</th>');
                                    echo(   '<th>Sub Tot.</th>');
                                    echo('</tr>');
                                    $count = 0;
                                    $numFood = count($foodOrder);
                                    foreach($foodOrder as $fo){
                                        $count++;
                                        if(($fo->foodprice == 0 && $fo->foodpricemedium == 0)){
                                            if(($fo->foodpricesmall != 0) && ($fo->foodpricebig == 0)){
                                                $price = $fo->foodpricesmall;
                                                $size = "Small";
                                            }else if(($fo->foodpricesmall == 0) && ($fo->foodpricebig != 0)){
                                                $price = $fo->foodpricebig;
                                                $size = "Big";
                                            }
                                        }else{
                                            $price = $fo->foodprice;
                                            $size = "Normal";
                                        }

                                        if($count === 1){
                                            $foodInfo = <<<ICI
                                            <tr>
                                                <td>$fo->foodname</td>
                                                <td>$price (<em>$size</em>)</td>
                                                <td>$fo->foodqty</td>
                                                <td class="lightDark border font-weight-bold alignCellVertically" rowspan="$numFood">
                                                    $sumFood <i class='fas fa-lira-sign'></i>
                                                </td>
                                            </tr>
ICI;
                                            print $foodInfo;
                                            continue;
                                        }
                                        $foodInfo = <<<ICI
                                            <tr>
                                                
                                                <td>$fo->foodname</td>
                                                <td>$price ($size)</td>
                                                <td>$fo->foodqty</td>
                                            </tr>
ICI;
                                        print $foodInfo;
                                    }
                                }
                                if(sizeof($drinkOrder) > 0){
                                    $numDrink = count($drinkOrder);
                                    echo(   '<tr class="bg-white lightDark">');
                                    
                                    echo(       '<th>Drink Name</th>');
                                    echo(       '<th>Drink Price</th>');
                                    echo(       '<th>Drink Qty</th>');
                                    echo(       '<th>Sub Tot.</th>');
                                    echo(   '</tr>');
                                    $count = 0;
                                    foreach($drinkOrder as $do){
                                        $count++;
                                        if($count === 1){
                                            $drinkInfo = <<<ICI
                                                <tr>
                                                    
                                                    <td>$do->drinkname</td>
                                                    <td>$do->drinkprice</td>
                                                    <td>$do->drinkqty</td>
                                                    <td class="lightDark border font-weight-bold alignCellVertically" rowspan="$numDrink">$sumDrink <i class='fas fa-lira-sign'></i></td>
                                                </tr>
ICI;
                                            print $drinkInfo;
                                            continue;
                                        }
                                        $drinkInfo = <<<ICI
                                            <tr>
                                                <td>$do->drinkname</td>
                                                <td>$do->drinkprice</td>
                                                <td>$do->drinkqty</td>
                                            </tr>
ICI;
                                        print $drinkInfo;
                                    }
                                }
                            ?>
                                <tr class="bg-white lightDark">
                                    <th colspan="4">Total : <?= ($sumFood + $sumDrink) ?> <i class='fas fa-lira-sign'></i></th>
                                </tr>
                            </table>
                        </div>
                        <div class="d-flex flex-column">
                            <div>
                                <table class="table bg-white border">
                                    <tr>
                                        <td class="font-weight-bold lightDark">Status : </td>
                                        <td><?= $specOrderStatus ?></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold lightDark">Order Date-Time</td>
                                        <td><?= $specOrderDate ?> | <?= $specOrderTime ?></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td colspan="2">
                                            <div id="noteUser" class="p-2">
                                                <span><?= $specOrderNote ?></span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table class="table bg-white border">
                                    <tr>
                                        <td class="font-weight-bold lightDark">Name : </td>
                                        <td><?= $customerName ?></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold lightDark">Phone : </td>
                                        <td><?= $customerPhone ?></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold lightDark">Address : </td>
                                        <td>
                                            <div>
                                                <span><?= $customerCountry ?> / <?= $customerCity ?></span>
                                            </div>
                                            <div>
                                                <span><?= $customerHomeAddress ?></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="orderCustomerPoint" class="font-weight-bold lightDark"><span>Customer Points :</span></td>
                                        <td>
                                            <div id="orderRateCustomer<?= $customerPhone ?>" data-name-customer="<?= $customerName ?>" class="divRatingStar" onmouseleave="getAndKeepNumStar(this.id)">
                                                <?php
                                                    $allRatingTag = "";
                                                    $randNum = "generalRateCustomer".$customerPhone."Order";
                                                        $printCustomer = <<<Here1
                                                            <!-- Start Modal Confirmation Rating Customer -->
                                                            <div id="modal$randNum" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <span class="modal-title">Customer Rating Confirmation</span>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body text-center">
                                                                            <div class="">
                                                                                <strong>Are you sure about your rating ?</strong>
                                                                            </div>
                                                                            <div class="">
                                                                            </div>
                                                                            <div class="">
                                                                                <span>$customerName</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer d-flex justify-content-center">
                                                                            <div>
                                                                                <button type="button" class="btn btn-outline-warning" onclick="getResponseConfirmRate('modal$randNum', 'yes', '$customerName', '$specOrderCode')">
                                                                                    <span class="fas fa-check-circle"></span>
                                                                                    <span>Yes</span>
                                                                                </button>
                                                                            </div>
                                                                            <div>
                                                                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">
                                                                                    <span class="fas fa-times-circle"></span>
                                                                                    <span>No</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Modal Confirmation Rating Customer -->
Here1;
                                                    if(!$specOrderRateCustomer){
                                                        for($k = 0; $k < 5; $k++){
                                                            $star = $k + 1;
                                                            if($k < $specOrderRateCustomer){
                                                                $tempVar1 = <<<temp1
                                                                            <a>
                                                                                <span class="spanStar">
                                                                                    <i class="fas fa-star" onmouseover="changeMultipleStarMouseMove($star, this.parentElement.parentElement.parentElement, event)"
                                                                                       onmouseleave="changeMultipleStarMouseMove($star, this.parentElement.parentElement.parentElement, event)"
                                                                                       onclick="changeMultipleStarMouseClick($star, this.parentElement.parentElement.parentElement, event, this, this.parentElement.parentElement.parentElement.id, 'modal$randNum')">
                                                                                    </i>
                                                                                </span>
                                                                            </a>
temp1;
                                                                $allRatingTag = $allRatingTag.$tempVar1;
                                                            }else{
                                                                $tempVar2 = <<<temp2
                                                                            <a>
                                                                                <span class="spanStar">
                                                                                    <i class="far fa-star" onmouseover="changeMultipleStarMouseMove($star, this.parentElement.parentElement.parentElement, event)"
                                                                                       onmouseleave="changeMultipleStarMouseMove($star, this.parentElement.parentElement.parentElement, event)"
                                                                                       onclick="changeMultipleStarMouseClick($star, this.parentElement.parentElement.parentElement, event, this, this.parentElement.parentElement.parentElement.id, 'modal$randNum')">
                                                                                    </i>
                                                                                </span>
                                                                            </a>
temp2;
                                                                $allRatingTag = $allRatingTag.$tempVar2;
                                                            }
                                                        }
                                                    }else{
                                                        for($k = 0; $k < 5; $k++){
                                                            $star = $k + 1;
                                                            $tempVar = <<<temp3
                                                                        <a>
                                                                            <span class="spanStar">
                                                                                <i class="far fa-star" onmouseover="changeMultipleStarMouseMove($star, this.parentElement.parentElement.parentElement, event)"
                                                                                   onmouseleave="changeMultipleStarMouseMove($star, this.parentElement.parentElement.parentElement, event)"
                                                                                   onclick="changeMultipleStarMouseClick($star, this.parentElement.parentElement.parentElement, event, this, this.parentElement.parentElement.parentElement.id, 'modal$randNum')">
                                                                                </i>
                                                                            </span>
                                                                        </a>
temp3;
                                                            $allRatingTag = $allRatingTag.$tempVar;
                                                        }
                                                    }
                                                    $printCustomerRating = <<<temp4
                                                                            <div class="d-flex flex-column ml-2">
                                                                                <div id="$randNum" data-name-customer="$customerName" class="divRatingStar" onmouseleave="getAndKeepNumStar(this.id)">
                                                                                    $allRatingTag
                                                                                </div>
                                                                            </div>
temp4;
                                                    print $printCustomer;
                                                    print $printCustomerRating;
                                                ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td colspan="2">
                                            <a href="Notification" title="">
                                                <button id="buttonContactCustomer" type="button" class="btn btn-info btn-sm">
                                                    <span>Contact Customer</span>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                                <div class="d-flex flex-wrap justify-content-around">
                                    <div>
                                        <button id="buttonCancelOrder" type="button" class="btn btn-outline-danger btn-sm"
                                                data-toggle="modal" data-target="#modalOrderCancel">
                                            <span class="pr-1"><i class="fas fa-times"></i></span>
                                            <span>Cancel Order</span>
                                        </button>
                                    </div>
                                    <div class="ml-2">
                                        <button id="buttonProcessOrder" type="button"
                                                class="btn btn-outline-warning btn-sm"
                                                data-toggle="modal" data-target="#modalOrderProcessing">
                                            <span class="pr-1"><i class="fa-spin fas fa-sync"></i></span>
                                            <span>Processing Order</span>
                                        </button>
                                    </div>
                                    <div class="ml-2">
                                        <button id="buttonPrintOrder" type="button" class="btn btn-outline-primary btn-sm">
                                            <span class="pr-1"><i class="fas fa-print"></i></span>
                                            <span>Print Invoice</span>
                                        </button>
                                    </div>
                                    <div class="ml-2">
                                        <button id="buttonSendOrder" type="button" class="btn btn-outline-primary btn-sm">
                                            <span class="pr-1"><i class="fas fa-envelope"></i></span>
                                            <span>Send Invoice</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
            <!-- End section displaying main content -->

            <!-- Start Footer of dashboard -->
            <footer class="marginTop-5">
                <div class="container text-light">
                    <div class="d-flex flex-row justify-content-around">
                        <div class=""><a href="http://www.technoparcsystems.com/" target="_blank">Powered by Technoparc Systems</a></div>
                        <div>FoodApp <?php echo date("d-M-Y"); ?> &copy; All Rights Reserved</div>
                    </div>
                </div>
            </footer>
            <!-- End Footer of dashboard -->
        </section>
        <!-- End Main contain (body) of dashboard -->
    </div>
</main>
<script src="js/html2canvas.min.js"></script>
<script>let restaurantName = "<?= $restaurantName ?>";</script>
<script src="js/custom/orderScript.js"></script>
<script src="js/custom/customerScript.js"></script>