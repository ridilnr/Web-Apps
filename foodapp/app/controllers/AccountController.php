<?php

class AccountController extends \Phalcon\Mvc\Controller
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
            $adminRestaurant = Adminrestaurant::findFirst("idresto = '$restaurantId' AND restauname = '$restaurantName'");
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
            $numFood = count($food);
            $numDrink = count($drink);
            $numCustomer = count($customer);
            $numOrder = count($orderSum);
            //
            $this->view->setVars([
                'restaurantName' => $this->session->get("restaurantName"),
                'restaurantPhoto' => $this->session->get("restaurantPhoto"),
                'restaurantType' => $adminRestaurant->type,
                'restaurantPasswordUpdateCode' => $adminRestaurant->pwupdatecode,
                'restaurantPasswordUpdateLink' => $adminRestaurant->pwupdatelink,
                'restaurantDateCreation' => $adminRestaurant->datecreation,
                'restaurantLastUpdateDate' => $adminRestaurant->lastupdatedate,
                'restaurantLastLoginDate' => $adminRestaurant->lastlogindate,
                'restaurantOtherInfo' => $adminRestaurant->otherinfo,
                'restaurantDateBirth' => $adminRestaurant->datebirth,
                'restaurantGender' => $adminRestaurant->gender,
                'restaurantCity' => $adminRestaurant->city,
                'restaurantCountry' => $adminRestaurant->country,
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
                        $this->response->redirect("Account");
                    }else {
                        $this->flashSession->success("An error occurred while trying to update your status");
                        $this->response->redirect("Account");
                    }
                }else{
                    $this->flashSession->success("Please try to restart the app. An unexpected error occured.");
                    $this->response->redirect("Account");
                }
            }else{
                $this->flashSession->success("Something went wrong. Please contact admin for help.");
            }
        }
    }
}

