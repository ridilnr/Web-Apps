<?php

class DashboardController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        if(!(($this->session->has("restaurantId")) AND ($this->session->has("restaurantName")))) {
            $this->flashSession->error("You have been disconnected recently. Please login again !");
            $this->response->redirect("Index");
        }else{
            //
            $restaurantId = $this->session->get('restaurantId');
            $restaurantName = $this->session->get('restaurantName');
            //
            $food = Foods::find([
                "restoid = '$restaurantId'",
                "restauname = '$restaurantName'",
            ]);

            $drink = Drinks::find([
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
            $stateUpdate = false;
            $numFood = count($food);
            $numDrink = count($drink);
            $numCustomer = count($customer);
            $numOrder = count($orderSum);
            //Update state of food if state = "off"
            if($numFood > 0){
                foreach ($food as $fd){
                    if(($fd->lastupdateddate < date("Y-m-d")) && ($fd->state == "off")){
                        $findFood = Foods::findFirst(" foodid = '$fd->foodid' AND restoid = '$fd->restoid' ");
                        if($findFood){
                            $findFood->foodid = $fd->foodid;
                            $findFood->restoid = $fd->restoid;
                            $findFood->state = "on";
                            if($findFood->update())
                                $stateUpdate = true;
                            else
                                $stateUpdate = false;
                        }
                        else
                            $stateUpdate = false;
                    }
                    else
                        $stateUpdate = true;
                }
            }
            //Update state of drink if state = "off"
            if($numDrink > 0){
                foreach ($drink as $dk){
                    if(($dk->lastupdateddate < date("Y-m-d")) && ($dk->state == "off")){
                        $findDrink = Drinks::findFirst(" drinkid = '$dk->drinkid' AND restoid = '$dk->restoid' ");
                        if($findDrink){
                            $findDrink->drinkid = $dk->drinkid;
                            $findDrink->restoid = $dk->restoid;
                            $findDrink->state = "on";
                            if($findDrink->update())
                                $stateUpdate = true;
                            else
                                $stateUpdate = false;
                        }
                        else
                            $stateUpdate = false;
                    }else{
                        $stateUpdate = true;
                    }
                }
            }
            //display message if all food and drink states have been updated successfully
            if (!$this->session->has("stateUpdateMessage")){
                if ($stateUpdate == true){
                    $this->flash->success("The app has been updated successfully. :)");
                    $this->session->set("stateUpdateMessage", "displayed");
                }
                else{
                    $this->flash->warning("Something went wrong while trying to update the app. :(");
                    $this->session->set("stateUpdateMessage", "displayed");
                }
            }
            //
            $this->view->setVars([
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
                        $this->response->redirect("Dashboard");
                    }else {
                        $this->flashSession->success("An error occurred while trying to update your status");
                        $this->response->redirect("Dashboard");
                    }
                }else{
                    $this->flashSession->success("Please try to restart the app. An unexpected error occured.");
                    $this->response->redirect("Dashboard");
                }
            }else{
                $this->flashSession->success("Something went wrong. Please contact admin for help.");
            }
        }
    }
}

