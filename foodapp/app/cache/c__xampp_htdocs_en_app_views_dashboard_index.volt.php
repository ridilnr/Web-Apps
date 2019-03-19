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
                <div class="dashboard active card-header bg-danger container-fluid p-2 text-center d-flex flex-row justify-content-around">
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
                    <span><i class="fas fa-th"></i></span>
                    <span class="p-md-3">Dashboard Page</span>
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
                    <form method="post" class="iconBtn" action="/en/Dashboard/stateConnect">
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
            <section id="searchSection" class="ml-3 mr-3 mt-1 disabled">
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

            <!-- Start aside section displaying messages -->
            <aside class=" mt-3">
                <div class="text-center" id="displayMessage">
                    <?= $this->flash->output() ?>
                </div>
            </aside>
            <!-- End aside section displaying messages -->

            <!-- Start section displaying main content -->
            <section id="mainContent" class="d-flex flex-column flex-nowrap">
                <!--<h1 class="m-2">DASHBOARD</h1>-->
                <div id="boxStatistics" class="bg-white text-danger border border-danger ml-2">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <div class="align-self-start">&nbsp;</div>
                        <div class="align-self-center text-center">
                            <span>STATISTIC DATA WILL BE PLACED HERE</span><br>
                            <span>NO DATA ACTUALLY</span><br>
                            <span>WILL LOOK FOR SAMPLE LATER</span>
                        </div>
                        <div class="align-self-end">&nbsp;</div>
                    </div>
                </div>
                <article class="d-flex flex-row flex-wrap justify-content-around mt-3">
                    <!-- -->
                    <!-- -->
                    <!-- -->
                    <div class="boxDashboard d-flex flex-column justify-content-between">
                        <div class="rowOne m-2 d-flex justify-content-around">
                            <div class="mt-2 d-flex flex-column justify-content-around">
                                <div class="boxDashboardNumber">
                                    <span><?= $numOrder ?></span>
                                </div>
                                <div class="boxDashboardText mt-2">
                                    <span>Total Orders</span>
                                </div>
                            </div>
                            <div class="mt-4 boxDashboardIcon">
                                <span><i class="fas fa-copy fa-5x"></i></span>
                            </div>
                        </div>
                        <div id="linkOrderPage" class="rowTwo">
                            <div class="d-flex justify-content-center">
                                <div class="mt-2">
                                    <span>More Info</span>
                                </div>
                                <div class="ml-3 mt-2">
                                    <span><i class="fas fa-arrow-circle-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- -->
                    <!-- -->
                    <div class="boxDashboard d-flex flex-column justify-content-between">
                        <div class="rowOne m-2 d-flex justify-content-around">
                            <div class="mt-2 d-flex flex-column justify-content-around">
                                <div class="boxDashboardNumber">
                                    <span><?= $numFood ?></span>
                                </div>
                                <div class="boxDashboardText mt-2">
                                    <span>Total Food</span>
                                </div>
                            </div>
                            <div class="mt-4 boxDashboardIcon">
                                <span><i class="fas fa-utensils fa-6x"></i></span>
                            </div>
                        </div>
                        <div id="linkFoodPage" class="rowTwo">
                            <div class="d-flex justify-content-center">
                                <div class="mt-2">
                                    <span>More Info</span>
                                </div>
                                <div class="ml-3 mt-2">
                                    <span><i class="fas fa-arrow-circle-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- -->
                    <!-- -->
                    <div class="boxDashboard d-flex flex-column justify-content-between">
                        <div class="rowOne m-2 d-flex justify-content-around">
                            <div class="mt-2 d-flex flex-column justify-content-around">
                                <div class="boxDashboardNumber">
                                    <span>15</span>
                                </div>
                                <div class="boxDashboardText mt-2">
                                    <span>Total Notification</span>
                                </div>
                            </div>
                            <div class="mt-4 boxDashboardIcon">
                                <span><i class="fas fa-envelope fa-5x"></i></span>
                            </div>
                        </div>
                        <div id="linkNotificationPage" class="rowTwo">
                            <div class="d-flex justify-content-center">
                                <div class="mt-2">
                                    <span>More Info</span>
                                </div>
                                <div class="ml-3 mt-2">
                                    <span><i class="fas fa-arrow-circle-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- -->
                    <!-- -->
                    <div class="boxDashboard d-flex flex-column justify-content-between">
                        <div class="rowOne m-2 d-flex justify-content-around">
                            <div class="mt-2 d-flex flex-column justify-content-around">
                                <div class="boxDashboardNumber">
                                    <span><?= $numDrink ?></span>
                                </div>
                                <div class="boxDashboardText mt-2">
                                    <span>Total Drink</span>
                                </div>
                            </div>
                            <div class="mt-4 boxDashboardIcon">
                                <span><i class="fas fa-glass-martini fa-6x"></i></span>
                            </div>
                        </div>
                        <div id="linkDrinkPage" class="rowTwo">
                            <div class="d-flex justify-content-center">
                                <div class="mt-2">
                                    <span>More Info</span>
                                </div>
                                <div class="ml-3 mt-2">
                                    <span><i class="fas fa-arrow-circle-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- -->
                    <!-- -->
                    <div class="boxDashboard d-flex flex-column justify-content-between">
                        <div class="rowOne m-2 d-flex justify-content-around">
                            <div class="mt-2 d-flex flex-column justify-content-around">
                                <div class="boxDashboardNumber">
                                    <span><?= $numCustomer ?></span>
                                </div>
                                <div class="boxDashboardText mt-2">
                                    <span>Total Customers</span>
                                </div>
                            </div>
                            <div class="mt-4 boxDashboardIcon">
                                <span><i class="fas fa-users fa-5x"></i></span>
                            </div>
                        </div>
                        <div id="linkCustomerPage" class="rowTwo">
                            <div class="d-flex justify-content-center">
                                <div class="mt-2">
                                    <span>More Info</span>
                                </div>
                                <div class="ml-3 mt-2">
                                    <span><i class="fas fa-arrow-circle-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- -->
                    <!-- -->
                    <div class="boxDashboard d-flex flex-column justify-content-between">
                        <div class="rowOne m-2 d-flex justify-content-around">
                            <div class="mt-2 d-flex flex-column justify-content-around">
                                <div class="boxDashboardNumber">
                                    <span></span>
                                </div>
                                <div class="boxDashboardText mt-2">
                                    <span>Settings</span>
                                </div>
                            </div>
                            <div class="mt-4 boxDashboardIcon">
                                <span><i class="fa-spin fas fa-cogs fa-5x"></i></span>
                            </div>
                        </div>
                        <div id="linkAccountPage" class="rowTwo">
                            <div class="d-flex justify-content-center">
                                <div class="mt-2">
                                    <span>Go to Settings</span>
                                </div>
                                <div class="ml-3 mt-2">
                                    <span><i class="fas fa-arrow-circle-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- -->
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
<script src="js/custom/dashboardScript.js"></script>