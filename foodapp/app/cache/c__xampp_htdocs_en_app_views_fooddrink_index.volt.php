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
                    <div class="row foodItem active d-flex flex-row justify-content-around list-group-item">
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
                    <span><i class="fas fa-utensils"></i></span>
                    <span class="p-md-3">Food Page</span>
                </div>
                <div class="container-fluid d-flex flex-row align-items-center">
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
                    <form method="post" class="iconBtn" action="/en/FoodDrink/stateConnect">
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
                    <div id="boxAddAndFilterFoodDrink" class="d-flex flex-row flex-wrap justify-content-between">
                        <div class="d-flex flex-row justify-content-between flex-wrap mb-2">
                            <!-- Start Button trigger modal for food -->
                            <div class="">
                                <button type="button" id="addFoodButton" class="btn btn-danger" data-toggle="modal" data-target="#modalAddFood">
                                    <span><i class="fas fa-plus"></i></span>
                                    <span>Add Food</span>
                                </button>
                            </div>
                            <!-- End Button trigger modal -->
                            <!-- Start Button trigger modal for drink-->
                            <div class="ml-3"  style="justify-content: end">
                                <button id="addDrinkButton" class="btn btn-danger" data-toggle="modal" data-target="#modalAddDrink">
                                    <span><i class="fas fa-plus"></i></span>
                                    <span>Add Drink</span>
                                </button>
                            </div>
                            <!-- End Button trigger modal -->
                        </div>
                        <div class="d-flex flex-row">
                            <div class="d-flex flex-row mb-2">
                                <!-- Start Filter Section for food -->
                                <form method="post" onsubmit="filterFoodProduct(this)" id="filterFormFood" class="input-group">
                                    <select title="filter box for food" data-selected-food-option="<?= $selectedFilter ?>" class="custom-select" id="filterParamFood" name="filterParamFood">
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
                                        <button class="btn btn-outline-danger" type="submit">Filter Food</button>
                                    </div>
                                </form>
                                <!-- End Filter Section -->
                            </div>
                            <!--  -->
                            <div class="d-flex flex-row flex-wrap mb-2">
                                <!-- Start Filter Section for drink -->
                                <form method="post" onsubmit="filterDrinkProduct(this)" id="filterFormDrink" class="input-group ml-3">
                                    <select title="filter box for food" data-selected-drink-option="<?= $selectedFilter ?>" class="custom-select" id="filterParamDrink" name="filterParamDrink">
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
                                        <button class="btn btn-outline-danger" type="submit">Filter Drink</button>
                                    </div>
                                </form>
                                <!-- End Filter Section -->
                            </div>
                        </div>
                    </div>
                    <!-- Start Navigation Menu -->
                    <nav id="breadcrumbNav" class="mt-1" aria-label="breadcrumb">
                        <ul class="breadcrumbList d-flex flex-row">
                            <li class="breadcrumbList-item active" aria-current="page">Food</li>
                            <li class="breadcrumbList-item">Drink</li>
                        </ul>
                    </nav>
                    <!-- End Navigation Menu -->

                    <!-- Start Modal New Food -->
                    <div class="modal fade bd-example-modal-lg" id="modalAddFood" tabindex="-1" role="dialog" aria-labelledby="modalAddFoodTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="">New Food Information</h5>
                                    <button type="button" onclick="unsetStateAddForm()"  class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" id="addFoodForm" onsubmit="validateFormAndSetStateAddFoodForm(this)" autocomplete="off" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="text-center" id="displayMessage1"></div>
                                        <div class="d-flex flex-row flex-wrap justify-content-between">
                                            <div class="d-flex flex-column w-45">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="addFoodName">Food Name</label>
                                                    </div>
                                                    <input type="text" name="addFoodName" id="addFoodName" class="form-control" required>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <input type="file"  name="addFoodImage" id="addFoodImage" onchange="printNameFoodImage(this)" class="custom-file-input" required>
                                                        <label class="custom-file-label" for="addFoodImage">Choose another picture</label>
                                                    </div>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="addFoodDescription">Food Description</label>
                                                    </div>
                                                    <textarea rows="3" name="addFoodDescription" id="addFoodDescription" class="form-control" aria-label="With textarea"></textarea>
                                                </div>
                                            </div>
                                            <div class="w-45 h-50">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="addFoodPrice">Food Price Regular</label>
                                                    </div>
                                                    <input type="text" name="addFoodPrice" id="addFoodPrice" class="form-control" aria-label="Amount (to the nearest turkish lira)" required>
                                                    <div class="input-group-append">
                                                        <label class="input-group-text" for="addFoodPrice">TL</label>
                                                    </div>
                                                </div>
                                                <div class='input-group mb-3'>
                                                    <button type='button' onclick="hideAndShowInputPrice(this)" data-clicked="no" class='btn btn-sm btn-outline-danger mr-3'>
                                                        <span class=''>Food Price Small</span>
                                                    </button>
                                                    <input type='text' name='addFoodPriceSmall' id='addFoodPriceSmall' class='form-control invisible' aria-label='Amount (to the nearest turkish lira)'>
                                                    <div class='input-group-append invisible'>
                                                        <label class='input-group-text' for='addFoodPriceSmall'>TL</label>
                                                    </div>
                                                </div>
                                                <div class='input-group mb-3 ml-2'>
                                                    <button type='button' onclick="hideAndShowInputPrice(this)" data-clicked="no" class='btn btn-outline-success mr-3'>
                                                        <span class=''>Food Price Medium</span>
                                                    </button>
                                                    <input type='text' name='addFoodPriceMedium' id='addFoodPriceMedium' class='form-control invisible' aria-label='Amount (to the nearest turkish lira)' required>
                                                    <div class='input-group-append invisible'>
                                                        <label class='input-group-text' for='addFoodPriceMedium'>TL</label>
                                                    </div>
                                                </div>
                                                <div class='input-group mb-3 ml-3'>
                                                    <button type='button' onclick="hideAndShowInputPrice(this)" data-clicked="no" class='btn btn-lg btn-outline-warning mr-3'>
                                                        <span class=''>Food Price Big</span>
                                                    </button>
                                                    <input type='text' name='addFoodPriceBig' id='addFoodPriceBig' class='form-control invisible' aria-label='Amount (to the nearest turkish lira)'>
                                                    <div class='input-group-append invisible'>
                                                        <label class='input-group-text' for='addFoodPriceBig'>TL</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="unsetStateAddForm()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add Food</button>
                                        <button type="reset" class="btn btn-danger">Reset Form</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal New Food -->

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
                                <form method="post" id="addDrinkForm" onsubmit="validateFormAndSetStateAddDrinkForm(this)" autocomplete="off" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="text-center" id="displayMessage2"></div>
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
                                            <div class="input-group w-45 h-50">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text bg-light" for="addDrinkDescription">Drink Description</label>
                                                </div>
                                                <textarea rows="3" name="addDrinkDescription" id="addDrinkDescription" class="form-control" aria-label="With textarea"></textarea>
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
                    <aside>
                        <div class="text-center" id="displayMessage">
                            <?= $this->flash->output() ?>
                        </div>
                    </aside>
                    <!-- End aside section displaying messages -->

                    <!-- Start section Listing all food -->
                    <div id="boxListFood" class="bg-none mt-2">
                        <ul class="list-group">
                            <?php
                                if((sizeof($food) !== 0) or (count($food)!==0)){
                                    foreach($food as $fd){
                                        $printTextSoldUnsold = "";
                                        $printTextLockUnlock = "";
                                        $printIconSoldUnsold = "";
                                        $printIconLockUnlock = "";
                                        if($fd->available === "yes"){
                                            $printTextSoldUnsold = '<div class="foodDrinkSold displayNone">
                                                                        <span class="p-2">SOLD</span>
                                                                    </div>';
                                            $printIconSoldUnsold = '<span class="fas fa-times"></span>';
                                        }else{
                                            $printTextSoldUnsold = '<div class="foodDrinkSold">
                                                                        <span class="p-2">SOLD</span>
                                                                    </div>';
                                            $printIconSoldUnsold = '<span class="fas fa-check"></span>';
                                        }
                                        if($fd->state === "on"){
                                            $printTextLockUnlock = '<div class="foodDrinkLock displayNone">
                                                                        <span class="p-2">LOCK</span>
                                                                    </div>';
                                            $printIconLockUnlock = '<span class="fas fa-times"></span>';
                                        }else{
                                            $printTextLockUnlock = '<div class="foodDrinkLock">
                                                                        <span class="p-2">LOCK</span>
                                                                    </div>';
                                            $printIconLockUnlock = '<span class="fas fa-check"></span>';
                                        }
                                        $printFoodItem = <<<Here
                                            <li class="foodNamePlusButtons list-group-item">
                                                <div class="d-flex flex-row flex-wrap justify-content-between">
                                                    <div class="d-flex">
                                                        <div class=""><span>$fd->foodname</span></div>
                                                        $printTextSoldUnsold
                                                    </div>
                                                    <div class="d-flex flex-row text-primary iconFoodDrinkPage">
                                                        <form method="post" action="/en/FoodDrink/updateAvailabilityFood">
                                                            <input type="hidden" name="hashSoldFood" id="hashSoldFood" value=$fd->foodid>
                                                            <button type="submit" class="btn btn-sm btn-warning"
                                                                    onclick="soldUnsoldLockUnlock(this.firstElementChild, this.parentElement.parentElement.previousElementSibling.children[1])">
                                                                $printIconSoldUnsold
                                                                <span>&nbsp;Sold</span>
                                                            </button>
                                                        </form>
                                                        <form method="post" class="ml-2" action="/en/FoodDrink/updateStateFood">
                                                            <input type="hidden" name="hashPermLockFood" id="hashPermLockFood" value=$fd->foodid>
                                                            <button type="submit" class="btn btn-sm btn-danger">
                                                                $printIconLockUnlock
                                                                <span>&nbsp;Permanently lock</span>
                                                            </button>
                                                        </form>
                                                        <div class="ml-3 boxView" data-class="box"
                                                             onclick="viewEditFoodDetails(this, this.parentElement, this.parentElement.parentElement.parentElement.nextElementSibling,
                                                                                          this.parentElement.parentElement.parentElement.nextElementSibling.nextElementSibling)">
                                                            <a data-toggle="tooltip" data-placement="top" title="View food details">
                                                                <span><i class="fas fa-eye"></i></span>
                                                            </a>
                                                        </div>
                                                        <div class="ml-3 boxEdit" data-class="box"
                                                             onclick="viewEditFoodDetails(this, this.parentElement, this.parentElement.parentElement.parentElement.nextElementSibling,
                                                                                          this.parentElement.parentElement.parentElement.nextElementSibling.nextElementSibling);
                                                                      setSelectedType(this.parentElement.parentElement.parentElement.nextElementSibling.nextElementSibling.querySelector('#updateFoodType'), '$fd->type')">
                                                            <a data-toggle="tooltip" data-placement="top" title="Update food details">
                                                                <span><i class="fas fa-edit eClose"></i></span>
                                                            </a>
                                                        </div>
                                                        <div class="ml-3 boxDelete" data-class="box" onclick="deleteFood('$fd->foodid')">
                                                            <a data-toggle="tooltip" data-placement="top" title="Delete Food">
                                                                <form method="post" action="/en/FoodDrink/deleteFood">
                                                                    <input type="hidden" name="hashcode" id="hashcode" value=$fd->foodid>
                                                                    <button class="formFoodDrinkIconButton" type="submit">
                                                                        <span><i class="fas fa-times"></i></span>
                                                                    </button>
                                                                </form>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="viewFoodSection list-group-item bg-light">
                                                <div class="title font-weight-bold">
                                                    <span>All information about $fd->foodname</span>
                                                </div>
                                                <hr class="mt-1">
                                                <div class="boxImageContent d-flex flex-row">
                                                    <div class="divImageFood">
                                                        <img src="$fd->photo" class="img-fluid">
                                                    </div>
                                                    <div class="contentFoodDrink ml-3 d-flex flex-row flex-wrap justify-content-between">
                                                        <div class="mb-2 ml-2 w-30">
                                                            <span><b>Name : </b></span>
                                                            <span>$fd->foodname</span>
                                                        </div>
                                                        <div class="mb-2 ml-2 w-30">
                                                            <span><b>Standard Price : </b></span>
                                                            <span>$fd->price</span>
                                                            <span>TL</span>
                                                        </div>
                                                        <div class="mb-2 ml-2 w-30">
                                                            <span><b>Price Small : </b></span>
                                                            <span>$fd->price</span>
                                                            <span>TL</span>
                                                        </div>
                                                        <div class="mb-2 ml-2 w-30">
                                                            <span><b>Price Regular : </b></span>
                                                            <span>$fd->price</span>
                                                            <span>TL</span>
                                                        </div>
                                                        <div class="mb-2 ml-2 w-30">
                                                            <span><b>Price Big : </b></span>
                                                            <span>$fd->price</span>
                                                            <span>TL</span>
                                                        </div>
                                                        <div class="ml-2 w-30">
                                                            <span><b>Description : </b></span>
                                                            <span>$fd->description</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-3 w-100 d-flex justify-content-center">
                                                    <div>
                                                        <button type="button" class="editFoodButton btn btn-primary"
                                                                onclick="viewEditFoodDetails(this.parentElement.parentElement.parentElement.previousElementSibling.querySelector('.ml-3.boxEdit'),
                                                                                             this.parentElement.parentElement.parentElement.previousElementSibling.querySelector('.ml-3.boxEdit').parentElement,
                                                                                             this.parentElement.parentElement.parentElement.previousElementSibling.querySelector('.ml-3.boxEdit').parentElement.parentElement.parentElement.nextElementSibling,
                                                                                             this.parentElement.parentElement.parentElement.previousElementSibling.querySelector('.ml-3.boxEdit').parentElement.parentElement.parentElement.nextElementSibling.nextElementSibling);
                                                                        setSelectedType(this.parentElement.parentElement.parentElement.nextElementSibling.querySelector('#updateFoodType'), '$fd->type')">
                                                            Edit Food
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="updateFoodSection list-group-item bg-light">
                                                <div class="font-weight-bold">
                                                    <span>Update $fd->foodname information</span>
                                                </div>
                                                <hr class="mt-1">
                                                <form method="post" action="/en/FoodDrink/updateFood" class="d-flex flex-row flex-wrap justify-content-between" autocomplete="off" enctype="multipart/form-data">
                                                    <div class="d-flex flex-column w-45">
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <label class="input-group-text" for="updateFoodName">Food Name</label>
                                                            </div>
                                                            <input type="hidden" name="hashcode" value="$fd->foodid">
                                                            <input type="text" value="$fd->foodname" name="updateFoodName" id="updateFoodName" class="form-control">
                                                        </div>
                                                        <div class="input-group mb-2">
                                                            <div class="custom-file">
                                                                <input type="hidden" name="foodImagePath" id="foodImagePath" value="$fd->photo">
                                                                <input type="file"  name="updateFoodImage" id="updateFoodImage" onchange="printNameFoodImage(this)" class="custom-file-input">
                                                                <label class="custom-file-label" for="updateFoodImage">Choose another picture</label>
                                                            </div>
                                                        </div>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <label class="input-group-text" for="updateFoodDescription">Food Description</label>
                                                            </div>
                                                            <textarea rows="2" name="updateFoodDescription" id="updateFoodDescription" class="form-control" aria-label="With textarea">$fd->description</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="w-45 h-50">
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <label class="input-group-text" for="updateFoodPrice">Food Price</label>
                                                            </div>
                                                            <input type="number" value="$fd->price" name="updateFoodPrice" id="updateFoodPrice"
                                                                   class="form-control" aria-label="Amount (to the nearest turkish lira)"
                                                                   onclick="mutateRegularMediumPrice(this, this.parentElement.nextElementSibling.nextElementSibling.children[1])">
                                                            <div class="input-group-append">
                                                                <label class="input-group-text" for="updateFoodPrice">TL</label>
                                                            </div>
                                                        </div>
                                                        <div class='input-group mb-2'>
                                                            <button type='button' onclick="hideAndShowInputPrice(this)" data-clicked="no" class='btn btn-sm btn-outline-danger mr-3'>
                                                                <span class=''>Small</span>
                                                            </button>
                                                            <input type='text' name='updateFoodPriceSmall' id='updateFoodPriceSmall' value='$fd->pricesmall' onchange='setPriceToSave(this)' class='form-control invisible' aria-label='Amount (to the nearest turkish lira)'>
                                                            <div class='input-group-append invisible'>
                                                                <label class='input-group-text' for='updateFoodPriceSmall'>TL</label>
                                                            </div>
                                                        </div>
                                                        <div class='input-group mb-2'>
                                                            <button type='button' onclick="hideAndShowInputPrice(this)" data-clicked="no" class='btn btn-outline-success mr-3'>
                                                                <span class=''>Regular</span>
                                                            </button>
                                                            <input type='text' name='updateFoodPriceMedium' id='updateFoodPriceMedium' value='$fd->pricemedium'
                                                                   class='form-control invisible' aria-label='Amount (to the nearest turkish lira)'
                                                                   onclick="mutateRegularMediumPrice(this, this.parentElement.previousElementSibling.previousElementSibling.children[1])">
                                                            <div class='input-group-append invisible'>
                                                                <label class='input-group-text' for='updateFoodPriceMedium'>TL</label>
                                                            </div>
                                                        </div>
                                                        <div class='input-group mb-2'>
                                                            <button type='button' onclick="hideAndShowInputPrice(this)" data-clicked="no" class='btn btn-lg btn-outline-warning mr-3'>
                                                                <span class=''>Big</span>
                                                            </button>
                                                            <input type='text' name='updateFoodPriceBig' id='updateFoodPriceBig' value='$fd->pricebig' class='form-control invisible' aria-label='Amount (to the nearest turkish lira)'>
                                                            <div class='input-group-append invisible'>
                                                                <label class='input-group-text' for='updateFoodPriceBig'>TL</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center w-100 mt-4">
                                                        <button type="submit" class="updateFoodButton btn btn-primary">Update Food</button>
                                                        <button type="reset" class="resetFoodButton btn btn-dark">Reset Food</button>
                                                    </div>
                                                </form>
                                            </li>
Here;
                                print $printFoodItem;
                            }
                            }else{
                                echo "<div class='bg-danger'>
                                            <h1 class='text-light text-center'>You did not any food yet. Please add one !</h1>
                                        </div>";
                            }
                            ?>
                        </ul>
                    </div>
                    <!-- End section Listing all food -->

                    <!-- Start section Listing all drink -->
                    <div id="boxListDrink" class="bg-none mt-2 displayNone">
                        <ul class="list-group">
                            <?php
                                if((sizeof($drink) !== 0) or (count($drink)!==0)){
                                    foreach($drink as $dk){
                                        $printTextSoldUnsold = "";
                                        $printTextLockUnlock = "";
                                        $printIconSoldUnsold = "";
                                        $printIconLockUnlock = "";
                                        if($dk->available === "yes"){
                                            $printTextSoldUnsold = '<div class="foodDrinkSold displayNone">
                                                                        <span class="p-2">SOLD</span>
                                                                    </div>';
                                            $printIconSoldUnsold = '<span class="fas fa-times"></span>';
                                        }else{
                                            $printTextSoldUnsold = '<div class="foodDrinkSold">
                                                                        <span class="p-2">SOLD</span>
                                                                    </div>';
                                            $printIconSoldUnsold = '<span class="fas fa-check"></span>';
                                        }
                                        if($dk->state === "on"){
                                            $printTextLockUnlock = '<div class="foodDrinkLock displayNone">
                                                                        <span class="p-2">LOCK</span>
                                                                    </div>';
                                            $printIconLockUnlock = '<span class="fas fa-times"></span>';
                                        }else{
                                            $printTextLockUnlock = '<div class="foodDrinkLock">
                                                                        <span class="p-2">LOCK</span>
                                                                    </div>';
                                            $printIconLockUnlock = '<span class="fas fa-check"></span>';
                                        }
                                        $printDrinkItem = <<<Here
                                            <li class="foodNamePlusButtons list-group-item">
                            <div class="d-flex flex-row flex-wrap justify-content-between">
                                <div class="d-flex">
                                    <div class=""><span>$dk->drinkname</span></div>
                                    $printTextSoldUnsold
                                </div>
                                <div class="d-flex flex-row text-primary iconFoodDrinkPage">
                                    <form method="post" action="/en/FoodDrink/updateAvailabilityDrink">
                                        <input type="hidden" name="hashSoldDrink" id="hashSoldDrink" value=$dk->drinkid>
                                        <button type="submit" class="btn btn-sm btn-warning">
                                            $printIconSoldUnsold
                                            <span>&nbsp;Sold</span>
                                        </button>
                                    </form>
                                    <form method="post" class="ml-2" action="/en/FoodDrink/updateStateDrink">
                                        <input type="hidden" name="hashPermLockDrink" id="hashPermLockDrink" value=$dk->drinkid>
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            $printIconLockUnlock
                                            <span>&nbsp;Permanently lock</span>
                                        </button>
                                    </form>
                                    <div class="ml-3 boxView" data-class="box"
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
                                            <form method="post" action="/en/FoodDrink/deleteDrink">
                                                <input type="hidden" name="hashcode" value=$dk->drinkid>
                                                <button class="formFoodDrinkIconButton" type="submit">
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
                                    <div class="ml-3 d-flex flex-row flex-wrap">
                                        <div class="w-100  mb-1 ml-2">
                                            <span><b>Name : </b></span>
                                            <span>$dk->drinkname</span>
                                        </div>
                                        <div class="w-100 mb-1 ml-2">
                                            <span><b>Price : </b></span>
                                            <span>$dk->price</span>
                                            <span>TL</span>
                                        </div>
                                        <div class="w-100 ml-2">
                                            <span><b>Description : </b></span>
                                            <span>$dk->description</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 w-100 d-flex justify-content-center">
                                    <div>
                                        <button type="button" class="editDrinkButton btn btn-primary"
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
                                <form method="post" action="/en/FoodDrink/updateDrink" class="d-flex flex-row flex-wrap justify-content-between" autocomplete="off" enctype="multipart/form-data">
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
                                    <div class="input-group w-45 h-50">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="updateDrinkDescription">Drink Description</label>
                                        </div>
                                        <textarea rows="3" name="updateDrinkDescription" id="updateDrinkDescription" class="form-control" aria-label="With textarea">$dk->description</textarea>
                                    </div>
                                    <div class="text-center w-100 mt-4">
                                        <button type="submit" class="updateDrinkButton btn btn-primary">Update Drink</button>
                                        <button type="reset" class="resetDrinkButton btn btn-dark">Reset Drink</button>
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

                    <!-- Start Pagination Food -->
                    <nav id="paginationFood" class="mt-3" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a href="FoodDrink?page=1" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true"><<</span>
                                    <span class="sr-only">First Food</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <?php
                                    $previous = (int)($pageFood->current - 1);
                                    if($previous === 0)
                                        echo "<a href='FoodDrink?page=1' class='page-link' aria-label='Previous'>";
                                    else
                                        echo "<a href='FoodDrink?page=$previous' class='page-link' aria-label='Previous'>";
                                ?>
                                    <span aria-hidden="true">Prev</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <?php
                                for($i = 1; $i <= $pageFood->total_pages; $i++){
                                    if($i === $pageFood->current){
                                        echo(
                                            "<li class='page-item active'>
                                                <a href='FoodDrink?page=$i' class='page-link'>$i</a>
                                            </li>"
                                        );
                                    }else{
                                        echo(
                                            "<li class='page-item'>
                                                <a href='FoodDrink?page=$i' class='page-link'>$i</a>
                                            </li>"
                                        );
                                    }
                                }
                            ?>
                            <li class="page-item">
                                <?php
                                    $next = (int)($pageFood->current + 1);
                                    $last = (int)($pageFood->last + 1);
                                    if($next === $last)
                                        echo "<a href='FoodDrink?page=$pageFood->last' class='page-link' aria-label='Next'>";
                                    else
                                        echo "<a href='FoodDrink?page=$next' class='page-link' aria-label='Next'>";
                                ?>
                                        <span aria-hidden="true">Next</span>
                                        <span class="sr-only">Next Food</span>
                                    </a>
                            </li>
                            <li class="page-item">
                                <a href="FoodDrink?page=<?= $pageFood->last; ?>" class="page-link" aria-label="Last">
                                    <span aria-hidden="true">>></span>
                                    <span class="sr-only">Last Food</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Pagination Food -->

                    <!-- Start Pagination Drink -->
                    <nav id="paginationDrink" class="mt-3 displayNone" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a href="FoodDrink?page=1" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true"><<</span>
                                    <span class="sr-only">First Drink</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <?php
                                    $previous = (int)($pageDrink->current - 1);
                                    if($previous === 0)
                                        echo "<a href='FoodDrink?page=1' class='page-link' aria-label='Previous'>";
                                    else
                                        echo "<a href='FoodDrink?page=$previous' class='page-link' aria-label='Previous'>";
                                ?>
                                    <span aria-hidden="true">Prev</span>
                                    <span class="sr-only">Previous Drink</span>
                                </a>
                            </li>
                            <?php
                                for($i = 1; $i <= $pageDrink->total_pages; $i++){
                                    if($i === $pageDrink->current){
                                        echo(
                                            "<li class='page-item active'>
                                                <a href='FoodDrink?page=$i' class='page-link'>$i</a>
                                            </li>"
                                        );
                                    }else{
                                        echo(
                                            "<li class='page-item'>
                                                <a href='FoodDrink?page=$i' class='page-link'>$i</a>
                                            </li>"
                                        );
                                    }
                                }
                            ?>
                            <li class="page-item">
                                <?php
                                    $next = (int)($pageDrink->current + 1);
                                    $last = (int)($pageDrink->last + 1);
                                    if($next === $last)
                                        echo "<a href='FoodDrink?page=$pageDrink->last' class='page-link' aria-label='Next'>";
                                    else
                                        echo "<a href='FoodDrink?page=$next' class='page-link' aria-label='Next'>";
                                ?>
                                    <span aria-hidden="true">Next</span>
                                    <span class="sr-only">Next Drink</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="FoodDrink?page=<?= $pageDrink->last; ?>" class="page-link" aria-label="Last">
                                    <span aria-hidden="true">>></span>
                                    <span class="sr-only">Last Drink</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Pagination Drink -->
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
<script src="js/custom/foodScript.js"></script>
<script src="js/custom/drinkScript.js"></script>
<script src="js/custom/foodDrinkScript.js"></script>
<script src="js/custom/filterFoodDrinkScript.js"></script>