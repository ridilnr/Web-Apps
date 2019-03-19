<main class="container-fluid">
    <div class="row">
        <!-- Start Left Navigation Menu (without text) Dashboard -->
        <section id="mainLeft1" class="mainLeft col-1 bg-danger font-weight-bold">
            <div class="container-fluid divTitle d-flex flex-row justify-content-around align-items-center">
                <!--<div class="container-fluid divTitle">-->
                <div class="divArrow">
                    <span class="pl-2"> <i class="fas fa-angle-double-right"></i></span>
                </div>
            </div>
            <div class="container-fluid p-2">
                <img src="<?= $restaurantPhoto ?>" class="img-fluid">
            </div>
            <div class="cardMenu card" style="color: #0b2e13">
                <div class="dashboard card-header bg-danger container-fluid p-2 text-center d-flex flex-row justify-content-around">
                    <div class="">
                        <a href="Dashboard">
                            <span><i class="fas fa-th fa-3x"></i></span>
                        </a>
                    </div>
                </div>
                <div id="Menu" class="container-fluid list-group list-group-flush d-flex flex-column">
                    <div class="row configItem d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <a href="Account">
                                <span><i class="fa-spin fas fa-cogs fa-2x"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="row notificationItem d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <a href="Notification">
                                <span><i class="fas fa-flag fa-2x"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="row foodItem d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <a href="FoodDrink">
                                <span><i class="fas fa-utensils fa-2x"></i></span>
                                <span><i class="fas fa-glass-martini fa-2x"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="row customerItem d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <a href="Customer">
                                <span><i class="fas fa-users fa-2x"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="row orderItem active d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <a href="OrderSum">
                                <span><i class="fas fa-copy fa-2x"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="row logoutItem d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <a href="Index/logout" title="">
                                <span><i class="fas fa-power-off fa-2x"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Left Navigation Menu (without text) Dashboard -->

        <!-- Start Left Navigation Menu (with text + icons) Dashboard -->
        <section id="mainLeft2" class="mainLeft col-4 col-sm-3 col-lg-2 bg-danger font-weight-bold">
            <div class="container-fluid divTitle d-flex flex-row justify-content-around align-items-center">
                <!--<div class="container-fluid divTitle">-->
                <div class="">
                    <span><?= $restaurantName ?></span>
                </div>
                <div class="divArrow">
                    <span class="pl-2"><i class="fas fa-angle-double-left"></i></span>
                </div>
            </div>
            <div class="container-fluid p-2 text-center">
                <img src="<?= $restaurantPhoto ?>" class="img-fluid">
            </div>
            <div class="cardMenu card" style="color: #0b2e13">
                <div id="dashboardMenu" class="dashboard card-header bg-danger container-fluid p-2 text-center d-flex flex-row justify-content-around">
                    <div>
                        <span><i class="fas fa-th"></i></span>
                    </div>
                    <div class="text-center">
                        <a href="Dashboard" title="">
                            <span>Dashboard</span>
                        </a>
                    </div>
                </div>
                <div id="mainNavigation" class="container-fluid list-group list-group-flush d-flex flex-column">
                    <div id="configurationMenu" class="row configItem d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <span><i class="fa-spin fas fa-cogs"></i></span>
                        </div>
                        <div class="">
                            <a href="Account" title="">
                                <span>Configuration</span>
                            </a>
                        </div>
                    </div>
                    <div id="orderSumMenu" class="row orderItem active d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <span><i class="fas fa-copy"></i></span>
                        </div>
                        <div class="">
                            <a href="OrderSum" title="">
                                <span>Orders</span>
                            </a>
                        </div>
                        <div class="">
                            <span><i class="fas fa-circle fa-2x"></i></span>
                        </div>
                        <div class="boxCounter">
                            <span><?= $numAllOrder ?></span>
                        </div>
                    </div>
                    <div id="foodDrinkMenu" class="row foodItem d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <span><i class="fas fa-utensils"></i></span>
                        </div>
                        <div class="">
                            <a href="FoodDrink" title="">
                                <span>Food + Drink</span>
                            </a>
                        </div>
                        <div class="">
                            <span><i class="fas fa-circle fa-2x"></i></span>
                        </div>
                        <div class="boxCounter">
                            <span><?= $numFood ?> + <?= $numDrink ?></span>
                        </div>
                    </div>
                    <div id="notificationMenu" class="row notificationItem d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <span><i class="fas fa-flag"></i></span>
                        </div>
                        <div class="">
                            <a href="Notification" title="">
                                <span>Notification</span>
                            </a>
                        </div>
                        <div class="">
                            <span><i class="fas fa-envelope fa-2x"></i></span>
                        </div>
                        <div class="boxCircle">
                            <div class="">
                                <span><i class="fas fa-circle fa-2x"></i></span>
                            </div>
                            <div class="boxCounter">
                                <span>47</span>
                            </div>
                        </div>
                    </div>
                    <div id="customerMenu" class="row customerItem d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <span><i class="fas fa-users"></i></span>
                        </div>
                        <div class="">
                            <a href="Customer" title="">
                                <span>Customers</span>
                            </a>
                        </div>
                        <div class="">
                            <span><i class="fas fa-circle fa-2x"></i></span>
                        </div>
                        <div class="boxCounter">
                            <span><?= $numCustomer ?></span>
                        </div>
                    </div>
                    <div id="logoutMenu" class="row logoutItem d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <span><i class="fas fa-sign-out-alt"></i></span>
                        </div>
                        <div class="">
                            <a href="Index/logout" title="">
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Left Navigation Menu Dashboard -->

        <!-- Start Main contain (body) of dashboard -->
        <section id="mainRight" class="col-8 col-sm-9 col-lg-10">
            <!-- Start header main content of dashboard -->
            <header class="divTitle d-flex align-items-center">
                <div class="restaurantName container-fluid">
                    <span><i class="fas fa-copy"></i></span>
                    <span class="p-md-3">Orders Page</span>
                </div>
                <div class="container-fluid d-flex flex-row flex-nowrap justify-content-end">
                    <a href="Dashboard">
                        <div class="btn btn-outline-danger border-light">
                            <span class=""><i class="fas fa-home"></i></span>
                        </div>
                    </a>
                    <div class="ml-3 mr-3 separator">
                        &nbsp;
                    </div>
                    <div class="btn btn-outline-danger border-light" data-container="body" data-html="true" data-toggle="popover" data-placement="bottom" data-content="<select class='custom-select'>
                                                                                                                                                                            <option>Select a language</option>
                                                                                                                                                                            <option>TR</option>
                                                                                                                                                                            <option>EN</option>
                                                                                                                                                                        </select>">
                        <span class=""><i class="fas fa-language"></i></span>
                    </div>
                    <div class="ml-3 mr-3 separator">
                        &nbsp;
                    </div>
                    <a href="Index/logout">
                        <div class="btn btn-outline-danger border-light">
                            <span class=""><i class="fas fa-power-off"></i></span>
                        </div>
                    </a>
                    <div class="ml-3 mr-3 separator">
                        &nbsp;
                    </div>
                    <div id="boxSearchIcon" class="btn btn-outline-danger border-light">
                        <span class=""><i class="fas fa-search"></i></span>
                    </div>
                    <div class="ml-3 mr-3 separator">
                        &nbsp;
                    </div>
                    <div>
                        <form method="post" action="/myprojects/foodapp/FoodResto/Order/stateConnect">
                            <select id="selectBoxConnectivity" name="stateConnectivity" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option value="online">Online</option>
                                <option value="offline">Offline</option>
                                <option value="busy">Busy</option>
                                <option value="closed">Closed</option>
                            </select>
                            <button id="buttonConnectivity" type="submit" class="displayNone"></button>
                        </form>
                    </div>
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

            <!-- Start Modal Cancel Order -->
            <div class="modal fade bd-example-modal-lg" id="modalOrderCancel" tabindex="-1" role="dialog" aria-labelledby="modalAddFoodTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered w-60" role="document">
                    <form method="post" id="orderCancellingForm" class="modal-content text-danger">
                        <div class="modal-header p-1 bg-light">
                            <h5 class="modal-title text-danger ml-2" id="exampleModalLongTitle">Order Cancelling</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="modalOrderCancelInfo">
                                <div class="form-group d-flex flex-column">
                                    <input type="hidden" name="orderCodeCancel" id="orderCodeCancel" value=<?= $specOrderCode ?>>
                                    <div>
                                        <label for="reasonCancelSelect">Please select the reason of order cancelling</label>
                                    </div>
                                    <div>
                                        <select class="form-control" id="reasonCancelSelect" name="reasonCancelSelect">
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
            <!-- End Modal Cancel Order -->

            <!-- Start section displaying main content -->
            <section id="mainContent" class="container-fluid mt-3">
                <article>
                    <div class="d-flex justify-content-between">
                        <div>
                            <span>Current hour: </span>
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
                    
                    <div class="d-flex flew-row flex-wrap justify-content-between">
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
                                    $sumFood = 0;
                                    $numFood = count($foodOrder);
                                    foreach($foodOrder as $fo)
                                        $sumFood = $sumFood + ($fo->foodprice * $fo->foodqty);
                                        $price = 0;
                                        $size = "";
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
                                                    $sumFood TL
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
                                    $sumDrink = 0.0;
                                    foreach($drinkOrder as $do)
                                        $sumDrink = $sumDrink + ($do->drinkprice * $do->drinkqty);
                                    foreach($drinkOrder as $do){
                                        $count++;
                                        if($count === 1){
                                            $drinkInfo = <<<ICI
                                                <tr>
                                                    
                                                    <td>$do->drinkname</td>
                                                    <td>$do->drinkprice</td>
                                                    <td>$do->drinkqty</td>
                                                    <td class="lightDark border font-weight-bold alignCellVertically" rowspan="$numDrink">$sumDrink TL</td>
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
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Total : <?= $specOrderTotPrice ?> TL</th>
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
                                                <?= $specificOrderNote ?>
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
                                        <td class="font-weight-bold lightDark">Customer Points : </td>
                                        <td>
                                            <div id="orderRateCustomer<?= $customerPhone ?>" data-name-customer="<?= $customerName ?>" class="divRatingStar" onmouseleave="getAndKeepNumStar(this.id)">
                                                <a href="#">
                                                    <span class="spanStar">
                                                        <i class="far fa-star" onmouseover="changeMultipleStarMouseMove(1, this.parentElement.parentElement.parentElement, event)"
                                                           onmouseleave="changeMultipleStarMouseMove(1, this.parentElement.parentElement.parentElement, event)"
                                                           onclick="changeMultipleStarMouseClick(1, this.parentElement.parentElement.parentElement, event, this, this.parentElement.parentElement.parentElement.id)">
                                                        </i>
                                                    </span>
                                                </a>
                                                <a href="#">
                                                    <span class="spanStar">
                                                        <i class="far fa-star" onmouseover="changeMultipleStarMouseMove(2, this.parentElement.parentElement.parentElement, event)"
                                                           onmouseleave="changeMultipleStarMouseMove(2, this.parentElement.parentElement.parentElement, event)"
                                                           onclick="changeMultipleStarMouseClick(2, this.parentElement.parentElement.parentElement, event, this, this.parentElement.parentElement.parentElement.id)">
                                                        </i>
                                                    </span>
                                                </a>
                                                <a href="#">
                                                    <span class="spanStar">
                                                        <i class="far fa-star" onmouseover="changeMultipleStarMouseMove(3, this.parentElement.parentElement.parentElement, event)"
                                                           onmouseleave="changeMultipleStarMouseMove(3, this.parentElement.parentElement.parentElement, event)"
                                                           onclick="changeMultipleStarMouseClick(3, this.parentElement.parentElement.parentElement, event, this, this.parentElement.parentElement.parentElement.id)">
                                                        </i>
                                                    </span>
                                                </a>
                                                <a href="#">
                                                    <span class="spanStar">
                                                        <i class="far fa-star" onmouseover="changeMultipleStarMouseMove(4, this.parentElement.parentElement.parentElement, event)"
                                                           onmouseleave="changeMultipleStarMouseMove(4, this.parentElement.parentElement.parentElement, event)"
                                                           onclick="changeMultipleStarMouseClick(4, this.parentElement.parentElement.parentElement, event, this, this.parentElement.parentElement.parentElement.id)">
                                                        </i>
                                                    </span>
                                                </a>
                                                <a href="#">
                                                    <span class="spanStar">
                                                        <i class="far fa-star" onmouseover="changeMultipleStarMouseMove(5, this.parentElement.parentElement.parentElement, event)"
                                                           onmouseleave="changeMultipleStarMouseMove(5, this.parentElement.parentElement.parentElement, event)"
                                                           onclick="changeMultipleStarMouseClick(5, this.parentElement.parentElement.parentElement, event, this, this.parentElement.parentElement.parentElement.id)">
                                                        </i>
                                                    </span>
                                                </a>
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
                                <div class="d-flex justify-content-around">
                                    <div>
                                        <button id="buttonCancelOrder" type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modalOrderCancel">
                                            <span><i class="fas fa-times"></i></span>
                                            <span>&nbsp; Cancel Order</span>
                                        </button>
                                    </div>
                                    <div class="ml-2">
                                        <button id="buttonProcessOrder" type="button" class="btn btn-outline-warning btn-sm">
                                            <span><i class="fa-spin fas fa-sync"></i></span>
                                            <span>&nbsp; Processing Order</span>
                                        </button>
                                    </div>
                                    <div class="ml-2">
                                        <button id="buttonPrintOrder" type="button" class="btn btn-outline-primary btn-sm">
                                            <span><i class="fas fa-print"></i></span>
                                            <span>&nbsp; Print Invoice</span>
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
<script src="js/custom/orderScript.js"></script>
<script src="js/custom/customerScript.js"></script>