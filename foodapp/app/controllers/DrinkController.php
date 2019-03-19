<?php

class DrinkController extends \Phalcon\Mvc\Controller
{

    //reading drink
    public function indexAction()
    {
        if(!(($this->session->has("restaurantId")) AND ($this->session->has("restaurantName")))) {
            $this->flashSession->error("You have been disconnected recently. Please login again !");
            $this->response->redirect("Index");
        }else{
            $restaurantId = $this->session->get('restaurantId');
            $restaurantName = $this->session->get('restaurantName');
            $drink = array();
            $selectedFilter = "";
            if($this->session->has("filterParamDrink")){
                $filterParam = $this->session->get("filterParamDrink");
                $selectedFilter = $filterParam;
                switch ($filterParam){
                    case "nameAscending":
                        $drink = Drinks::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "drinkname"
                        ]);
                        break;
                    case "nameDescending":
                        $drink = Drinks::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "drinkname DESC"
                        ]);
                        break;
                    case "typeAscending":
                        $drink = Drinks::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "type"
                        ]);
                        break;
                    case "typeDescending":
                        $drink = Drinks::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "type DESC"
                        ]);
                        break;
                    case "priceAscending":
                        $drink = Drinks::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "price"
                        ]);
                        break;
                    case "priceDescending":
                        $drink = Drinks::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "price DESC"
                        ]);
                        break;
                    case "sizeAscending":
                        $drink = Drinks::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "size"
                        ]);
                        break;
                    case "sizeDescending":
                        $drink = Drinks::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "size DESC"
                        ]);
                        break;
                    case "discountAscending":
                        $drink = Drinks::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "discount"
                        ]);
                        break;
                    case "discountDescending":
                        $drink = Drinks::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "discount DESC"
                        ]);
                        break;
                    case "dateInsertedAscending":
                        $drink = Drinks::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "dateinserted"
                        ]);
                        break;
                    case "dateInsertedDescending":
                        $drink = Drinks::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "dateinserted DESC"
                        ]);
                        break;
                    case "dateUpdatedAscending":
                        $drink = Drinks::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "lastupdateddate"
                        ]);
                        break;
                    case "dateUpdatedDescending":
                        $drink = Drinks::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "lastupdateddate DESC"
                        ]);
                        break;
                    default :
                        $drink = Drinks::find([
                            "restoid = '$restaurantId'",
                            "restauname = '$restaurantName'",
                            "order" => "drinkname"
                        ]);
                        break;
                }
            }else{
                $drink = Drinks::find([
                    "restoid = '$restaurantId'",
                    "restauname = '$restaurantName'",
                    "order" => "drinkname"
                ]);
            }
            //
            $food = Foods::find([
                "restoid = '$restaurantId'",
                "restauname = '$restaurantName'",
            ]);
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
            //
            $this->view->setVars([
                'drink' => $drink,
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
                        $this->response->redirect("Drink");
                    }else {
                        $this->flashSession->success("An error occurred while trying to update your status");
                        $this->response->redirect("Drink");
                    }
                }else{
                    $this->flashSession->success("Please try to restart the app. An unexpected error occured.");
                    $this->response->redirect("Drink");
                }
            }else{
                $this->flashSession->success("Something went wrong. Please contact admin for help.");
            }
        }
    }

    //filter drink
    public function filterAction()
    {
        if($this->request->isPost()){
            $filterParam = $this->request->getPost("filterParam");
            $this->session->set("filterParamDrink", $filterParam);
            //$this->flash->success("METHOD IS POST AND PARAMETER = ".$filterParam);
            $this->response->redirect("Drink");
        }else{
            $filterParam = $this->request->get("filterParam");
            //$this->flash->success("METHOD IS GET AND PARAMETER = ".$filterParam);
            $this->response->redirect("Drink?filterParam=".$filterParam);
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
            if($findDrink)
                goto gen;
            if(($this->session->has("restaurantId")) AND ($this->session->has("restaurantName"))) {
                // Retrieve its value
                $restoid = $this->session->get("restaurantId");
                $restoname = $this->session->get("restaurantName");
            } else{
                $this->flash->error("An error occurred while saving drink. Please try to logout and login.");
                $this->response->redirect("Drink");
            }
            $drinkName = $this->request->getPost("addDrinkName");
            $drinkPrice = $this->request->getPost("addDrinkPrice");
            $drinkType = $this->request->getPost("addDrinkType");
            $drinkSize = $this->request->getPost("addDrinkSize");
            $drinkDiscount = $this->request->getPost("addDrinkDiscount");
            $drinkDescription = $this->request->getPost("addDrinkDescription");
            $drinkAvailability = $this->request->getPost("addDrinkAvailability");
            //$drinkImage = $this->request->getPost("addDrinkImage");
            $drinkImagePath = "";
            if($drinkType === "Select...")
                $drinkType = "";
            //Photo
            if($this->request->hasFiles()){
                foreach ($this->request->getUploadedFiles() as $photo) {
                    $drinkImagePath = 'img/drinkphoto/' . md5(uniqid(rand(), true)).'-'.$drinkName.'.png';
                    $photo->moveTo($drinkImagePath);
                    echo "<script>alert('".$drinkImagePath."')</script>";
                }
            }
            $checkDrinkName = Drinks::findFirst(" drinkname = '$drinkName' ");
            if($checkDrinkName)
            {
                $this->flash->error("A drink with this name already exist");
                $this->response->redirect("Drink");
            }else{
                $newDrink = new Drinks();
                $newDrink->drinkid = $drinkId;
                $newDrink->restoid = $restoid;
                $newDrink->restauname = $restoname;
                $newDrink->drinkname = $drinkName;
                $newDrink->price = $drinkPrice;
                $newDrink->type = $drinkType;
                $newDrink->size = $drinkSize;
                $newDrink->discount = $drinkDiscount;
                $newDrink->description = $drinkDescription;
                $newDrink->available = $drinkAvailability;
                $newDrink->photo = $drinkImagePath;
                $newDrink->dateinserted = date("Y-m-d");
                $newDrink->lastupdateddate = date("Y-m-d");
                if($newDrink->save()){
                    $this->flash->success("Drink successfully added with name: ".$drinkName);
                    $this->response->redirect("Drink");
                }else{
                    foreach ($newDrink->getMessages() as $err){
                        $this->flash->error($err);
                        $this->response->redirect("Drink");
                    }
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
            $drinkSize = $this->request->getPost("updateDrinkSize");
            $drinkDiscount = $this->request->getPost("updateDrinkDiscount");
            $drinkDescription = $this->request->getPost("updateDrinkDescription");
            $drinkAvailability = $this->request->getPost("updateDrinkAvailability");
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
                $this->response->redirect("Drink");
            }else{
                if($findDrink){
                    $findDrink->drinkid = $drinkId;
                    $findDrink->drinkname = $drinkName;
                    $findDrink->price = $drinkPrice;
                    $findDrink->type = $drinkType;
                    $findDrink->size = $drinkSize;
                    $findDrink->discount = $drinkDiscount;
                    $findDrink->description = $drinkDescription;
                    $findDrink->available = $drinkAvailability;
                    $findDrink->photo = $drinkImagePath;
                    $findDrink->lastupdateddate = date("Y-m-d");
                    if($findDrink->update()){
                        $this->flashSession->success("Drink with name ".$drinkName." has been successfully updated");
                        $this->response->redirect("Drink");
                    }
                    else{
                        foreach ($findDrink->getMessages() as $err){
                            $this->flash->error($err);
                            $this->flash->error($drinkImagePath);
                            $this->response->redirect("Drink");
                        }
                        //$this->flash->error("An error occur while trying to update drink with name".$findDrink->drinkname);
                        //$this->response->redirect("Drink");
                    }
                }else{
                    $this->flash->error("Impossible to update this drink. Please try to logout and log in again");
                    $this->response->redirect("Drink");
                }
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
                    $this->response->redirect("Drink");
                }
                else{
                    $this->flash->error("An error occur while trying to delete drink with name".$findDrink->drinkname);
                    $this->response->redirect("Drink");
                }
            }else{
                $this->flash->error("Impossible to delete this drink. Please try to logout and log in again");
                $this->response->redirect("Drink");
            }
        }
    }

}

