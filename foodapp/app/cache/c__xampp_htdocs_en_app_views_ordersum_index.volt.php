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
                    <div class="row orderItem active d-flex flex-row justify-content-around list-group-item">
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
                    <form method="post" class="iconBtn" action="/en/OrderSum/stateConnect">
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
            <?php
                if($orderSum){
                    foreach($orderSum as $os){
                        $modalOrderItem = <<<HERE

                            
                            <div class="modal fade" tabindex="-1" id="modalOrderDelivered$os->ordercode" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <form method="post" action="/en/OrderSum/processOrder" class="modal-content">
                                        <input type="hidden" name="orderCodeProcessing" id="orderCodeProcessing" value="$os->ordercode">
                                        <input type="hidden" name="orderFrom" id="orderFrom" value="$os->fullname">
                                        <input type="hidden" name="userCred" id="userCred" value="$os->userid">
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
                            

                            
                            <div class="modal fade bd-example-modal-lg" id="modalOrderCancel$os->ordercode" tabindex="-1" role="dialog" aria-labelledby="modalAddFoodTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered w-60" role="document">
                                    <form method="post" onsubmit="submitOrderCancelling(this, event, 'OrderSum')" class="modal-content text-danger">
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
                                                    <input type="hidden" name="orderFrom" id="orderFrom" value="$os->fullname">
                                                    <input type="hidden" name="userCred" id="userCred" value="$os->userid">
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
                    <div id="divFilterButtonsNewProCanDel" class="d-flex flex-row flex-wrap justify-content-between">
                        <!-- Start Filter Section for drink -->
                        <form method="post" onsubmit="filterOrderSum(this)" id="filterForm" class="input-group mt-2 ml-3">
                            <select title="filter box for food" data-selected-option="<?= $selectedFilter ?>" class="custom-select" id="filterParam" name="filterParam">
                                <option value="Choose..." selected="selected">Choose...</option>
                                <option value="new">New Orders</option>
                                <option value="processing">Processing Orders</option>
                            </select>
                            <div class="input-group-append">
                                <button id="orderSumFilterButton" class="btn btn-outline-danger" type="submit">Filter Orders</button>
                            </div>
                        </form>
                        <!-- End Filter Section -->
                        <!-- Start Buttons New, Processing, Cancelled and Delivered -->
                        <div class="align-items-center" id="divBtnNewProCanDel">
                            <a href="OrderSum/filter?filterParam=newOrders" title="" class="ml-1">
                                <button type="button" class="justify-content-around btn btn-sm btn-outline-info">
                                    <div>
                                        <span>New : </span>
                                        <span><?= $numNewOrders ?>000</span>
                                    </div>
                                </button>
                            </a>
                            <a href="OrderSum/filter?filterParam=processingOrders" title="" class="ml-1">
                                <button type="button" class="justify-content-around btn btn-sm btn-outline-warning">
                                    <div>
                                        <span>Processing : </span>
                                        <span><?= $numProcessingOrders ?>000</span>
                                    </div>
                                </button>
                            </a>
                            <a href="OrderSum/filter?filterParam=cancelledOrders" title="" class="ml-1">
                                <button type="button" class="justify-content-around btn btn-sm btn-outline-danger">
                                    <div>
                                        <span>Cancelled : </span>
                                        <span><?= $numCancelledOrders ?>000</span>
                                    </div>
                                </button>
                            </a>
                            <a href="OrderSum/filter?filterParam=deliveredOrders" title="" class="ml-1">
                                <button type="button" class="justify-content-around btn btn-sm btn-outline-success">
                                    <div>
                                        <span>Delivered : </span>
                                        <span><?= $numDeliveredOrders ?>000</span>
                                    </div>
                                </button>
                            </a>
                        </div>
                        <!-- End Buttons New, Processing, Cancelled and Delivered -->
                    </div>

                    <!-- Start aside section displaying messages -->
                    <aside class=" mt-3">
                        <div class="text-center" id="displayMessage">
                            <?= $this->flash->output() ?>
                        </div>
                    </aside>
                    <!-- End aside section displaying messages -->

                    <!-- Start section Listing all food -->
                    <div id="boxListOrder" class="mt-3 table-responsive">
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
                                        $bgOrder = "";
                                        if(strcmp(strtolower($os->status), "new") === 0){
                                            $bgOrder = "newOrder";
                                        }elseif(strcmp(strtolower($os->status), "cancelled") === 0){
                                            $bgOrder = "cancelledOrder";
                                        }elseif(strcmp(strtolower($os->status), "processing") === 0){
                                            $bgOrder = "processingOrder";
                                        }else{
                                            $bgOrder = "deliveredOrder";
                                        }
                                        $orderItem = <<<HERE
                                            <tr class="rowDetails $bgOrder" ondblclick="submitDetailOrderForm('btnid$os->ordercode')">
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
                                                    <form id="btnid$os->ordercode" method="post" action="/en/OrderSum/getOrderSum">
                                                        <input type="hidden" name="orderTotPrice" value="$os->totalprice">
                                                        <input type="hidden" name="orderQuantity" value="$os->totalqty">
                                                        <input type="hidden" name="orderStatus" value="$os->status">
                                                        <input type="hidden" name="orderDate" value="$os->orderdate">
                                                        <input type="hidden" name="orderTime" value="$os->ordertime">
                                                        <input type="hidden" name="orderCred" value="$os->ordercode">
                                                        <input type="hidden" name="userCred" value="$os->userid">
                                                        <input type="hidden" name="orderNote" value="$os->otherinfo">
                                                        <input type="hidden" name="ratingCustomer" value="$os->ratingcustomer">
                                                    </form>
                                                    <div class="d-flex flex-row justify-content-around">
                                                        <div class="bg-floralwhite border rounded">
                                                            <button type="button" class="buttonCancelOrder btn btn-sm btn-outline-danger"
                                                                    data-toggle="modal" data-target="#modalOrderCancel$os->ordercode"
                                                                    data-backdrop="static" data-keyboard="false">
                                                                <span class="fas fa-times displayNone"></span>
                                                                <span>Cancelled</span>
                                                            </button>
                                                        </div>
                                                        <div class="bg-floralwhite border rounded">
                                                            <button type="button" class="buttonDeliveredOrder btn btn-sm btn-outline-warning"
                                                                    data-toggle="modal" data-target="#modalOrderDelivered$os->ordercode">
                                                                <span class="fas fa-check displayNone"></span>
                                                                <span>Processing</span>
                                                            </button>
                                                        </div>
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