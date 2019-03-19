<?php

class FoodController extends \Phalcon\Mvc\Controller
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
            $food = array();
            $selectedFilter = "";
            if($this->session->has("filterParamFood")){
                $filterParam = $this->session->get("filterParamFood");
                $selectedFilter = $filterParam;
                switch ($filterParam){
                    case "nameAscending":
                        $food = Foods::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "foodname"
                        ]);
                        break;
                    case "nameDescending":
                        $food = Foods::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "foodname DESC"
                        ]);
                        break;
                    case "typeAscending":
                        $food = Foods::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "type"
                        ]);
                        break;
                    case "typeDescending":
                        $food = Foods::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "type DESC"
                        ]);
                        break;
                    case "priceAscending":
                        $food = Foods::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "price"
                        ]);
                        break;
                    case "priceDescending":
                        $food = Foods::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "price DESC"
                        ]);
                        break;
                    case "sizeAscending":
                        $food = Foods::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "size"
                        ]);
                        break;
                    case "sizeDescending":
                        $food = Foods::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "size DESC"
                        ]);
                        break;
                    case "discountAscending":
                        $food = Foods::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "discount"
                        ]);
                        break;
                    case "discountDescending":
                        $food = Foods::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "discount DESC"
                        ]);
                        break;
                    case "dateInsertedAscending":
                        $food = Foods::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "dateinserted"
                        ]);
                        break;
                    case "dateInsertedDescending":
                        $food = Foods::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "dateinserted DESC"
                        ]);
                        break;
                    case "dateUpdatedAscending":
                        $food = Foods::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "lastupdateddate"
                        ]);
                        break;
                    case "dateUpdatedDescending":
                        $food = Foods::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "lastupdateddate DESC"
                        ]);
                        break;
                    default :
                        $food = Foods::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "foodname"
                        ]);
                    break;
                }
            }else{
                $food = Foods::find([
                    "restoid = '$restaurantId'",
                    "restauname = '$restaurantName'",
                    "order" => "foodname"
                ]);
            }
            //
            $drink = Drinks::find([
                "restoid = '$restaurantId'",
                "restauname = '$restaurantName'",
            ]);
            $customer = Customers::find([
                "idresto= '$restaurantId'",
            ]);
            $order = Orderfood::find([
                "restauname = '$restaurantName'",
            ]);
            //
            $numFood = count($food);
            $numDrink = count($drink);
            $numCustomer = count($customer);
            $numOrder = count($order);
            //
            $this->view->setVars([
                'food' => $food,
                'selectedFilter' => $selectedFilter,
                'restaurantName' => $this->session->get("restaurantName"),
                'restaurantPhoto' => $this->session->get("restaurantPhoto"),
                'numFood' => $numFood,
                'numDrink' => $numDrink,
                'numCustomer' => $numCustomer,
                'numOrder' => $numOrder,
            ]);
        }
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
                        $this->response->redirect("Food");
                    }else {
                        $this->flashSession->success("An error occurred while trying to update your status");
                        $this->response->redirect("Food");
                    }
                }else{
                    $this->flashSession->success("Please try to restart the app. An unexpected error occured.");
                    $this->response->redirect("Food");
                }
            }else{
                $this->flashSession->success("Something went wrong. Please contact admin for help.");
            }
        }
    }

    //filter food
    public function filterAction()
    {
        if($this->request->isPost()){
            $filterParam = $this->request->getPost("filterParam");
            $this->session->set("filterParamFood", $filterParam);
            //$this->flash->success("METHOD IS POST AND PARAMETER = ".$filterParam);
            $this->response->redirect("Food");
        }else{
            $filterParam = $this->request->get("filterParam");
            //$this->flash->success("METHOD IS GET AND PARAMETER = ".$filterParam);
            $this->response->redirect("Food?filterParam=".$filterParam);
        }
    }
    //adding new food
    public function addFoodAction()
    {
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
                $this->response->redirect("Food");
            }
            $foodName = $this->request->getPost("addFoodName");
            $foodPrice = $this->request->getPost("addFoodPrice");
            $foodType = $this->request->getPost("addFoodType");
            $foodSize = $this->request->getPost("addFoodSize");
            $foodDiscount = $this->request->getPost("addFoodDiscount");
            $foodDescription = $this->request->getPost("addFoodDescription");
            $foodAvailability = $this->request->getPost("addFoodAvailability");
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
                $this->response->redirect("Food");
            }else{
                $newFood = new Foods();
                $newFood->foodid = $foodId;
                $newFood->restoid = $restoid;
                $newFood->restauname = $restoname;
                $newFood->foodname = $foodName;
                $newFood->price = $foodPrice;
                $newFood->type = $foodType;
                $newFood->size = $foodSize;
                $newFood->discount = $foodDiscount;
                $newFood->description = $foodDescription;
                $newFood->available = $foodAvailability;
                $newFood->photo = $foodImagePath;
                $newFood->dateinserted = date("Y-m-d");
                $newFood->lastupdateddate = date("Y-m-d");
                if($newFood->save()){
                    $this->flash->success("Food successfully added with name: ".$foodName);
                    $this->response->redirect("Food");
                }else{
                    foreach ($newFood->getMessages() as $err){
                        $this->flash->error($err);
                        $this->response->redirect("Food");
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
            $foodType = $this->request->getPost("updateFoodType");
            $foodSize = $this->request->getPost("updateFoodSize");
            $foodDiscount = $this->request->getPost("updateFoodDiscount");
            $foodDescription = $this->request->getPost("updateFoodDescription");
            $foodAvailability = $this->request->getPost("updateFoodAvailability");
            //$foodImage = $this->request->getPost("updateFoodImage");
            $foodImagePathSaved = $this->request->getPost("foodImagePath");
            $foodImagePath = "";
            if($foodType === "Select...")
                $foodType = "";
            //Photo
            if($this->request->hasFiles()){
                foreach ($this->request->getUploadedFiles() as $photo) {
                    $foodImagePath = 'img/foodphoto/' .md5(uniqid(rand(), true)).'-'.$foodName.'.png';
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
                $this->response->redirect("Food");
            }else{
                if($findFood){
                    $findFood->foodid = $foodId;
                    $findFood->foodname = $foodName;
                    $findFood->price = $foodPrice;
                    $findFood->type = $foodType;
                    $findFood->size = $foodSize;
                    $findFood->discount = $foodDiscount;
                    $findFood->description = $foodDescription;
                    $findFood->available = $foodAvailability;
                    $findFood->photo = $foodImagePath;
                    $findFood->lastupdateddate = date("Y-m-d");
                    if($findFood->update()){
                        $this->flashSession->success("Food with name ".$foodName." has been successfully updated");
                        $this->response->redirect("Food");
                    }
                    else{
                        foreach ($findFood->getMessages() as $err){
                            $this->flash->error($err);
                            $this->flash->error($foodImagePath);
                            $this->response->redirect("Food");
                        }
                        //$this->flash->error("An error occur while trying to update food with name".$findFood->foodname);
                        //$this->response->redirect("Food");
                    }
                }else{
                    $this->flash->error("Impossible to update this food. Please try to logout and log in again");
                    $this->response->redirect("Food");
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
                    $this->response->redirect("Food");
                }
                else{
                    $this->flash->error("An error occur while trying to delete food with name".$findFood->foodname);
                    $this->response->redirect("Food");
                }
            }else{
                $this->flash->error("Impossible to delete this food. Please try to logout and log in again");
                $this->response->redirect("Food");
            }
        }
    }
}

