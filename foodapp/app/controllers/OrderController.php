<?php

class OrderController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        if (!(($this->session->has("restaurantId")) AND ($this->session->has("restaurantName")))) {
            $this->flashSession->error("You have been disconnected recently. Please login again !");
            $this->response->redirect("Index");
        } else {
            //$this->flash->success($this->session->get("specificUserId"));
            //
            $restaurantId = $this->session->get('restaurantId');
            $restaurantName = $this->session->get('restaurantName');
            //
            $orderFood = Orderfood::find([
                "restauname = '$restaurantName'",
                "order" => "orderdate, ordertime"
            ]);
            //
            $orderDrink = Orderdrink::find([
                "restauname = '$restaurantName'",
                "order" => "orderdate, ordertime"
            ]);
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
            //
            $numFood = count($food);
            $numDrink = count($drink);
            $numCustomer = count($customer);
            $numOrderFood = count($orderFood);
            $numOrderDrink = count($orderDrink);
            $orderSum = Ordersummary::find([
                "restauname = '$restaurantName'",
            ]);
            //
            //send common variables to view
            $this->view->setVars([
                'restaurantName' => $this->session->get("restaurantName"),
                'restaurantPhoto' => $this->session->get("restaurantPhoto"),
                'restaurantAddress' => $this->session->get("restaurantAddress"),
                'numFood' => $numFood,
                'numDrink' => $numDrink,
                'numCustomer' => $numCustomer,
                'numOrder' => $numOrderFood,
                "numAllOrder" => count($orderSum),
            ]);

            if ($this->session->has("specificUserId") && $this->session->has("specificOrderCode") &&
                $this->session->has("specificOrderTime") && $this->session->has("specificOrderDate") &&
                $this->session->has("specificOrderStatus") && $this->session->has("specificOrderTotQty") &&
                $this->session->has("specificOrderTotPrice") && $this->session->has("specificOrderNote")) {
                $user = $this->session->get("specificUserId");
                $orderCode = $this->session->get("specificOrderCode");
                $customer = Users::findFirst("userid = '$user' ");
                $allFoodOrder = Orderfood::find("userid = '$user' AND ordercode = '$orderCode'");
                $allDrinkOrder = Orderdrink::find("userid = '$user' AND ordercode = '$orderCode'");
                //Check if food and drink order exist
                if (sizeof($allFoodOrder) > 0 && sizeof($allDrinkOrder) > 0) {
                    /*$this->flash->success("Food Order Found and qty = ".sizeof($allFoodOrder));
                    $this->flash->success("Drink Order Found and qty = ".sizeof($allDrinkOrder));*/
                    $this->view->setVars([
                        'foodOrder' => $allFoodOrder,
                        'drinkOrder' => $allDrinkOrder,
                    ]);
                } else {
                    $this->flashSession->warning("The app can not obtain food and drink order information");
                }
                //Check if customer exists
                if (sizeof($customer) > 0) {
                    $this->view->setVars([
                        'customerName' => ucwords($customer->fname . " " . $customer->lname),
                        'customerPhone' => $customer->phonenumber,
                        'customerCred' => $customer->userid,
                        'customerCity' => ucfirst($customer->city),
                        'customerCountry' => ucwords($customer->country),
                        'customerHomeAddress' => ucwords($customer->homeaddress),
                    ]);
                } else {
                    $this->flashSession->warning("The app can not obtain customer information");
                }
                //send order summary variables to view
                $this->view->setVars([
                    'specOrderCode' => $orderCode,
                    'specOrderTime' => $this->session->get("specificOrderTime"),
                    'specOrderDate' => $this->session->get("specificOrderDate"),
                    'specOrderStatus' => $this->session->get("specificOrderStatus"),
                    'specOrderTotQty' => $this->session->get("specificOrderTotQty"),
                    'specOrderTotPrice' => $this->session->get("specificOrderTotPrice"),
                    'specOrderNote' => $this->session->get("specificOrderNote"),
                    'specOrderRateCustomer' => $this->session->get("specificOrderRateCustomer"),
                ]);
            } else {
                $this->flashSession->error("An error occurred while trying to get details of order");
            }
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
                        //$this->session->set("statusRestaurant", $connectivity);
                        $this->flashSession->success("Your status has been changed to : ".$connectivity);
                        $this->response->redirect("Order");
                    }else {
                        $this->flashSession->success("An error occurred while trying to update your status");
                        $this->response->redirect("Order");
                    }
                }else{
                    $this->flashSession->success("Please try to restart the app. An unexpected error occured.");
                    $this->response->redirect("Order");
                }
            }else{
                $this->flashSession->success("Something went wrong. Please contact admin for help.");
            }
        }
    }

    //filter food
    public function filterAction()
    {
        if ($this->request->isPost()) {
            $filterParam = $this->request->getPost("filterParam");
            $this->session->set("filterParamFood", $filterParam);
            //$this->flash->success("METHOD IS POST AND PARAMETER = ".$filterParam);
            $this->response->redirect("Food");
        } else {
            $filterParam = $this->request->get("filterParam");
            //$this->flash->success("METHOD IS GET AND PARAMETER = ".$filterParam);
            $this->response->redirect("Food?filterParam=" . $filterParam);
        }
    }

    //cancel order
    public function cancelOrderAction()
    {
        if($this->request->isPost()){
            if((($this->session->has("restaurantId")) AND ($this->session->has("restaurantName")))) {
                $restaurantName = $this->session->get("restaurantName");
                $customerName = $this->request->getPost("orderFrom");
                $updatedDatabase = false;
                $userId = $this->session->get("specificUserId");
                $orderCode = $this->session->get("specificOrderCode");
                $reasonCancel = $this->request->getPost("reasonCancelSelect");
                $otherReasonCancel = $this->request->getPost("reasonCancelTextArea");
                $reason = $reasonCancel == "otherReason" ? $otherReasonCancel : $reasonCancel;
                $findOrderSum = Ordersummary::find("userid = '$userId' AND ordercode = '$orderCode' AND restauname = '$restaurantName' ");
                $findFoodOrder = Orderfood::find("userid = '$userId' AND ordercode = '$orderCode' ");
                $findDrinkOrder = Orderdrink::find("userid = '$userId' AND ordercode = '$orderCode' ");
                if ($findOrderSum) {
                    foreach ($findOrderSum as $fos) {
                        $findOrderSum->reasoncanceled = $reason;
                        $fos->status = "cancelled";
                        if ($fos->update())
                            $updatedDatabase = true;
                        else
                            $updatedDatabase = false;
                    }
                }
                if ($findFoodOrder) {
                    foreach ($findFoodOrder as $ffo) {
                        $ffo->status = "cancelled";
                        if ($ffo->update())
                            $updatedDatabase = true;
                        else
                            $updatedDatabase = false;
                    }
                }
                if ($findDrinkOrder) {
                    foreach ($findDrinkOrder as $fdo) {
                        $fdo->status = "cancelled";
                        if ($fdo->update())
                            $updatedDatabase = true;
                        else
                            $updatedDatabase = false;
                    }
                }
                if($updatedDatabase){
                    $this->session->set("specificOrderStatus", "cancelled");
                    $this->flashSession->success("\"$customerName\" order has been cancelled successfully");
                    $this->flashSession->success("Reason : $reason");
                    $this->response->redirect("Order");
                }else{
                    $this->flashSession->error("An error occurred while trying to cancel \"$customerName\" order.");
                    $this->response->redirect("Order");
                }
            }else{
                $this->flashSession->error("Something went wrong. Please contact admin for help.");
            }
        }
    }

    //processing order
    public function processOrderAction()
    {
        if($this->request->isPost()){
            if((($this->session->has("restaurantId")) AND ($this->session->has("restaurantName")))) {
                $restaurantName = $this->session->get("restaurantName");
                $customerName = $this->request->getPost("orderFrom");
                $updatedDatabase = false;
                $userId = $this->session->get("specificUserId");
                $orderCode = $this->session->get("specificOrderCode");
                $findOrderSum = Ordersummary::find("userid = '$userId' AND ordercode = '$orderCode' AND restauname = '$restaurantName' ");
                $findFoodOrder = Orderfood::find("userid = '$userId' AND ordercode = '$orderCode' ");
                $findDrinkOrder = Orderdrink::find("userid = '$userId' AND ordercode = '$orderCode' ");
                if ($findOrderSum) {
                    foreach ($findOrderSum as $fos) {
                        $fos->status = "processing";
                        if ($fos->update())
                            $updatedDatabase = true;
                        else
                            $updatedDatabase = false;
                    }
                }
                if ($findFoodOrder) {
                    foreach ($findFoodOrder as $ffo) {
                        $ffo->status = "processing";
                        if ($ffo->update())
                            $updatedDatabase = true;
                        else
                            $updatedDatabase = false;
                    }
                }
                if ($findDrinkOrder) {
                    foreach ($findDrinkOrder as $fdo) {
                        $fdo->status = "processing";
                        if ($fdo->update())
                            $updatedDatabase = true;
                        else
                            $updatedDatabase = false;
                    }
                }
                if($updatedDatabase){
                    $this->session->set("specificOrderStatus", "processing");
                    $this->flashSession->success("\"$customerName\" order has been set to processing status successfully");
                    $this->response->redirect("Order");
                }else{
                    $this->flashSession->error("An error occurred while trying to set \"$customerName\" order status to processing.");
                    $this->response->redirect("Order");
                }
            }else{
                $this->flashSession->error("Something went wrong. Please contact admin for help.");
            }
        }
    }
    public function rateCustomerAction(){
        if($this->request->isPost() && $this->request->isAjax()){
            if(!(($this->session->has("restaurantId")) AND ($this->session->has("restaurantName")))) {
                $this->flashSession->error("You have been disconnected recently. Please login again !");
                $this->response->redirect("Index");
            }else{
                $customer = $this->request->getPost("customer");
                $orderCode = $this->request->getPost("orderCode");
                $ratingValue = $this->request->getPost("rateValue");
                $restaurantName = $this->session->get('restaurantName');
                $findOrderSum = Ordersummary::findFirst([
                    "restauname = '$restaurantName' and ordercode = '$orderCode'",
                ]);
                if($findOrderSum){
                    $findOrderSum->ratingcustomer = $ratingValue;
                    if($findOrderSum->update()){
                        $this->flashSession->success($customer." has been given ".$findOrderSum->ratingcustomer." stars successfully");
                        return json_encode(
                            array(
                                "Status" => 200,
                                "name" => $customer,
                                "rate" => $findOrderSum->ratingcustomer,
                                "success" => true,
                            ), JSON_FORCE_OBJECT
                        );
                    }else{
                        return json_encode("Not saved. Try again!");
                    }
                }else{
                    return json_encode("We did not find this guy ".$customer);
                }
            }
        }
        return json_encode("Bad request or page not found. :(");
    }
}
