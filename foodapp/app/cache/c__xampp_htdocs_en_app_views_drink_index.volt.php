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
                            <a href="Food">
                                <span><i class="fas fa-utensils fa-2x"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="row drinkItem active d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <a>
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
                <div class="dashboard card-header bg-danger container-fluid p-2 text-center d-flex flex-row justify-content-around">
                    <div>
                        <span><i class="fas fa-th"></i></span>
                    </div>
                    <div class="text-center">
                        <a href="Dashboard" title="">
                            <span>Dashboard</span>
                        </a>
                    </div>
                </div>
                <div id="Menu" class="container-fluid list-group list-group-flush d-flex flex-column">
                    <div class="row configItem d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <span><i class="fa-spin fas fa-cogs"></i></span>
                        </div>
                        <div class="">
                            <a href="Account" title="">
                                <span>Configuration</span>
                            </a>
                        </div>
                    </div>
                    <div class="row notificationItem d-flex flex-row justify-content-around list-group-item">
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
                    <div class="row foodItem d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <span><i class="fas fa-utensils"></i></span>
                        </div>
                        <div class="">
                            <a href="Food" title="">
                                <span>Food</span>
                            </a>
                        </div>
                        <div class="">
                            <span><i class="fas fa-circle fa-2x"></i></span>
                        </div>
                        <div class="boxCounter">
                            <span><?= $numFood ?></span>
                        </div>
                    </div>
                    <div class="row drinkItem active d-flex flex-row justify-content-around list-group-item">
                        <div class="">
                            <span><i class="fas fa-glass-martini"></i></span>
                        </div>
                        <div class="">
                            <a title="">
                                <span>Drink</span>
                            </a>
                        </div>
                        <div class="">
                            <span><i class="fas fa-circle fa-2x"></i></span>
                        </div>
                        <div class="boxCounter">
                            <span><?= $numDrink ?></span>
                        </div>
                    </div>
                    <div class="row customerItem d-flex flex-row justify-content-around list-group-item">
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
                    <div class="row orderItem d-flex flex-row justify-content-around list-group-item">
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
                    <div class="row logoutItem d-flex flex-row justify-content-around list-group-item">
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
                    <span><i class="fas fa-glass-martini"></i></span>
                    <span class="p-md-3">Drink Page</span>
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
                    <div class="d-flex flex-row flex-wrap">
                        <!-- Start Button trigger modal -->
                        <div>
                            <button id="addDrinkButton" class="btn btn-danger" data-toggle="modal" data-target="#modalAddDrink">
                                <span><i class="fas fa-plus"></i></span>
                                <span>Add Drink</span>
                            </button>
                        </div>
                        <!-- End Button trigger modal -->
                        <!-- Start Filter Section -->
                        <form method="post" onsubmit="filterProduct(this)" id="filterForm" class="input-group w-50 ml-3">
                            <select title="filter box for food" data-selected-option="<?= $selectedFilter ?>" class="custom-select" id="filterParam" name="filterParam">
                                <option value="Choose..." selected="selected">Choose...</option>
                                <optgroup label="Filter in Ascending Order By">
                                    <option value="nameAscending">Name</option>
                                    <option value="typeAscending">Type</option>
                                    <option value="priceAscending">Price</option>
                                    <option value="sizeAscending">Size</option>
                                    <option value="discountAscending">Discount</option>
                                    <option value="dateInsertedAscending">Date Inserted</option>
                                    <option value="dateUpdatedAscending">Date Updated</option>
                                </optgroup>
                                <optgroup label="Filter in Descending Order by">
                                    <option value="nameDescending">Name</option>
                                    <option value="typeDescending">Type</option>
                                    <option value="priceDescending">Price</option>
                                    <option value="sizeDescending">Size</option>
                                    <option value="discountDescending">Discount</option>
                                    <option value="dateInsertedDescending">Date Inserted</option>
                                    <option value="dateUpdatedDescending">Date Updated</option>
                                </optgroup>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-outline-danger" type="submit">Filter</button>
                            </div>
                        </form>
                        <!-- End Filter Section -->
                    </div>
                    <!-- Start Modal New Drink -->
                    <div class="modal fade bd-example-modal-lg" id="modalAddDrink" tabindex="-1" role="dialog" aria-labelledby="modalAddDrinkTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">New Drink Information</h5>
                                    <button type="button" onclick="unsetStateAddForm()"  class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" id="addDrinkForm" onsubmit="validateFormAndSetStateAddForm(this)" autocomplete="off" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="text-center" id="displayMessage1">
                                            &nbsp;
                                        </div>
                                        <div class="d-flex flex-row flex-wrap justify-content-between">
                                            <div class="input-group w-45 h-25">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text bg-light" for="addDrinkName">Drink Name</label>
                                                </div>
                                                <input type="text" name="addDrinkName" id="addDrinkName" class="form-control" required>
                                            </div>
                                            <div class="input-group mb-3 w-45 h-25">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text bg-light" for="addDrinkPrice">Drink Price</label>
                                                </div>
                                                <input type="text" name="addDrinkPrice" id="addDrinkPrice" class="form-control" aria-label="Amount (to the nearest turkish lira)" required>
                                                <div class="input-group-append">
                                                    <label class="input-group-text bg-light" for="addDrinkPrice">TL</label>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3 w-45 h-25">
                                                <div class="custom-file">
                                                    <input type="file" name="addDrinkImage" id="addDrinkImage" onchange="printNameDrinkImage(this)" class="custom-file-input" required>
                                                    <label class="custom-file-label" for="addDrinkImage">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3 w-45 h-25">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text bg-light" for="addDrinkType">Drink Type</label>
                                                </div>
                                                <select class="custom-select" name="addDrinkType" id="addDrinkType">
                                                    <option value="null">Select...</option>
                                                    <option value="One">One</option>
                                                    <option value="Two">Two</option>
                                                    <option value="Three">Three</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3 w-45 h-25">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text bg-light" for="addDrinkSize">Drink Size</label>
                                                </div>
                                                <input type="text" name="addDrinkSize" id="addDrinkSize" class="form-control" aria-label="Size (to the nearest kilogram)">
                                                <div class="input-group-append">
                                                    <label class="input-group-text bg-light" for="addDrinkSize">Kg</label>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3 w-45 h-25">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text bg-light" for="addDrinkDiscount">Drink Discount</label>
                                                </div>
                                                <input type="text" name="addDrinkDiscount" id="addDrinkDiscount" class="form-control" aria-label="Amount (to the nearest percentage)">
                                                <div class="input-group-append">
                                                    <label class="input-group-text bg-light" for="addDrinkDiscount">%</label>
                                                </div>
                                            </div>
                                            <div class="input-group w-45 h-50">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text bg-light" for="addDrinkDescription">Drink Description</label>
                                                </div>
                                                <textarea rows="3" name="addDrinkDescription" id="addDrinkDescription" class="form-control" aria-label="With textarea"></textarea>
                                            </div>
                                            <div class="input-group mb-3 w-45 h-25 d-flex flex-row justify-content-around">
                                                <div class="">
                                                    <label class="col-form-label" for="addDrinkAvailability1">Drink Availability : </label>
                                                </div>
                                                <div class="col-form-label">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="addDrinkAvailability" value="yes" id="addDrinkAvailability1" class="custom-control-input" checked>
                                                        <label class="custom-control-label" for="addDrinkAvailability1">Available</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio"  name="addDrinkAvailability" value="no" id="addDrinkAvailability2" class="custom-control-input">
                                                        <label class="custom-control-label" for="addDrinkAvailability2">No Available</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="unsetStateAddForm()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add Drink</button>
                                        <button type="reset" class="btn btn-danger">Reset Form</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal New Drink -->

                    <!-- Start aside section displaying messages -->
                    <aside class=" mt-3">
                        <div class="text-center" id="displayMessage2">
                            <?= $this->flash->output() ?>
                        </div>
                    </aside>
                    <!-- End aside section displaying messages -->

                    <!-- Start section Listing all food -->
                    <div id="boxListDrink" class="bg-success mt-3">
                        <ul class="list-group">
                            <?php
                                if((sizeof($drink) !== 0) or (count($drink)!==0)){
                                    foreach($drink as $dk){
                                        $printDrinkItem = <<<Here
                                            <li class="foodNamePlusButtons list-group-item">
                                                <div class="d-flex flex-row flex-wrap justify-content-between">
                                                    <div class="">
                                                        <span>$dk->drinkname</span>
                                                    </div>
                                                    <div class="d-flex flex-row text-primary">
                                                        <div class="boxView" data-class="box"
                                                             onclick="viewEditDrinkDetails(this, this.parentElement, this.parentElement.parentElement.parentElement.nextElementSibling,
                                                                                                              this.parentElement.parentElement.parentElement.nextElementSibling.nextElementSibling)">
                                                            <a data-toggle="tooltip" data-placement="top" title="View food details">
                                                                <span><i class="fas fa-eye"></i></span>
                                                            </a>
                                                        </div>
                                                        <div class="ml-3 boxEdit" data-class="box"
                                                             onclick="viewEditDrinkDetails(this, this.parentElement, this.parentElement.parentElement.parentElement.nextElementSibling,
                                                                                                              this.parentElement.parentElement.parentElement.nextElementSibling.nextElementSibling);
                                                                                          setSelectedType(this.parentElement.parentElement.parentElement.nextElementSibling.nextElementSibling.querySelector('#updateDrinkType'), '$dk->type')">
                                                            <a data-toggle="tooltip" data-placement="top" title="Update food details">
                                                                <span><i class="fas fa-edit eClose"></i></span>
                                                            </a>
                                                        </div>
                                                        <div class="ml-3 boxDelete" data-class="box"
                                                             onclick="deleteDrink('$dk->drinkid')">
                                                            <a data-toggle="tooltip" data-placement="top" title="Delete Drink">
                                                                <form method="post" action="/enFoodResto/Drink/deleteDrink">
                                                                    <input type="hidden" name="hashcode" value=$dk->drinkid>
                                                                    <button type="submit" style="border: none; color: inherit; background-color: #fff">
                                                                        <span><i class="fas fa-times"></i></span>
                                                                    </button>
                                                                </form>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="viewDrinkSection list-group-item bg-light">
                                                <div class="font-weight-bold">
                                                    <span>All information about $dk->drinkname</span>
                                                </div>
                                                <hr class="mt-1">
                                                <div class="d-flex flex-row">
                                                    <div class="divImageDrink">
                                                        <img src="$dk->photo" class="img-fluid">
                                                    </div>
                                                    <div class="ml-3 d-flex flex-row flex-wrap justify-content-between">
                                                        <div class="w-25  mb-3 ml-2">
                                                            <span><b>Name : </b></span>
                                                            <span>$dk->drinkname</span>
                                                        </div>
                                                        <div class="w-25 mb-3 ml-2">
                                                            <span><b>Price : </b></span>
                                                            <span>$dk->price</span>
                                                            <span>TL</span>
                                                        </div>
                                                        <div class="w-25 mb-3 ml-2">
                                                            <span><b>Type : </b></span>
                                                            <span>$dk->type</span>
                                                        </div>
                                                        <div class="w-25 mb-3 ml-2">
                                                            <span><b>Size : </b></span>
                                                            <span>$dk->size</span>
                                                            <span>Kg</span>
                                                        </div>
                                                        <div class="w-25 mb-3 ml-2">
                                                            <span><b>Discount : </b></span>
                                                            <span>$dk->discount</span>
                                                            <span>%</span>
                                                        </div>
                                                        <div class="w-25 ml-2">
                                                            <span><b>Description : </b></span>
                                                            <span>$dk->description</span>
                                                        </div>
                                                        <div class="w-25 mb-3 ml-2">
                                                            <span><b>Availability : </b></span>
                                                            <span>$dk->available</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-3 w-100 d-flex justify-content-center">
                                                    <div>
                                                        <button id="editDrinkButton" type="button" class="btn btn-primary"
                                                                onclick="viewEditDrinkDetails(this.parentElement.parentElement.parentElement.previousElementSibling.querySelector('.ml-3.boxEdit'),
                                                                                                             this.parentElement.parentElement.parentElement.previousElementSibling.querySelector('.ml-3.boxEdit').parentElement,
                                                                                                             this.parentElement.parentElement.parentElement.previousElementSibling.querySelector('.ml-3.boxEdit').parentElement.parentElement.parentElement.nextElementSibling,
                                                                                                             this.parentElement.parentElement.parentElement.previousElementSibling.querySelector('.ml-3.boxEdit').parentElement.parentElement.parentElement.nextElementSibling.nextElementSibling);
                                                                                        setSelectedType(this.parentElement.parentElement.parentElement.nextElementSibling.querySelector('#updateDrinkType'), '$dk->type')">
                                                            Edit Drink
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="updateDrinkSection list-group-item bg-light">
                                                <div class="font-weight-bold">
                                                    <span>Update $dk->drinkname information</span>
                                                </div>
                                                <hr class="mt-1">
                                                <form method="post" action="/en/Drink/updateDrink" class="d-flex flex-row flex-wrap justify-content-between" autocomplete="off" enctype="multipart/form-data">
                                                    <div class="input-group w-45 h-25">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="updateDrinkName">Drink Name</label>
                                                        </div>
                                                        <input type="hidden" name="hashcode" value="$dk->drinkid">
                                                        <input type="text" value="$dk->drinkname" name="updateDrinkName" id="updateDrinkName" class="form-control">
                                                    </div>
                                                    <div class="input-group mb-3 w-45 h-25">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="updateDrinkPrice">Drink Price</label>
                                                        </div>
                                                        <input type="text" value="$dk->price" name="updateDrinkPrice" id="updateDrinkPrice" class="form-control" aria-label="Amount (to the nearest turkish lira)">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="updateDrinkPrice">TL</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 w-45 h-25">
                                                        <div class="custom-file">
                                                            <input type="hidden" name="drinkImagePath" id="drinkImagePath" value="$dk->photo">
                                                            <input type="file"  name="updateDrinkImage" id="updateDrinkImage" onchange="printNameDrinkImage(this)" class="custom-file-input">
                                                            <label class="custom-file-label" for="updateDrinkImage">Choose another picture</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 w-45 h-25">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="updateDrinkType">Drink Type</label>
                                                        </div>
                                                        <select class="custom-select" name="updateDrinkType" id="updateDrinkType">
                                                            <option>Select...</option>
                                                            <option value="One">One</option>
                                                            <option value="Two">Two</option>
                                                            <option value="Three">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-group mb-3 w-45 h-25">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="updateDrinkSize">Drink Size</label>
                                                        </div>
                                                        <input type="text" value="$dk->size" name="updateDrinkSize" id="updateDrinkSize" class="form-control" aria-label="Size (to the nearest kilogram)">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="updateDrinkSize">Kg</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 w-45 h-25">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="updateDrinkDiscount">Drink Discount</label>
                                                        </div>
                                                        <input type="text" value="$dk->discount" name="updateDrinkDiscount" id="updateDrinkDiscount" class="form-control" aria-label="Amount (to the nearest percentage)">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="updateDrinkDiscount">%</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group w-45 h-50">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="updateDrinkDescription">Drink Description</label>
                                                        </div>
                                                        <textarea rows="3" name="updateDrinkDescription" id="updateDrinkDescription" class="form-control" aria-label="With textarea">$dk->description</textarea>
                                                    </div>
                                                    <div class="input-group mb-3 w-45 h-25 d-flex flex-row justify-content-around">
                                                        <div class="">
                                                            <label class="col-form-label" for="updateDrinkAvailability1">Drink Availability : </label>
                                                        </div>
                                                        <div class="col-form-label">
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" name="updateDrinkAvailability" value="yes" id="updateDrinkAvailability1" class="custom-control-input" checked>
                                                                <label class="custom-control-label" for="updateDrinkAvailability1">Available</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio"  name="updateDrinkAvailability" value="no" id="updateDrinkAvailability2" class="custom-control-input">
                                                                <label class="custom-control-label" for="updateDrinkAvailability2">No Available</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center w-100 mt-4">
                                                        <button type="submit" class="btn btn-primary">Update Drink</button>
                                                        <button type="reset" class="btn btn-dark">Reset Drink</button>
                                                    </div>
                                                </form>
                                            </li>
Here;
                                        print $printDrinkItem;
                                    }
                                }else{
                                    echo "<div class='bg-danger'>
                                                <h1 class='text-light text-center'>You did not any drink yet. Please add one !</h1>
                                          </div>";
                                }
                            ?>
                        </ul>
                    </div>
                    <!-- End section Listing all food -->
                </article>
            </section>
            <!-- End section displaying main content -->

            <!-- Start Footer of dashboard -->
            <footer class="marginTop-5">
                <div class="container text-light">
                    <div class="d-flex flex-row justify-content-around">
                        <div class=""><a shref="http://www.technoparcsystems.com/" target="_blank">Powered by Technoparc Systems</a></div>
                        <div>FoodApp <?php echo date("d-M-Y"); ?> &copy; All Rights Reserved</div>
                    </div>
                </div>
            </footer>
            <!-- End Footer of dashboard -->
        </section>
        <!-- End Main contain (body) of dashboard -->
    </div>
</main>
<script src="js/custom/drinkScript.js"></script>
<script src="js/custom/filterScript.js"></script>