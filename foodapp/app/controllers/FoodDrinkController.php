<?php

class FoodDrinkController extends \Phalcon\Mvc\Controller
{

    //reading food
    public function indexAction()
    {
        if(!(($this->session->has("restaurantId")) AND ($this->session->has("restaurantName")))) {
            $this->flashSession->error("You have been disconnected recently. Please login again !");
            $this->response->redirect("Index");
        }else{
            $restaurantId = $this->session->get('restaurantId');
            $restaurantName = $this->session->get('restaurantName');
            $pageFood = null;
            $pageDrink = null;
            $food = null;
            $drink = null;
            $selectedFilterFood = "";
            $selectedFilterDrink = "";
            if($this->session->has("filterParamFood")){
                $filterParam = $this->session->get("filterParamFood");
                $selectedFilterFood = $filterParam;
                switch ($filterParam){
                    case "nameAscending":
                        $pageFood = Foods::getList($restaurantId, $restaurantName, $this->getPageNumber(), "foodname");
                        $food = $pageFood->items;
                        break;
                    case "nameDescending":
                        $pageFood = Foods::getList($restaurantId, $restaurantName, $this->getPageNumber(), "foodname DESC");
                        $food = $pageFood->items;
                        break;
                    case "typeAscending":
                        $pageFood = Foods::getList($restaurantId, $restaurantName, $this->getPageNumber(), "type");
                        $food = $pageFood->items;
                        break;
                    case "typeDescending":
                        $pageFood = Foods::getList($restaurantId, $restaurantName, $this->getPageNumber(), "type DESC");
                        $food = $pageFood->items;
                        break;
                    case "priceAscending":
                        $pageFood = Foods::getList($restaurantId, $restaurantName, $this->getPageNumber(), "price");
                        $food = $pageFood->items;
                        break;
                    case "priceDescending":
                        $pageFood = Foods::getList($restaurantId, $restaurantName, $this->getPageNumber(), "price DESC");
                        $food = $pageFood->items;
                        break;
                    case "sizeAscending":
                        $pageFood = Foods::getList($restaurantId, $restaurantName, $this->getPageNumber(), "size");
                        $food = $pageFood->items;
                        break;
                    case "sizeDescending":
                        $pageFood = Foods::getList($restaurantId, $restaurantName, $this->getPageNumber(), "size DESC");
                        $food = $pageFood->items;
                        break;
                    case "discountAscending":
                        $pageFood = Foods::getList($restaurantId, $restaurantName, $this->getPageNumber(), "discount");
                        $food = $pageFood->items;
                        break;
                    case "discountDescending":
                        $pageFood = Foods::getList($restaurantId, $restaurantName, $this->getPageNumber(), "discount DESC");
                        $food = $pageFood->items;
                        break;
                    case "dateInsertedAscending":
                        $pageFood = Foods::getList($restaurantId, $restaurantName, $this->getPageNumber(), "dateinserted");
                        $food = $pageFood->items;
                        break;
                    case "dateInsertedDescending":
                        $pageFood = Foods::getList($restaurantId, $restaurantName, $this->getPageNumber(), "dateinserted DESC");
                        $food = $pageFood->items;
                        break;
                    case "dateUpdatedAscending":
                        $pageFood = Foods::getList($restaurantId, $restaurantName, $this->getPageNumber(), "lastupdateddate");
                        $food = $pageFood->items;
                        break;
                    case "dateUpdatedDescending":
                        $pageFood = Foods::getList($restaurantId, $restaurantName, $this->getPageNumber(), "lastupdateddate DESC");
                        $food = $pageFood->items;
                        break;
                    default :
                        $pageFood = Foods::getList($restaurantId, $restaurantName, $this->getPageNumber(), "foodname");
                        $food = $pageFood->items;
                        break;
                }
            }else{
                $pageFood = Foods::getList($restaurantId, $restaurantName, $this->getPageNumber(), "foodname");
                $food = $pageFood->items;
            }
            //
            if($this->session->has("filterParamDrink")){
                $filterParamDrink = $this->session->get("filterParamDrink");
                $selectedFilterDrink = $filterParamDrink;
                switch ($filterParamDrink){
                    case "nameAscending":
                        $pageDrink = Drinks::getList($restaurantId, $restaurantName, $this->getPageNumber(), "drinkname");
                        $drink = $pageDrink->items;
                        break;
                    case "nameDescending":
                        $pageDrink = Drinks::getList($restaurantId, $restaurantName, $this->getPageNumber(), "drinkname DESC");
                        $drink = $pageDrink->items;
                        break;
                    case "typeAscending":
                        $pageDrink = Drinks::getList($restaurantId, $restaurantName, $this->getPageNumber(), "type");
                        $drink = $pageDrink->items;
                        break;
                    case "typeDescending":
                        $pageDrink = Drinks::getList($restaurantId, $restaurantName, $this->getPageNumber(), "type DESC");
                        $drink = $pageDrink->items;
                        break;
                    case "priceAscending":
                        $pageDrink = Drinks::getList($restaurantId, $restaurantName, $this->getPageNumber(), "price");
                        $drink = $pageDrink->items;
                        break;
                    case "priceDescending":
                        $pageDrink = Drinks::getList($restaurantId, $restaurantName, $this->getPageNumber(), "price DESC");
                        $drink = $pageDrink->items;
                        break;
                    case "sizeAscending":
                        $pageDrink = Drinks::getList($restaurantId, $restaurantName, $this->getPageNumber(), "size");
                        $drink = $pageDrink->items;
                        break;
                    case "sizeDescending":
                        $pageDrink = Drinks::getList($restaurantId, $restaurantName, $this->getPageNumber(), "size DESC");
                        $drink = $pageDrink->items;
                        break;
                    case "discountAscending":
                        $pageDrink = Drinks::getList($restaurantId, $restaurantName, $this->getPageNumber(), "discount");
                        $drink = $pageDrink->items;
                        break;
                    case "discountDescending":
                        $pageDrink = Drinks::getList($restaurantId, $restaurantName, $this->getPageNumber(), "discount DESC");
                        $drink = $pageDrink->items;
                        break;
                    case "dateInsertedAscending":
                        $pageDrink = Drinks::getList($restaurantId, $restaurantName, $this->getPageNumber(), "dateinserted");
                        $drink = $pageDrink->items;
                        break;
                    case "dateInsertedDescending":
                        $pageDrink = Drinks::getList($restaurantId, $restaurantName, $this->getPageNumber(), "dateinserted DESC");
                        $drink = $pageDrink->items;
                        break;
                    case "dateUpdatedAscending":
                        $pageDrink = Drinks::getList($restaurantId, $restaurantName, $this->getPageNumber(), "lastupdateddate");
                        $drink = $pageDrink->items;
                        break;
                    case "dateUpdatedDescending":
                        $pageDrink = Drinks::getList($restaurantId, $restaurantName, $this->getPageNumber(), "lastupdateddate DESC");
                        $drink = $pageDrink->items;
                        break;
                    default :
                        $pageDrink = Drinks::getList($restaurantId, $restaurantName, $this->getPageNumber(), "drinkname");
                        $drink = $pageDrink->items;
                        break;
                }
            }else{
                $pageDrink = Drinks::getList($restaurantId, $restaurantName, $this->getPageNumber(), "drinkname");
                $drink = $pageDrink->items;
            }
            //
            /*$drink = Drinks::find([
                "restoid = '$restaurantId'",
                "restauname = '$restaurantName'",
            ]);*/
            $customer = Customers::find([
                "idresto= '$restaurantId'",
            ]);
            $orderSum = Ordersummary::find([
                "restauname = '$restaurantName'",
            ]);
            //
            $numFood = count($food);
            $numDrink = count($drink);
            $numCustomer = count($customer);
            $numOrder = count($orderSum);
            $this->view->setVars([
                'pageFood' => $pageFood,
                'pageDrink' => $pageDrink,
                'food' => $food,
                'drink' => $drink,
                'selectedFilterFood' => $selectedFilterFood,
                'selectedFilterDrink' => $selectedFilterDrink,
                'restaurantName' => $this->session->get("restaurantName"),
                'restaurantPhoto' => $this->session->get("restaurantPhoto"),
                'numFood' => $numFood,
                'numDrink' => $numDrink,
                'numCustomer' => $numCustomer,
                'numOrder' => $numOrder,
            ]);
        }
    }

    //get page number from get request
    public function getPageNumber(){
        if($this->request->isGet() && $this->request->hasQuery("page"))
            return $this->request->getQuery('page', 'int');
        else return 1;
    }

    //change state of connectivity of the restaurant
    public function stateConnectAction(){
        if($this->request->isPost()){
            $connectivity = "";
            if((($this->session->has("restaurantId")) AND ($this->session->has("restaurantName")))) {
                $connectivity = $this->request->getPost("stateConnectivity");
                $restaurantId = $this->session->get("restaurantId");
                $restaurantName = $this->session->get("restaurantName");
                $findAdminRestaurant = Adminrestaurant::findFirst(" idresto = '$restaurantId' AND restauname = '$restaurantName' ");
                if($findAdminRestaurant){
                    $findAdminRestaurant->idresto = $restaurantId;
                    $findAdminRestaurant->restauname = $restaurantName;
                    $findAdminRestaurant->connectivity = $connectivity;
                    if($findAdminRestaurant->update()){
                        $this->flashSession->success("Your status has been changed to : ".$connectivity);
                        $this->response->redirect("FoodDrink");
                    }else {
                        $this->flashSession->success("An error occurred while trying to update your status");
                        $this->response->redirect("FoodDrink");
                    }
                }else{
                    $this->flashSession->success("Please try to restart the app. An unexpected error occured.");
                    $this->response->redirect("FoodDrink");
                }
            }else{
                $this->flashSession->success("Something went wrong. Please contact admin for help.");
            }
        }
    }

    //filter food
    public function filterFoodAction()
    {
        if($this->request->isPost()){
            $filterParam = $this->request->getPost("filterParamFood");
            $this->session->set("filterParamFood", $filterParam);
            //$this->flash->success("METHOD IS POST AND PARAMETER = ".$filterParam);
            $this->response->redirect("FoodDrink");
        }else{
            $filterParam = $this->request->get("filterParamFood");
            //$this->flash->success("METHOD IS GET AND PARAMETER = ".$filterParam);
            $this->response->redirect("FoodDrink?filterParamFood=".$filterParam);
        }
    }

    //filter drink
    public function filterDrinkAction()
    {
        if($this->request->isPost()){
            $filterParam = $this->request->getPost("filterParamDrink");
            $this->session->set("filterParamDrink", $filterParam);
            //$this->flash->success("METHOD IS POST AND PARAMETER = ".$filterParam);
            $this->response->redirect("FoodDrink");
        }else{
            $filterParam = $this->request->get("filterParamDrink");
            //$this->flash->success("METHOD IS GET AND PARAMETER = ".$filterParam);
            $this->response->redirect("FoodDrink?filterParamDrink=".$filterParam);
        }
    }

    //adding new food
    public function addFoodAction()
    {
        $this->response->redirect("FoodDrink");
        if($this->request->isPost()){
            gen:
            $y = date("y");
            $id1 = mt_rand(111111,999999);
            $foodId = "food".$y.$id1;
            $findFood = Foods::findFirst("foodid = '$foodId'");
            $restoid = "";
            $restoname = "";
            if($findFood)
                goto gen;
            if(($this->session->has("restaurantId")) AND ($this->session->has("restaurantName"))) {
                // Retrieve its value
                $restoid = $this->session->get("restaurantId");
                $restoname = $this->session->get("restaurantName");
            } else{
                $this->flash->error("An error occurred while saving food. Please try to logout and login.");
                $this->response->redirect("FoodDrink");
            }
            $foodName = $this->request->getPost("addFoodName");
            $foodPrice = $this->request->getPost("addFoodPrice");
            $foodPriceSmall = $this->request->getPost("addFoodPriceSmall");
            $foodPriceMedium = $this->request->getPost("addFoodPriceMedium");
            $foodPriceBig = $this->request->getPost("addFoodPriceBig");
            $foodType = $this->request->getPost("addFoodType");
            $foodDescription = $this->request->getPost("addFoodDescription");
            //$foodImage = $this->request->getPost("addFoodImage");
            $foodImagePath = "";
            if($foodType === "Select...")
                $foodType = "";
            //Photo
            if($this->request->hasFiles()){
                foreach ($this->request->getUploadedFiles() as $photo) {
                    $foodImagePath = 'img/foodphoto/' . md5(uniqid(rand(), true)).'-'.$foodName.'.png';
                    $photo->moveTo($foodImagePath);
                }
            }
            $checkFoodName = Foods::findFirst(" foodname = '$foodName' ");
            if($checkFoodName)
            {
                $this->flash->error("A food with this name already exist");
                $this->response->redirect("FoodDrink");
            }else{
                $newFood = new Foods();
                $newFood->foodid = $foodId;
                $newFood->restoid = $restoid;
                $newFood->restauname = $restoname;
                $newFood->foodname = $foodName;
                $newFood->price = $foodPrice;
                $newFood->price = $foodPrice;
                $newFood->pricesmall = $foodPriceSmall == "" ? $foodPrice : $foodPriceSmall;
                $newFood->pricemedium = $foodPriceMedium == "" ? $foodPrice : $foodPriceMedium;
                $newFood->pricebig = $foodPriceBig == "" ? $foodPrice : $foodPriceBig;
                $newFood->description = $foodDescription;
                $newFood->available = "yes";
                $newFood->photo = $foodImagePath;
                $newFood->dateinserted = date("Y-m-d");
                $newFood->lastupdateddate = date("Y-m-d");
                if($newFood->save()){
                    $this->flash->success("Food successfully added with name: ".$foodName);
                    $this->response->redirect("FoodDrink");
                }else{
                    foreach ($newFood->getMessages() as $err){
                        $this->flash->error($err);
                        $this->response->redirect("FoodDrink");
                    }
                }
            }
        }
    }

    //adding new drink
    public function addDrinkAction()
    {
        if($this->request->isPost()){
            gen:
            $y = date("y");
            $id1 = mt_rand(111111,999999);
            $drinkId = "drink".$y.$id1;
            $findDrink = Drinks::findFirst("drinkid = '$drinkId'");
            $restoid = "";
            $restoname = "";
            if($findDrink){
                goto gen;
            }
            if(($this->session->has("restaurantId")) AND ($this->session->has("restaurantName"))) {
                // Retrieve its value
                $restoid = $this->session->get("restaurantId");
                $restoname = $this->session->get("restaurantName");
            } else{
                $this->flash->error("An error occurred while saving drink. Please try to logout and login.");
                $this->response->redirect("FoodDrink");
            }
            $drinkName = $this->request->getPost("addDrinkName");
            $drinkPrice = $this->request->getPost("addDrinkPrice");
            $drinkType = $this->request->getPost("addDrinkType");
            $drinkDescription = $this->request->getPost("addDrinkDescription");
            //$drinkImage = $this->request->getPost("addDrinkImage");
            $drinkImagePath = "";
            if($drinkType === "Select..."){
                $drinkType = "";
            }
            //Photo
            if($this->request->hasFiles()){
                foreach ($this->request->getUploadedFiles() as $photo) {
                    $drinkImagePath = 'img/drinkphoto/' . md5(uniqid(rand(), true)).'-'.$drinkName.'.png';
                    $photo->moveTo($drinkImagePath);
                }
            }
            $checkDrinkName = Drinks::findFirst(" drinkname = '$drinkName' ");
            if($checkDrinkName)
            {
                $this->flash->error("A drink with this name already exist");
                $this->response->redirect("FoodDrink");
            }else{
                $newDrink = new Drinks();
                $newDrink->drinkid = $drinkId;
                $newDrink->restoid = $restoid;
                $newDrink->restauname = $restoname;
                $newDrink->drinkname = $drinkName;
                $newDrink->price = $drinkPrice;
                $newDrink->type = $drinkType;
                $newDrink->description = $drinkDescription;
                $newDrink->photo = $drinkImagePath;
                $newDrink->dateinserted = date("Y-m-d");
                $newDrink->lastupdateddate = date("Y-m-d");
                $newDrink->available = "yes";
                $newDrink->discount = 0;
                $newDrink->size = 1;
                if($newDrink->save()){
                    $this->flash->success("Drink successfully added with name: ".$drinkName);
                    $this->response->redirect("FoodDrink");
                }else{
                    foreach ($newDrink->getMessages() as $err){
                        $this->flash->error($err);
                        $this->response->redirect("FoodDrink");
                    }
                }
            }
        }
    }

    //updating food
    public function updateFoodAction()
    {
        if($this->request->isPost()){
            $foodId = $this->request->getPost("hashcode");
            $foodName = $this->request->getPost("updateFoodName");
            $foodPrice = $this->request->getPost("updateFoodPrice");
            $foodPriceSmall = $this->request->getPost("updateFoodPriceSmall");
            $foodPriceMedium = $this->request->getPost("updateFoodPriceMedium");
            $foodPriceBig = $this->request->getPost("updateFoodPriceBig");
//            $foodType = $this->request->getPost("updateFoodType");
            $foodDescription = $this->request->getPost("updateFoodDescription");
            //$foodImage = $this->request->getPost("updateFoodImage");
            $foodImagePathSaved = $this->request->getPost("foodImagePath");
            $foodImagePath = "";
//            if($foodType === "Select...")
//                $foodType = "";
            //Photo
            if($this->request->hasFiles()){
                foreach ($this->request->getUploadedFiles() as $photo) {
                    $foodImagePath = 'img/foodphoto/' . md5(uniqid(rand(), true)).'-'.$foodName.'.png';
                    $photo->moveTo($foodImagePath);
                }
            }else{
                $foodImagePath = $foodImagePathSaved;
            }
            $findFood = Foods::findFirst(" foodid = '$foodId' ");
            $checkFoodName = Foods::findFirst(" foodid != '$foodId' AND foodname = '$foodName' ");
            if($checkFoodName)
            {
                $this->flash->error("A food with this name already exist");
                $this->response->redirect("FoodDrink");
            }else{
                if($findFood){
                    $findFood->foodid = $foodId;
                    $findFood->foodname = $foodName;
                    $findFood->price = $foodPrice;
                    $findFood->pricesmall = $foodPriceSmall == "" ? $foodPrice : $foodPriceSmall;
                    $findFood->pricemedium = $foodPriceMedium == "" ? $foodPrice : $foodPriceMedium;
                    $findFood->pricebig = $foodPriceBig == "" ? $foodPrice : $foodPriceBig;
                    $findFood->description = $foodDescription;
                    $findFood->photo = $foodImagePath;
                    $findFood->lastupdateddate = date("Y-m-d");
                    if($findFood->update()){
                        $this->flashSession->success("Food with name ".$foodName." has been successfully updated");
                        $this->response->redirect("FoodDrink");
                    }
                    else{
                        foreach ($findFood->getMessages() as $err){
                            $this->flash->error($err);
                            $this->flash->error($foodImagePath);
                            $this->response->redirect("FoodDrink");
                        }
                        //$this->flash->error("An error occur while trying to update food with name".$findFood->foodname);
                        //$this->response->redirect("FoodDrink");
                    }
                }else{
                    $this->flash->error("Impossible to update this food. Please try to logout and log in again");
                    $this->response->redirect("FoodDrink");
                }
            }
        }
    }

    //updating drink
    public function updateDrinkAction()
    {
        if($this->request->isPost()){
            /*$this->session->set("updateMessage", "setted");
            echo $this->session->get("updateMessage");*/
            $drinkId = $this->request->getPost("hashcode");
            $drinkName = $this->request->getPost("updateDrinkName");
            $drinkPrice = $this->request->getPost("updateDrinkPrice");
            $drinkType = $this->request->getPost("updateDrinkType");
            $drinkDescription = $this->request->getPost("updateDrinkDescription");
            //$drinkImage = $this->request->getPost("updateDrinkImage");
            $drinkImagePathSaved = $this->request->getPost("drinkImagePath");
            $drinkImagePath = "";
            if($drinkType === "Select...")
                $drinkType = "";
            //Photo
            if($this->request->hasFiles()){
                foreach ($this->request->getUploadedFiles() as $photo) {
                    $drinkImagePath = 'img/drinkphoto/' . md5(uniqid(rand(), true)).'-'.$drinkName.'.png';
                    $photo->moveTo($drinkImagePath);
                }
            }else{
                $drinkImagePath = $drinkImagePathSaved;
            }
            $findDrink = Drinks::findFirst(" drinkid = '$drinkId' ");
            $checkDrinkName = Drinks::findFirst(" drinkid != '$drinkId' AND drinkname = '$drinkName' ");
            if($checkDrinkName)
            {
                $this->flash->error("A drink with this name already exist");
                $this->response->redirect("FoodDrink");
            }else{
                if($findDrink){
                    $findDrink->drinkid = $drinkId;
                    $findDrink->drinkname = $drinkName;
                    $findDrink->price = $drinkPrice;
                    $findDrink->type = $drinkType;
                    $findDrink->description = $drinkDescription;
                    $findDrink->photo = $drinkImagePath;
                    $findDrink->lastupdateddate = date("Y-m-d");
                    if($findDrink->update()){
                        $this->flashSession->success("Drink with name ".$drinkName." has been successfully updated");
                        $this->response->redirect("FoodDrink");
                    }
                    else{
                        foreach ($findDrink->getMessages() as $err){
                            $this->flash->error($err);
                            $this->flash->error($drinkImagePath);
                            $this->response->redirect("FoodDrink");
                        }
                        //$this->flash->error("An error occur while trying to update drink with name".$findDrink->drinkname);
                        //$this->response->redirect("FoodDrink");
                    }
                }else{
                    $this->flash->error("Impossible to update this drink. Please try to logout and log in again");
                    $this->response->redirect("FoodDrink");
                }
            }
        }
    }

    //deleting food
    public function deleteFoodAction()
    {
        if($this->request->isPost()){
            $foodId = $this->request->getPost("hashcode");
            $findFood = Foods::findFirst("foodid = '$foodId'");
            if($findFood){
                if($findFood->delete()){
                    $this->flash->success("Food with name ".$findFood->foodname." has been successfully deleted");
                    $this->response->redirect("FoodDrink");
                }
                else{
                    $this->flash->error("An error occur while trying to delete food with name".$findFood->foodname);
                    $this->response->redirect("FoodDrink");
                }
            }else{
                $this->flash->error("Impossible to delete this food. Please try to logout and log in again");
                $this->response->redirect("FoodDrink");
            }
        }
    }
    //deleting drink
    public function deleteDrinkAction()
    {
        if($this->request->isPost()){
            $drinkId = $this->request->getPost("hashcode");
            $findDrink = Drinks::findFirst("drinkid = '$drinkId'");
            if($findDrink){
                if($findDrink->delete()){
                    $this->flash->success("Drink with name".$findDrink->drinkname." has been successfully deleted");
                    $this->response->redirect("FoodDrink");
                }
                else{
                    $this->flash->error("An error occur while trying to delete drink with name".$findDrink->drinkname);
                    $this->response->redirect("FoodDrink");
                }
            }else{
                $this->flash->error("Impossible to delete this drink. Please try to logout and log in again");
                $this->response->redirect("FoodDrink");
            }
        }
    }

    //changing food state
    public function updateStateFoodAction()
    {
        if($this->request->isPost()){
            $hashingCode = $this->request->getPost("hashPermLockFood");
            $findFood = Foods::findFirst("foodid = '$hashingCode'");
            if($findFood){
                $findFood->state = $findFood->state == "on" ? "off" : "on";
                $currentState = $findFood->state;
                $findFood->lastupdateddate = date("Y-m-d");
                if($findFood->update()){
                    if($currentState === "off")
                        $this->flash->success("Food with name ".$findFood->foodname." is now permanently unavailable ");
                    else
                        $this->flash->success("Food with name ".$findFood->foodname." is now available ");
                    $this->response->redirect("FoodDrink");
                }
                else{
                    $this->flash->error("An error occur while trying to change the availability of food with name".$findFood->foodname);
                    $this->response->redirect("FoodDrink");
                }
            }else{
                $this->flash->error("Impossible to change the availability of this food. Please try to logout and log in again");
                $this->response->redirect("FoodDrink");
            }
        }
    }

    //changing drink state
    public function updateStateDrinkAction()
    {
        if($this->request->isPost()){
            $hashingCode = $this->request->getPost("hashPermLockDrink");
            $findDrink = Drinks::findFirst("drinkid = '$hashingCode'");
            if($findDrink){
                $findDrink->state = $findDrink->state == "on" ? "off" : "on";
                $currentState = $findDrink->state;
                $findDrink->lastupdateddate = date("Y-m-d");
                if($findDrink->update()){
                    if($currentState === "off")
                        $this->flash->success("Drink with name ".$findDrink->drinkname." is now permanently unavailable ");
                    else
                        $this->flash->success("Drink with name ".$findDrink->drinkname." is now available ");
                    $this->response->redirect("FoodDrink");
                }
                else{
                    $this->flash->error("An error occur while trying to change the availability of drink with name".$findDrink->drinkname);
                    $this->response->redirect("FoodDrink");
                }
            }else{
                $this->flash->error("Impossible to change the availability of this drink. Please try to logout and log in again");
                $this->response->redirect("FoodDrink");
            }
        }
    }

    //changing food availability
    public function updateAvailabilityFoodAction()
    {
        if($this->request->isPost()){
            $hashingCode = $this->request->getPost("hashSoldFood");
            $findFood = Foods::findFirst("foodid = '$hashingCode'");
            if($findFood){
                $findFood->available = $findFood->available == "yes" ? "no" : "yes";
                $currentAvailability = $findFood->available;
                $findFood->lastupdateddate = date("Y-m-d");
                if($findFood->update()){
                    if($currentAvailability === "yes")
                        $this->flash->success("Food with name ".$findFood->foodname." is now available ");
                    else
                        $this->flash->success("Food with name ".$findFood->foodname." is now temporarily unavailable ");
                    $this->response->redirect("FoodDrink");
                }
                else{
                    $this->flash->error("An error occur while trying to change the availability of food with name".$findFood->foodname);
                    $this->response->redirect("FoodDrink");
                }
            }else{
                $this->flash->error("Impossible to change the availability of this food. Please try to logout and log in again");
                $this->response->redirect("FoodDrink");
            }
        }
    }

    //changing drink availability
    public function updateAvailabilityDrinkAction()
    {
        if($this->request->isPost()){
            $hashingCode = $this->request->getPost("hashSoldDrink");
            $findDrink = Drinks::findFirst("drinkid = '$hashingCode'");
            if($findDrink){
                $findDrink->available = $findDrink->available == "yes" ? "no" : "yes";
                $currentAvailability = $findDrink->available;
                $findDrink->lastupdateddate = date("Y-m-d");
                if($findDrink->update()){
                    if($currentAvailability === "yes")
                        $this->flash->success("Drink with name ".$findDrink->drinkname." is now available ");
                    else
                        $this->flash->success("Drink with name ".$findDrink->drinkname." is now temporarily unavailable ");
                    $this->response->redirect("FoodDrink");
                }
                else{
                    $this->flash->error("An error occur while trying to change the availability of drink with name".$findDrink->drinkname);
                    $this->response->redirect("FoodDrink");
                }
            }else{
                $this->flash->error("Impossible to change the availability of this drink. Please try to logout and log in again");
                $this->response->redirect("FoodDrink");
            }
        }
    }
}

