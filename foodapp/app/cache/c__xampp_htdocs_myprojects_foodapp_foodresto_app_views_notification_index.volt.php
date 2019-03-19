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
                            <a href="Account" title="">
                                <span><i class="fa-spin fas fa-cogs fa-2x"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="row notificationItem active d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <a title="">
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
                            <a href="Customer" title="">
                                <span><i class="fas fa-users fa-2x"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="row orderItem d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <a href="OrderSum" title="">
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
                    <div class="row notificationItem active d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <span><i class="fas fa-flag"></i></span>
                        </div>
                        <div class="">
                            <a title="">
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
                    <span><i class="fas fa-flag"></i></span>
                    <span class="p-md-3">Notification Page</span>
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
                        <form method="post" action="/myprojects/FoodResto/Notification/stateConnect">
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
                    <!-- End Modal User Details -->

                    <!-- Start aside section displaying messages -->
                    <aside class=" mt-3">
                        <div class="text-center" id="displayMessage">
                            <?= $this->flash->output() ?>
                        </div>
                    </aside>
                    <!-- End aside section displaying messages -->
                    <section class="d-flex flex-row flex-wrap justify-content-between lightDark">
                        <div class="w-25 h-100 border" style="height: 80vh">
                            <div class="d-flex flex-row text-center border">
                                <div class="btn-outline-success p-2 w-50 h-100 d-flex justify-content-center">
                                    <div class="align-self-center">
                                        <span><i class="fas fa-check"></i></span>
                                    </div>
                                </div>
                                <div class="btn-outline-danger p-2 w-50 h-100 d-flex justify-content-center border-left border-success">
                                    <div class="align-self-center">
                                        <span><i class="fas fa-times"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-1" style="overflow: auto; height: 72.5vh">
                                <div class="d-flex flex-row justify-content-between bg-white mb-1 pl-2">
                                    <div class="w-30 align-self-center mt-1">
                                        <img class="img-fluid img-thumbnail w-85 rounded-circle" src="img/customerphoto/simba.jpg" alt="">
                                    </div>
                                    <div class="w-50 align-self-center mt-1 pb-2" style="font-size: small">
                                        <span class="font-weight-bold">Name of user</span><br>
                                        <span>Date Message Sent</span><br>
                                        <span>Time Message sent</span>
                                    </div>
                                    <div class="w-15 h-25 text-right pr-1">
                                        <button class="btn btn-sm btn-outline-success">
                                            <span><i class="fas fa-check"></i></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-between bg-white mb-1 pl-2">
                                    <div class="w-30 align-self-center mt-1">
                                        <img class="img-fluid img-thumbnail w-85 rounded-circle" src="img/customerphoto/simba.jpg" alt="">
                                    </div>
                                    <div class="w-50 align-self-center mt-1 pb-2" style="font-size: small">
                                        <span class="font-weight-bold">Name of user</span><br>
                                        <span>Date Message Sent</span><br>
                                        <span>Time Message sent</span>
                                    </div>
                                    <div class="w-15 h-25 text-right pr-1">
                                        <button class="btn btn-sm btn-outline-success">
                                            <span><i class="fas fa-check"></i></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-between bg-white mb-1 pl-2">
                                    <div class="w-30 align-self-center mt-1">
                                        <img class="img-fluid img-thumbnail w-85 rounded-circle" src="img/customerphoto/simba.jpg" alt="">
                                    </div>
                                    <div class="w-50 align-self-center mt-1 pb-2" style="font-size: small">
                                        <span class="font-weight-bold">Name of user</span><br>
                                        <span>Date Message Sent</span><br>
                                        <span>Time Message sent</span>
                                    </div>
                                    <div class="w-15 h-25 text-right pr-1">
                                        <button class="btn btn-sm btn-outline-success">
                                            <span><i class="fas fa-check"></i></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-between bg-white mb-1 pl-2">
                                    <div class="w-30 align-self-center mt-1">
                                        <img class="img-fluid img-thumbnail w-85 rounded-circle" src="img/customerphoto/simba.jpg" alt="">
                                    </div>
                                    <div class="w-50 align-self-center mt-1 pb-2" style="font-size: small">
                                        <span class="font-weight-bold">Name of user</span><br>
                                        <span>Date Message Sent</span><br>
                                        <span>Time Message sent</span>
                                    </div>
                                    <div class="w-15 h-25 text-right pr-1">
                                        <button class="btn btn-sm btn-outline-success">
                                            <span><i class="fas fa-check"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-between border w-75" style="height: 80vh">
                            <div>
                                <div class="d-flex flex-row justify-content-between bg-white mb-1 pl-2 border-bottom">
                                    <div class="w-25 align-self-center mt-2 pb-2">
                                        <img class="img-fluid img-thumbnail w-50 rounded" src="img/customerphoto/simba.jpg" alt="" style="border-radius: 0%">
                                    </div>
                                    <div class="w-50 mt-2 pb-2 d-flex justify-content-center">
                                        <div>
                                            <span>Address user hhhhhhh hjhjhj jvhcfy jvfcgfhghv vujyyvy</span><br>
                                            <span>Food details</span><br>
                                        </div>
                                    </div>
                                    <div class="w-25 h-25 text-right pr-1 pt-1" style="border">
                                        <button class="btn btn-lg btn-outline-success">
                                            <span><i class="fas fa-check"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id="chatSection" class="">
                                <div class="float-left mt-1">
                                    <div class="ml-3 mr-5 mb-1 border p-2 bg-white">
                                        <div class="">I'm to see you here again   hjb gyuu fyrdy tfrtdtdt tfyfr hvgvy v</div>
                                        <div class="messageTime mt-2 pl-3">16:50</div>
                                    </div>
                                </div>
                                <div class="float-right mt-1">
                                    <div class="ml-5 mr-3 mb-1 border p-2 border-white bg-danger">
                                        <div class="">I'm to see you here again   hjb gyuu fyrdy tfrtdtdt tfyfr hvgvy vyvyv gycy gvyty gvv</div>
                                        <div class="messageTime mt-2 pl-3">17:00</div>
                                    </div>
                                </div>
                                <div class="float-left mt-1">
                                    <div class="ml-3 mr-5 mb-1 border p-2 bg-white">
                                        <div class="">I'm to see you here again gycy gvyty again gycy gvyty gvv</div>
                                        <div class="messageTime mt-2 pl-3">17:10</div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="d-flex flex-row justify-content-between bg-white pl-2 border-bottom">
                                    <div class="w-10 pb-2 d-flex justify-content-center">
                                        <div class="align-self-center img-fluid img-thumbnail rounded-circle">
                                            <span class="far fa-smile p-1 lightDark" style="font-size: xx-large"></span>
                                        </div>
                                    </div>
                                    <div class="w-75 mt-2 pb-2 d-flex justify-content-center">
                                        <div class="d-flex w-100 border pl-2 pr-2" style="border-radius: 10px; background-color: floralwhite">
                                            <div class="divTextInput align-self-center w-100" contenteditable="true"
                                                 spellcheck="true" placeholder="Type your reply"></div>
                                        </div>
                                    </div>
                                    <div class="w-10 pr-1 d-flex justify-content-center">
                                        <div class="align-self-center">
                                            <button class="btn btn-outline-success">
                                                <span><i class="fas fa-paper-plane"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
            </section>
            <!-- End section displaying main content -->

            <!-- Start Footer of dashboard -->
            <footer class="mt-4">
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
<script src="js/custom/notificationScript.js"></script>