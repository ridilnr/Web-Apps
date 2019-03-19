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
                    <div class="row customerItem active d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <a title="">
                                <span><i class="fas fa-users fa-2x"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="row orderItem d-flex flex-row justify-content-around list-group-item">
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
                <div class="divNameRestaurant">
                    <a class="nameRestaurant" href="Dashboard" title="">
                        <span><?= $restaurantName ?></span>
                    </a>
                </div>
                <div class="divArrow">
                    <span class="pl-2"><i class="fas fa-angle-double-left"></i></span>
                </div>
            </div>
            <div class="container-fluid p-2 text-center">
                <a href="Dashboard">
                    <img src="<?= $restaurantPhoto ?>" class="img-fluid">
                </a>
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
                    <div id="orderSumMenu" class="row orderItem d-flex flex-row justify-content-around list-group-item">
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
                            <span><?= $numOrder ?></span>
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
                    <div class="row customerItem active d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <span><i class="fas fa-users"></i></span>
                        </div>
                        <div class="">
                            <a title="">
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
                    <span><i class="fas fa-users"></i></span>
                    <span class="p-md-3">Customers Page</span>
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
                        <form method="post" action="/myprojects/FoodResto/Customer/stateConnect">
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

            <!-- Start section displaying main content -->
            <section id="mainContent" class="container-fluid mt-3">
                <article class="">
                    <div class="d-flex flex-row flex-wrap justify-content-between">
                        <!-- Start order filter form -->
                        <form method="post" onsubmit="filterCustomer(this)" id="filterForm" class="input-group ml-3">
                            <select title="filter box of customers" data-selected-option="<?= $selectedFilter ?>" class="custom-select" id="filterParam" name="filterParam">
                                <option value="Choose..." selected="selected">Choose...</option>
                                <optgroup label="Filter in Ascending Order By">
                                    <option value="nameAscending">Name</option>
                                    <option value="emailAscending">Email</option>
                                    <option value="phoneAscending">Phone number</option>
                                    <option value="cityAscending">City</option>
                                    <option value="addressAscending">Home Address</option>
                                    <option value="ratingAscending">Rating</option>
                                </optgroup>
                                <optgroup label="Filter in Descending Order by">
                                    <option value="nameDescending">Name</option>
                                    <option value="emailDescending">Email</option>
                                    <option value="phoneDescending">Phone number</option>
                                    <option value="cityDescending">City</option>
                                    <option value="addressDescending">Home Address</option>
                                    <option value="ratingDescending">Rating</option>
                                </optgroup>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-outline-danger" type="submit">Filter</button>
                            </div>
                        </form>
                        <!-- End order filter form -->

                        <!-- Start Button Blocked Customers -->
                        <div>
                            <button class="btn btn-sm btn-dark" data-toggle="modal" data-target="#modalUserDetails">
                                Blocked Customers (<?= $numBlockedCustomer ?>)
                            </button>
                        </div>
                        <!-- End Button Blocked Customers -->
                    </div>
                    <!-- Start Modal User Details -->
                    <div class="modal fade bd-example-modal-lg" id="modalUserDetails" tabindex="-1" role="dialog" aria-labelledby="modalAddFoodTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal" role="document">
                            <div id="modalContentBlockedCustomers" class="modal-content">
                                <div id="modalHeaderBlockedCustomers" class="modal-header bg-dark">
                                    <div class="modal-title">List of blocked customers</div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div id="modalBodyBlockedCustomers" class="modal-body">
                                    <ul class="list-group">
                                        <?php
                                            foreach($blockedCustomers as $bc){
                                                $cutomer = <<<AWA
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <span class="">$bc->fullname ($bc->phonenumber)</span>
                                                    <a href="Customer/blockUnblockCustomer?param=$bc->userid&do=unblock">
                                                        <button type="button" class="btn btn-sm btn-outline-danger rounded-circle border-0">
                                                            <span class="badge badge-pill p-1"><i class="far fa-trash-alt fa-2x"></i></span>
                                                        </button>
                                                    </a>
                                                </li>
AWA;
                                                print $cutomer;
                                            }
                                        ?>
                                    </ul>
                                </div>
                                <div id="modalFooterBlockedCustomers" class="modal-footer d-flex justify-content-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal New Drink -->

                    <!-- Start aside section displaying messages -->
                    <aside class=" mt-3">
                        <div class="text-center" id="displayMessage">
                            <?= $this->flash->output() ?>
                        </div>
                    </aside>
                    <!-- End aside section displaying messages -->
<!----------------------------------------------- ------------------------------------------------------------------>
                    <?php
                        if((sizeof($customer) !== 0) or (count($customer)!==0)){
                            foreach($customer as $cr){
                                $randNum = "generalRateCustomer".$cr->phonenumber;
                                $printCustomer = <<<Here
                                    <!-- Start section Listing a user -->
                                    <div class="boxListOrder mt-3">
                                        <div class="divUserInformation d-flex flex-row p-2">
                                            <!--<div class="divUserImage w-15">
                                                <img src="img/restophoto/restologo.jpg" class="img-fluid rounded-circle">
                                            </div>-->
                                            <div class="divUserDetails w-100 ml-3">
                                                <div class="d-flex flex-row flex-wrap justify-content-between text-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="">
                                                            <span>Full name</span>
                                                        </div>
                                                        <div class="">
                                                            <span>$cr->fullname</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column ml-2">
                                                        <div class="">
                                                            <span>Email</span>
                                                        </div>
                                                        <div class="">
                                                            <span>$cr->email</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column ml-2">
                                                        <div class="">
                                                            <span>Phone Number</span>
                                                        </div>
                                                        <div class="">
                                                            <span>$cr->phonenumber</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column ml-2">
                                                        <div class="">
                                                            <span>City</span>
                                                        </div>
                                                        <div class="">
                                                            <span>$cr->city</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column mw-40 ml-2">
                                                        <div class="">
                                                            <span>Home Address</span>
                                                        </div>
                                                        <div class="">
                                                            <span>$cr->address</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column ml-2">
                                                        <div class="">
                                                            <span>Rate Customer</span>
                                                        </div>
                                                        <div id="$randNum" data-name-customer="$cr->fullname" class="divRatingStar" onmouseleave="getAndKeepNumStar(this.id)">
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
                                                    </div>
                                                    <div class="d-flex flex-column ml-2">
                                                        <div class="bg-floralwhite border rounded">
                                                            <a href="Customer/blockUnblockCustomer?param=$cr->userid&do=block" title="">
                                                                <button type="button" class="btn btn-outline-dark">
                                                                    <span>Block</span>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End section Listing a user -->
Here;
                                print $printCustomer;
                            }
                        }else{
                            echo "<div class='bg-danger'>
                                        <h1 class='text-light text-center'>Sorry, You don't have any customer for now. :(</h1>
                                  </div>";
                        }
                    ?>
<!----------------------------------------------- ------------------------------------------------------------------>
                    <!-- Start Pagination Customers -->
                    <nav class="mt-3" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a href="Customer?page=1" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true"><<</span>
                                    <span class="sr-only">First</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <?php
                                    $previous = (int)($page->current - 1);
                                    if($previous === 0)
                                        echo "<a href='Customer?page=1' class='page-link' aria-label='Previous'>";
                                    else
                                        echo "<a href='Customer?page=$previous' class='page-link' aria-label='Previous'>";
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
                                                <a href='Customer?page=$i' class='page-link'>$i</a>
                                            </li>"
                                        );
                                    }else{
                                        echo(
                                            "<li class='page-item'>
                                                <a href='Customer?page=$i' class='page-link'>$i</a>
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
                                        echo "<a href='Customer?page=$page->last' class='page-link' aria-label='Next'>";
                                    else
                                        echo "<a href='Customer?page=$next' class='page-link' aria-label='Next'>";
                                ?>
                                    <span aria-hidden="true">Next</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="Customer?page=<?= $page->last; ?>" class="page-link" aria-label="Last">
                                    <span aria-hidden="true">>></span>
                                    <span class="sr-only">Last</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Pagination Customers -->
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
<script src="js/custom/customerScript.js"></script>