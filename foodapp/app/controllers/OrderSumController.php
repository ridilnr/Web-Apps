<?php

class OrderSumController extends \Phalcon\Mvc\Controller
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
            $page = null;
            $selectedFilter = "";
            if($this->session->has("filterParam")){
                $filterParam = $this->session->get("filterParam");
                $selectedFilter = $filterParam;
                switch ($filterParam){
                    case "new":
                        $page = Ordersummary::getList($restaurantName, $this->getPageNumber(),'status',  "orderdate", "ordertime", "ASC");
                        $orderSum = $this->addUserToOrderSum($page->items);
                        break;
                    case "processing":
                        $page = Ordersummary::getList($restaurantName, $this->getPageNumber(), 'status',  "orderdate", "ordertime", "DESC");
                        $orderSum = $this->addUserToOrderSum($page->items);
                        break;
                    case "newOrders":
                        $page = Ordersummary::getSpecList($restaurantName, $this->getPageNumber(), 'new',  "orderdate", "ordertime");
                        $orderSum = $this->addUserToOrderSum($page->items);
                        break;
                    case "processingOrders":
                        $page = Ordersummary::getSpecList($restaurantName, $this->getPageNumber(), 'processing',  "orderdate", "ordertime");
                        $orderSum = $this->addUserToOrderSum($page->items);
                        break;
                    case "cancelledOrders":
                        $page = Ordersummary::getSpecList($restaurantName, $this->getPageNumber(), 'cancelled',  "orderdate", "ordertime");
                        $orderSum = $this->addUserToOrderSum($page->items);
                        break;
                    case "deliveredOrders":
                        $page = Ordersummary::getSpecList($restaurantName, $this->getPageNumber(), 'delivered',  "orderdate", "ordertime");
                        $orderSum = $this->addUserToOrderSum($page->items);
                        break;
                    default :
                        $page = Ordersummary::getList($restaurantName, $this->getPageNumber(), 'status',  "orderdate", "ordertime", "ASC");
                        $orderSum = $this->addUserToOrderSum($page->items);
                        break;
                }
            }else{
                $page = Ordersummary::getList($restaurantName, $this->getPageNumber(), 'status',  "orderdate", "ordertime", "ASC");
                $orderSum = $this->addUserToOrderSum($page->items);
            }
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
                "restoid = '$restaurantId' AND restauname = '$restaurantName'",
            ]);
            $drink = Drinks::find([
                "restoid = '$restaurantId' AND restauname = '$restaurantName'",
            ]);
            $customer = Customers::find([
                "idresto= '$restaurantId'",
            ]);
            $newOrders = Ordersummary::find([
                "restauname = '$restaurantName' AND status = 'new'",
            ]);
            $processingOrders = Ordersummary::find([
                "restauname = '$restaurantName' AND status = 'processing'",
            ]);
            $cancelledOrders = Ordersummary::find([
                "restauname = '$restaurantName' AND status = 'cancelled'",
            ]);
            $deliveredOrders = Ordersummary::find([
                "restauname = '$restaurantName' AND status = 'delivered'",
            ]);
            //
            $this->view->setVars([
                'page' => $page,
                'orderSum' => $orderSum,
                'restaurantName' => $this->session->get("restaurantName"),
                'restaurantPhoto' => $this->session->get("restaurantPhoto"),
                'numFood' => count($food),
                'numDrink' => count($drink),
                'numCustomer' => count($customer),
                'numOrder' => count($orderFood),
                'numOrderDrink' => count($orderDrink),
                "numAllOrder" => count(Ordersummary::find([
                    "restauname = '$restaurantName'",
                ])),
                "numNewOrders" => count($newOrders),
                "numProcessingOrders" => count($processingOrders),
                "numCancelledOrders" => count($cancelledOrders),
                "numDeliveredOrders" => count($deliveredOrders),
                'selectedFilter' => $selectedFilter,
            ]);
        }
    }

    public function addUserToOrderSum($orderSum){
        for($i = 0; $i < count($orderSum); $i++){
            $id = $orderSum[$i]->userid;
            $user = Users::findFirst("userid = '$id'");
            if($user){
                $orderSum[$i]->fullname = $user->fname." ".$user->lname;
            }
        }
        return $orderSum;
    }

    //get page number from get request
    public function getPageNumber(){
        if($this->request->isGet() && $this->request->hasQuery("page")){
            $pageNum = $this->request->getQuery('page', 'int');
        }else{
            $pageNum = 1;
        }
        return $pageNum;
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
                    $findAdminRestaurant->connectivity = $connectivity;
                    if($findAdminRestaurant->update()){
                        $this->flashSession->success("Your status has been changed to : ".$connectivity);
                        $this->response->redirect("OrderSum");
                    }else {
                        $this->flashSession->success("An error occurred while trying to update your status");
                        $this->response->redirect("OrderSum");
                    }
                }else{
                    $this->flashSession->success("Please try to restart the app. An unexpected error occured.");
                    $this->response->redirect("OrderSum");
                }
            }else{
                $this->flashSession->success("Something went wrong. Please contact admin for help.");
            }
        }
    }

    //filter orders
    public function filterAction()
    {
        if($this->request->isPost()){
            $filterParam = $this->request->getPost("filterParam");
            $this->session->set("filterParam", $filterParam);
            //$this->flash->success("METHOD IS POST AND PARAMETER = ".$filterParam);
            $this->response->redirect("OrderSum");
        }else{
            $filterParam = $this->request->get("filterParam");
            $this->session->set("filterParam", $filterParam);
            //$this->flash->success("METHOD IS GET AND PARAMETER = ".$filterParam);
            //$this->response->redirect("OrderSum?filterParam=".$filterParam);
            $this->response->redirect("OrderSum");
        }
    }

    //Get ordercode and userid to send them in session
    //before showing user order details
    public function getOrderSumAction()
    {
        if($this->request->isPost()){
            $this->session->set("specificOrderTotPrice", $this->request->getPost("orderTotPrice"));
            $this->session->set("specificOrderTotQty", $this->request->getPost("orderQuantity"));
            $this->session->set("specificOrderStatus", $this->request->getPost("orderStatus"));
            $this->session->set("specificOrderDate", $this->request->getPost("orderDate"));
            $this->session->set("specificOrderTime", $this->request->getPost("orderTime"));
            $this->session->set("specificOrderCode", $this->request->getPost("orderCred"));
            $this->session->set("specificUserId", $this->request->getPost("userCred"));
            $this->session->set("specificOrderNote", $this->request->getPost("orderNote"));
            $this->session->set("specificOrderRateCustomer", $this->request->getPost("ratingCustomer"));
            $this->response->redirect("Order");
        }else{
            $this->flashSession->error("Something unexpected happened. Please contact admin");
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
                $userId = $this->request->getPost("userCred");
                $orderCode = $this->request->getPost("orderCodeCancel");
                $reasonCancel = $this->request->getPost("reasonCancelSelect");
                $otherReasonCancel = $this->request->getPost("reasonCancelTextArea");
                $reason = $reasonCancel == "otherReason" ? $otherReasonCancel : $reasonCancel;
                $findOrderSum = Ordersummary::find("userid = '$userId' AND ordercode = '$orderCode' AND restauname = '$restaurantName' ");
                $findFoodOrder = Orderfood::find("userid = '$userId' AND ordercode = '$orderCode' ");
                $findDrinkOrder = Orderdrink::find("userid = '$userId' AND ordercode = '$orderCode' ");
                if ($findOrderSum) {
                    foreach ($findOrderSum as $fos) {
                        $fos->reasoncanceled = $reason;
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
                    $this->flashSession->success("\"$customerName\" order has been cancelled successfully");
                    $this->flashSession->success("Reason : $reason");
                    $this->response->redirect("OrderSum");
                }else{
                    $this->flashSession->error("An error occurred while trying to cancel \"$customerName\" order.");
                    $this->response->redirect("OrderSum");
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
                $userId = $this->request->getPost("userCred");
                $orderCode = $this->request->getPost("orderCodeProcessing");
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
                    $this->flashSession->success("\"$customerName\" order has been set to processing status successfully");
                    $this->response->redirect("OrderSum");
                }else{
                    $this->flashSession->error("An error occurred while trying to set \"$customerName\" order status to processing.");
                    $this->response->redirect("OrderSum");
                }
            }else{
                $this->flashSession->error("Something went wrong. Please contact admin for help.");
            }
        }
    }
}


