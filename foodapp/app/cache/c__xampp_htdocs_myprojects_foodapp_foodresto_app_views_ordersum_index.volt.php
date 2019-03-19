<main class="container-fluid">
    <div class="row">
        <!-- Start Left Navigation Menu (without text) Dashboard -->
        <section id="mainLeft1" class="mainLeft col-1 bg-danger font-weight-bold">
            <div class="container-fluid divTitle d-flex flex-row justify-content-around align-items-center">
                <!--<div class="container-fluid divTitle">-->
                <div class="divArrow">
                    <span class="pl-2"><i class="fas fa-angle-double-right"></i></span>
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
                            <a>
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
                    <div class="row orderItem active d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <span><i class="fas fa-copy"></i></span>
                        </div>
                        <div class="">
                            <a title="">
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
                        <form method="post" action="/myprojects/FoodResto/OrderSum/stateConnect">
                            <select id="selectBoxConnectivity" name="stateConnectivity" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option value="Online">Online</option>
                                <option value="Offline">Offline</option>
                                <option value="Busy">Busy</option>
                                <option value="Closed">Closed</option>
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
            <?php
                if($orderSum){
                    foreach($orderSum as $os){
                        $modalOrderItem = <<<HERE
                            
                            <div class="modal fade bd-example-modal-lg" id="modalOrderDelivered$os->ordercode" tabindex="-1" role="dialog" aria-labelledby="modalAddFoodTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal modalDelivery d-flex justify-content-center" role="document">
                                    <div class="w-75 modal-content border rounded-circle pb-5 pt-4">
                                        <div class="w-100 d-flex justify-content-end">
                                            <div class="mr-5 pr-3" style="">
                                                <button type="button" class="close btn-lg" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-center">
                                            <div class="w-40">
                                                <img class="img-fluid border-0" src="img/deliveryMan.png" alt="">
                                            </div>
                                            <div class="w-100 textDelivered">
                                                <span class="text-success">Food on the way</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            
                            <div class="modal fade bd-example-modal-lg" id="modalOrderCancel$os->ordercode" tabindex="-1" role="dialog" aria-labelledby="modalAddFoodTitle" aria-hidden="true">
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
                                                    <input type="hidden" name="orderCodeCancel" id="orderCodeCancel" value="$os->ordercode">
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
                            
HERE;
                        print $modalOrderItem;
                    }
                }
            ?>
            <!-- Start section displaying main content -->
            <section id="mainContent" class="container-fluid mt-3">
                <article>
                    <div class="d-flex justify-content-between">
                        <div class="ml-3">
                            <span>Current Time: </span>
                            <span id="setTime" class="lightDark"></span>
                        </div>
                        <div class="">
                            <a href="OrderSum/filter?filterParam=new">
                                <button class="btn btn-sm btn-outline-secondary">
                                    <span>Reset Page</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-row flex-wrap justify-content-between">
                        <!-- Start Filter Section for drink -->
                        <form method="post" onsubmit="filterOrderSum(this)" id="filterForm" class="input-group mt-2 ml-3">
                            <select title="filter box for food" data-selected-option="<?= $selectedFilter ?>" class="custom-select" id="filterParam" name="filterParam">
                                <option value="Choose..." selected="selected">Choose...</option>
                                <option value="new">New Orders</option>
                                <option value="processing">Processing Orders</option>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-outline-danger" type="submit">Filter Orders</button>
                            </div>
                        </form>
                        <!-- End Filter Section -->
                        <!-- Start Buttons New, Processing, Cancelled and Delivered -->
                        <div id="divBtnNewProCanDel" class="mt-2">
                            <a href="OrderSum/filter?filterParam=newOrders" title="" class="ml-2">
                                <button type="button" class="justify-content-around btn btn-small btn-outline-info">
                                    <div>
                                        <span>New : </span>
                                        <span><?= $numNewOrders ?></span>
                                    </div>
                                </button>
                            </a>
                            <a href="OrderSum/filter?filterParam=processingOrders" title="" class="ml-2">
                                <button type="button" class="justify-content-around btn btn-small btn-outline-warning">
                                    <div>
                                        <span>Processing : </span>
                                        <span><?= $numProcessingOrders ?></span>
                                    </div>
                                </button>
                            </a>
                            <a href="OrderSum/filter?filterParam=cancelledOrders" title="" class="ml-2">
                                <button type="button" class="justify-content-around btn btn-small btn-outline-danger">
                                    <div>
                                        <span>Cancelled : </span>
                                        <span><?= $numCancelledOrders ?></span>
                                    </div>
                                </button>
                            </a>
                            <a href="OrderSum/filter?filterParam=deliveredOrders" title="" class="ml-2">
                                <button type="button" class="justify-content-around btn btn-small btn-outline-success">
                                    <div>
                                        <span>Delivered : </span>
                                        <span><?= $numDeliveredOrders ?></span>
                                    </div>
                                </button>
                            </a>
                        </div>
                        <!-- End Buttons New, Processing, Cancelled and Delivered -->
                    </div>

                    <!-- Start aside section displaying messages -->
                    <aside class=" mt-3">
                        <div class="text-center" id="displayMessage2">
                            <?= $this->flash->output() ?>
                        </div>
                    </aside>
                    <!-- End aside section displaying messages -->

                    <!-- Start section Listing all food -->
                    <div id="boxListOrder" class="mt-3">
                        <table id="orderTable" class="table table-sm text-center table-hover">
                            <?php
                                if(count($orderSum) > 0){
                                    echo '<thead id="orderTableHeader">
                                            <tr class="">
                                                <th scope="col">Customer Name</th>
                                                <th scope="col">Order DateTime</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Total Price</th>
                                                <th scope="col">Total Qty</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                            </thead>
                                        <tbody id="orderTableBody">';
                                }
                            ?>
                            <?php
                                if($orderSum){
                                    foreach($orderSum as $os){
                                        $bgNewOrder = "";
                                        if(strcmp(strtolower($os->status), "new") === 0){
                                            $bgNewOrder = "newOrder";
                                        }
                                        $orderItem = <<<HERE
                                            <tr class="rowDetails $bgNewOrder" ondblclick="submitDetailOrderForm('btnid$os->ordercode')">
                                                <td scope="row">
                                                    <span>$os->fullname</span>
                                                </td>
                                                <td class="cellFoodDetails">
                                                    <div class="d-flex flex-row flex-wrap justify-content-around cellDateTimeChild1">
                                                        <div class="">
                                                            <span>$os->orderdate</span>
                                                        </div>
                                                        <div class="">
                                                            <span>$os->ordertime</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cellDrinkDetails">
                                                    <span>$os->status</span>
                                                </td>
                                                <td>
                                                    <span>$os->totalprice TL</span>
                                                </td>
                                                <td>
                                                    <span>$os->totalqty</span>
                                                </td>
                                                <td>
                                                    <form id="btnid$os->ordercode" method="post" action="/myprojects/foodapp/FoodResto/OrderSum/getOrderSum">
                                                        <input type="hidden" name="orderTotPrice" value=$os->totalprice>
                                                        <input type="hidden" name="orderQuantity" value=$os->totalqty>
                                                        <input type="hidden" name="orderStatus" value=$os->status>
                                                        <input type="hidden" name="orderDate" value=$os->orderdate>
                                                        <input type="hidden" name="orderTime" value=$os->ordertime>
                                                        <input type="hidden" name="orderCred" value=$os->ordercode>
                                                        <input type="hidden" name="userCred" value=$os->userid>
                                                        <input type="hidden" name="orderNote" value=$os->otherinfo>
                                                    </form>
                                                    <div class="d-flex flex-row justify-content-around">
                                                        <div class="bg-floralwhite border rounded">
                                                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalOrderCancel$os->ordercode">
                                                                <span>Cancelled</span>
                                                            </button>
                                                        </div>
                                                        <div class="bg-floralwhite border rounded">
                                                            <button type="button" class="btn btn-outline-warning">
                                                                <span>Processing</span>
                                                            </button>
                                                        </div>
                                                        <!--<div class="bg-floralwhite border rounded">
                                                            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#modalOrderDelivered$os->ordercode">
                                                                <span>Delivered</span>
                                                            </button>
                                                        </div>-->
                                                    </div>
                                                </td>
                                            </tr>
HERE;
                                        print $orderItem;
                                    }
                                }
                            ?>
                            </tbody>
                            <tfoot id="orderTableFooter">
                            <tr class="">
                                <th colspan="6">
                                    <span class="orderSumResultNotFound">
                                    <?php
                                        if(count($orderSum) === 0){
                                            switch($_SESSION['filterParam']){
                                                case "newOrders":
                                                    echo ":( Sorry, we can not find new orders for the moment</span>";
                                                break;
                                                case "processingOrders":
                                                    echo ":( Sorry, we can not find processing orders for the moment</span>";
                                                break;
                                                case "cancelledOrders":
                                                    echo ":( Sorry, we can not find cancelled orders for the moment</span>";
                                                break;
                                                case "deliveredOrders":
                                                    echo ":( Sorry, we can not find delivered orders for the moment</span>";
                                                break;
                                                default:
                                                    echo ":( Sorry, we can not find what you're looking for</span>";
                                                break;
                                            }
                                        }
                                    ?>
                                    <!-- Start Pagination Customers -->
                                    <nav class="mt-3" aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item">
                                                <a href="OrderSum?page=1" class="page-link" aria-label="Previous">
                                                    <span aria-hidden="true"><<</span>
                                                    <span class="sr-only">First</span>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <?php
                                                    $previous = (int)($page->current - 1);
                                                        if($previous === 0)
                                                            echo "<a href='OrderSum?page=1' class='page-link' aria-label='Previous'>";
                                                        else
                                                            echo "<a href='OrderSum?page=$previous' class='page-link' aria-label='Previous'>";
                                                ?>
                                                    <span aria-hidden="true">Prev</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <?php
                                                for($i = 1; $i <= $page->total_pages; $i++){
                                                    if($i === $page->current){
                                                        echo(
                                                            "<li class='page-item active'>
                                                                <a href='OrderSum?page=$i' class='page-link'>$i</a>
                                                            </li>"
                                                        );
                                                    }else{
                                                        echo(
                                                            "<li class='page-item'>
                                                                <a href='OrderSum?page=$i' class='page-link'>$i</a>
                                                            </li>"
                                                        );
                                                    }
                                                }
                                            ?>
                                            <li class="page-item">
                                                <?php
                                                    $next = (int)($page->current + 1);
                                                    $last = (int)($page->last + 1);
                                                    if($next === $last)
                                                        echo "<a href='OrderSum?page=$page->last' class='page-link' aria-label='Next'>";
                                                    else
                                                        echo "<a href='OrderSum?page=$next' class='page-link' aria-label='Next'>";
                                                ?>
                                                    <span aria-hidden="true">Next</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a href="OrderSum?page=<?= $page->last; ?>" class="page-link" aria-label="Last">
                                                    <span aria-hidden="true">>></span>
                                                    <span class="sr-only">Last</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- End Pagination Customers -->
                                </th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- End section Listing all food -->
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
<script src="js/custom/filterOrderSum.js"></script>