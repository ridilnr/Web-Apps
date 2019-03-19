<main class="container-fluid">
    <div class="row">
        <!-- Start Navigation Menu -->
        <section id="mainLeft2" class="mainLeft col-4 col-sm-3 col-lg-2 bg-danger">
            <div class="container-fluid divTitle d-flex flex-row justify-content-around align-items-center">
                <!--<div class="container-fluid divTitle">-->
                <div class="">
                    <span>{{ restaurantName }}</span>
                </div>
                <div class="divArrow">
                    <span class="pl-2 fas fa-angle-double-left"></span>
                </div>
            </div>
            <div class="container-fluid p-2 text-center">
                <img src="{{ restaurantPhoto }}" class="img-fluid">
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
                    <div id="orderSumMenu" class="row orderItem d-flex flex-row justify-content-around list-group-item">
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
                            <span>{{ numOrder }}</span>
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
                            <span>{{ numFood }} + {{ numDrink }}</span>
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
                    <div class="row customerItem active d-flex flex-row justify-content-around list-group-item">
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
                            <span>{{ numCustomer }}</span>
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
                    <span><i class="fas fa-users"></i></span>
                    <span class="p-md-3">Customers Page</span>
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
                    <form method="post" class="iconBtn" action="/en/Customer/stateConnect">
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

            <!-- Start section displaying main content -->
            <section id="mainContent" class="container-fluid mt-3">
                <article id="articleTagCustomer">
                    <div class="d-flex flex-row flex-wrap justify-content-between">
                        <!-- Start order filter form -->
                        <form method="post" onsubmit="filterCustomer(this)" id="filterForm" class="input-group ml-2 customerFilterForm">
                            <select title="filter box of customers" data-selected-option="{{ selectedFilter }}" class="custom-select" id="filterParam" name="filterParam">
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
                        <div class="divBtnToBlockCustomer">
                            <button class="btn btn-sm btn-dark" data-toggle="modal" data-target="#modalUserDetails">
                                Blocked Customers ({{ numBlockedCustomer }})
                            </button>
                        </div>
                        <!-- End Button Blocked Customers -->
                    </div>
                    <!-- Start Modal User Blocked Details -->
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
                    <!-- End Modal User Blocked Details -->

                    <!-- Start aside section displaying messages -->
                    <aside class=" mt-3">
                        <div class="text-center" id="displayMessage">
                            {{ flash.output() }}
                        </div>
                    </aside>
                    <!-- End aside section displaying messages -->
<!----------------------------------------------- ------------------------------------------------------------------>
                    <?php
                        if((sizeof($customer) !== 0) or (count($customer)!==0)){
                            foreach($customer as $cr){
                                $allRatingTag = "";
                                $randNum = "generalRateCustomer".$cr->phonenumber;
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
                                                        <span>$cr->fullname</span>
                                                    </div>
                                                </div>
                                                <div class="modal-footer d-flex justify-content-center">
                                                    <div>
                                                        <button type="button" class="btn btn-outline-warning" onclick="getResponseConfirmRate('modal$randNum', 'yes', '$cr->id', '')">
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

                                    <!-- Start section Listing a user -->
                                    <div class="boxListOrder mt-3">
                                        <div class="divUserInformation d-flex flex-row p-2">
                                            <!--<div class="divUserImage w-15">
                                                <img src="img/restophoto/restologo.jpg" class="img-fluid rounded-circle">
                                            </div>-->
                                            <div class="divUserDetails w-100 ml-3">
                                                <div id="subDivUserDetails" class="d-flex flex-row flex-wrap justify-content-between text-center">
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
Here1;
                                                    if(!empty($cr->restorating)){
                                                        for($k = 0; $k < 5; $k++){
                                                            $star = $k + 1;
                                                            if($k < $cr->restorating){
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
                                                    $printCustomerRating = <<<Here2
                                                    <div class="d-flex flex-column ml-2">
                                                        <div class="">
                                                            <span>Rate Customer</span>
                                                        </div>
                                                        <div id="$randNum" data-name-customer="$cr->fullname" class="divRatingStar" onmouseleave="getAndKeepNumStar(this.id)">
                                                            $allRatingTag
                                                        </div>
                                                    </div>
Here2;
                                                    $printCustomerButton = <<<Here3
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
Here3;
                                print $printCustomer;
                                print $printCustomerRating;
                                print $printCustomerButton;
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
                                    <span aria-hidden="true"><<{#&laquo;#}</span>
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
                                    <span aria-hidden="true">>>{#&raquo;#}</span>
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
<script>
    function testAjax() {
        $.ajax({
            method: "POST",
            url: "Customer/test",
            data: { name: "John", location: "Boston" }
        })
        .done(function( msg ) {
            alert( "Data Saved: " + msg );
        });
    }
</script>