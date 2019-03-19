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
                    <div class="row configItem active d-flex flex-row justify-content-around list-group-item">
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
            <header class="divTitle d-flex flex-nowrap align-items-center">
                <div class="restaurantName container-fluid">
                    <span><i class="fas fa-cogs"></i></span>
                    <span class="p-md-3">My Configuration</span>
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
                    <form method="post" class="iconBtn" action="/en/Account/stateConnect">
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
                <article class="text-warning">
                    <!-- Start Modal User Details -->
                    <div class="modal fade bd-example-modal-lg" id="modalUserDetails" tabindex="-1" role="dialog" aria-labelledby="modalAddFoodTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">User Information</h5>
                                    <button type="button" onclick="unsetStateAddForm()"  class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="unsetStateAddForm()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal New Drink -->

                    <!-- Start aside section displaying messages -->
                    <aside class=" mt-3">
                        <div class="text-center" id="displayMessage">
                            {{ flash.output() }}
                        </div>
                    </aside>
                    <!-- End aside section displaying messages -->

                    <!-- Start displaying configuration settings -->
                    <div id="cardConfiguration" class="cardConfiguration card text-center">
                        <!-- Start displaying header configuration settings -->
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a id="linkAccountSettings" class="nav-link active">Account Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a id="linkApplicationSettings" class="nav-link">Application Settings</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End displaying header configuration settings -->

                        <!-- Start displaying body configuration settings (account settings) -->
                        <div id="bodyAccountSettings" class="card-body">
                            <form>
                                <div class="d-flex flex-row flex-wrap justify-content-between">
                                    <div class="input-group mb-3 w-45">
                                        <div class="input-group-prepend">
                                            <label for="accountRestaurantName" class="input-group-text" id="account-restaurant-name">Restaurant Name</label>
                                        </div>
                                        <input id="accountRestaurantName" name="accountRestaurantName" type="text" class="form-control" placeholder="{{ restaurantName }}" value="{{ restaurantName }}" aria-label="Restaurant-Name" aria-describedby="account-restaurant-name" disabled>
                                    </div>
                                    <div class="input-group mb-3 w-45">
                                        <div class="input-group-prepend">
                                            <label for="accountType" class="input-group-text" id="account-type">Type</label>
                                        </div>
                                        <input id="accountType" name="accountType" type="text" class="form-control" placeholder="{{ restaurantType }}" value="{{ restaurantType }}" aria-label="restaurant-type" aria-describedby="account-type" disabled>
                                    </div>
                                    <div class="input-group mb-3 w-45">
                                        <div class="input-group-prepend">
                                            <label for="accountCodeUpdatePassword" class="input-group-text" id="account-code-update-password">Code Updating Password</label>
                                        </div>
                                        <input id="accountCodeUpdatePassword" name="accountCodeUpdatePassword" type="text" class="form-control" placeholder="{{ restaurantPasswordUpdateCode }}" value="{{ restaurantPasswordUpdateCode }}" aria-label="restaurant-code-updating-password" aria-describedby="account-code-update-password" disabled>
                                    </div>
                                    <div class="input-group mb-3 w-45">
                                        <div class="input-group-prepend">
                                            <label for="accountLinkUpdatePassword" class="input-group-text" id="account-link-update-password">Link Updating Password</label>
                                        </div>
                                        <input id="accountLinkUpdatePassword" name="accountLinkUpdatePassword" type="text" class="form-control" placeholder="{{ restaurantPasswordUpdateLink }}" value="{{ restaurantPasswordUpdateLink }}" aria-label="restaurant-link-updating-password" aria-describedby="account-link-update-password" disabled>
                                    </div>
                                    <div class="input-group mb-3 w-45">
                                        <div class="input-group-prepend">
                                            <label for="accountCreationDate" class="input-group-text" id="account-creation-date">Creation Date</label>
                                        </div>
                                        <input id="accountCreationDate" name="accountCreationDate" type="text" class="form-control" placeholder="{{ restaurantDateCreation }}" value="{{ restaurantDateCreation }}" aria-label="restaurant-creation-date" aria-describedby="account-creation-date" disabled>
                                    </div>
                                    <div class="input-group mb-3 w-45">
                                        <div class="input-group-prepend">
                                            <label for="accountOtherInfo" class="input-group-text" id="account-other-info">Other Info</label>
                                        </div>
                                        <input id="accountOtherInfo" name="accountOtherInfo" type="text" class="form-control" placeholder="{{ restaurantOtherInfo }}" value="{{ restaurantOtherInfo }}" aria-label="restaurant-other-info" aria-describedby="account-other-info">
                                    </div>
                                    <div class="input-group mb-3 w-45">
                                        <div class="input-group-prepend">
                                            <label for="startingHour" class="input-group-text">Starting Time</label>
                                        </div>
                                        <input type="number" name="startingHour" id="startingHour" aria-label="Starting Hour" class="form-control">
                                        <div class="input-group-prepend">
                                            <label for="startingHour" class="labelHour input-group-text"><span>Hour</span></label>
                                        </div>
                                        <input type="number" name="startingMinute" id="startingMinute" aria-label="Starting Minute" class="form-control">
                                        <div class="input-group-prepend">
                                            <label for="startingMinute" class="labelMinute input-group-text"><span>Minutes</span></label>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3 w-45">
                                        <div class="input-group-prepend">
                                            <label for="accountStartingPrice" class="input-group-text" id="account-starting-price">Starting Price</label>
                                        </div>
                                        <input id="accountStartingPrice" name="accountStartingPrice" type="number" class="form-control" placeholder="" value="" aria-label="restaurant-starting-price" aria-describedby="restaurant-starting-price">
                                    </div>
                                    <div class="input-group mb-3 w-45">
                                        <div class="input-group-prepend">
                                            <label for="endingHour" class="input-group-text">Ending Time</label>
                                        </div>
                                        <input type="number" name="endingHour" id="endingHour" aria-label="Ending Hour" class="form-control">
                                        <div class="input-group-prepend">
                                            <label for="endingHour" class="labelHour input-group-text"><span>Hour</span></label>
                                        </div>
                                        <input type="number" name="endingMinute" id="endingMinute" aria-label="Ending Minute" class="form-control">
                                        <div class="input-group-prepend">
                                            <label for="endingMinute" class="labelMinute input-group-text"><span>Minutes</span></label>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3 w-45">
                                        <div class="input-group-prepend">
                                            <label for="accountCity" class="input-group-text" id="account-city">City</label>
                                        </div>
                                        <input id="accountCity" name="accountCity" type="text" class="form-control" placeholder="{{ restaurantCity }}" value="{{ restaurantCity }}" aria-label="restaurant-city" aria-describedby="account-city" disabled>
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-center divAccountSettingButton">
                                    <button type="button" class="btn btn-danger">Save changes</button>
                                    <button type="button" class="btn btn-secondary ml-5" data-dismiss="modal">Reset</button>
                                </div>
                            </form>
                        </div>
                        <!-- End displaying body configuration settings (account settings) -->

                        <!-- Start displaying body configuration settings (application settings) -->
                        <div id="bodyApplicationSettings" class="card-body displayNone">
                            <h5 class="card-title">Application Settings</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <!-- End displaying body configuration settings (application settings) -->

                        <!-- Start displaying footer configuration settings -->
                        <div class="card-footer bg-light">
                            <span>Last Update : </span>
                            <span>{{ restaurantLastUpdateDate }}2018-02-20</span>
                            <span> / </span>
                            <span>Last Login : </span>
                            <span>{{ restaurantLastLoginDate }}2018-02-20</span>
                        </div>
                        <!-- End displaying footer configuration settings -->
                    </div>
                    <!-- End displaying configuration settings -->

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
<script src="js/custom/accountScript.js"></script>