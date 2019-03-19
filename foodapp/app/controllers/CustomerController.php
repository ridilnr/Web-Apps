<?php

use Phalcon\Paginator\Adapter\Model as PaginatorModel;

class CustomerController extends \Phalcon\Mvc\Controller
{
    public function indexAction()
    {
        if(!(($this->session->has("restaurantId")) AND ($this->session->has("restaurantName")))) {
            $this->flashSession->error("You have been disconnected recently. Please login again !");
            $this->response->redirect("Index");
        }else{
            $restaurantId = $this->session->get('restaurantId');
            $restaurantName = $this->session->get('restaurantName');
            $page = null;
            $customers = null;
            $selectedFilter = "";
            if($this->session->has("filterParam")){
                $filterParam = $this->session->get("filterParam");
                $selectedFilter = $filterParam;
                switch ($filterParam){
                    case "nameAscending":
                        $page = Customers::getList($restaurantId, $this->getPageNumber(), "fullname");
                        $customers = $page->items;
                        break;
                    case "nameDescending":
                        $page = Customers::getList($restaurantId, $this->getPageNumber(), "fullname DESC");
                        $customers = $page->items;
                        break;
                    case "emailAscending":
                        $page = Customers::getList($restaurantId, $this->getPageNumber(), "email");
                        $customers = $page->items;
                        break;
                    case "emailDescending":
                        $page = Customers::getList($restaurantId, $this->getPageNumber(), "email DESC");
                        $customers = $page->items;
                        break;
                    case "phoneAscending":
                        $page = Customers::getList($restaurantId, $this->getPageNumber(), "phonenumber");
                        $customers = $page->items;
                        break;
                    case "phoneDescending":
                        $page = Customers::getList($restaurantId, $this->getPageNumber(), "phonenumber DESC");
                        $customers = $page->items;
                        break;
                    case "cityAscending":
                        $page = Customers::getList($restaurantId, $this->getPageNumber(), "city");
                        $customers = $page->items;
                        break;
                    case "cityDescending":
                        $page = Customers::getList($restaurantId, $this->getPageNumber(), "city DESC");
                        $customers = $page->items;
                        break;
                    case "addressAscending":
                        $page = Customers::getList($restaurantId, $this->getPageNumber(), "address");
                        $customers = $page->items;
                        break;
                    case "addressDescending":
                        $page = Customers::getList($restaurantId, $this->getPageNumber(), "address DESC");
                        $customers = $page->items;
                        break;
                    case "ratingAscending":
                        $page = Customers::getList($restaurantId, $this->getPageNumber(), "customerrating");
                        $customers = $page->items;
                        break;
                    case "ratingDescending":
                        $page = Customers::getList($restaurantId, $this->getPageNumber(), "customerrating DESC");
                        $customers = $page->items;
                        break;
                    default :
                        $page = Customers::getList($restaurantId, $this->getPageNumber(), "fullname");
                        $customers = $page->items;
                        break;
                }
            }else{
                $page = Customers::getList($restaurantId, $this->getPageNumber(), "fullname");
                $customers = $page->items;
            }
            //
            $food = Foods::find([
                "restoid = '$restaurantId'",
                "restauname = '$restaurantName'",
            ]);

            $drink = Drinks::find([
                "restoid = '$restaurantId'",
                "restauname = '$restaurantName'",
            ]);

            $orderSum = Ordersummary::find([
                "restauname = '$restaurantName'",
            ]);
            $blockedCustomers = Customers::find([
                "idresto = '$restaurantId' AND status = 'inactive'",
            ]);
            //
            $numCustomer = count(Customers::find([
                "idresto = '$restaurantId'",
            ]));
            $numOrder = count($orderSum);
            $this->view->setVars([
                'page' => $page,
                'customer' => $customers,
                'blockedCustomers' => $blockedCustomers,
                'selectedFilter' => $selectedFilter,
                'restaurantName' => $this->session->get("restaurantName"),
                'restaurantPhoto' => $this->session->get("restaurantPhoto"),
                'numFood' => count($food),
                'numDrink' => count($drink),
                'numCustomer' => $numCustomer,
                'numBlockedCustomer' => count($blockedCustomers),
                'numOrder' => $numOrder,
            ]);
        }
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
                    $findAdminRestaurant->idresto = $restaurantId;
                    $findAdminRestaurant->restauname = $restaurantName;
                    $findAdminRestaurant->connectivity = $connectivity;
                    if($findAdminRestaurant->update()){
                        $this->flashSession->success("Your status has been changed to : ".$connectivity);
                        $this->response->redirect("Customer");
                    }else {
                        $this->flashSession->success("An error occurred while trying to update your status");
                        $this->response->redirect("Customer");
                    }
                }else{
                    $this->flashSession->success("Please try to restart the app. An unexpected error occured.");
                    $this->response->redirect("Customer");
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
            $this->session->set("filterParam", $filterParam);
            //$this->flash->success("METHOD IS POST AND PARAMETER = ".$filterParam);
            $this->response->redirect("Customer");
        }else{
            $filterParam = $this->request->get("filterParam");
            //$this->flash->success("METHOD IS GET AND PARAMETER = ".$filterParam);
            $this->response->redirect("Customer?filterParam=".$filterParam);
        }
    }

    public function blockUnblockCustomerAction(){
        if($this->request->isGet()){
            $customerId = $this->request->get("param");
            $action = $this->request->get("do");
            if(!($this->session->has("restaurantId"))) {
                $this->flashSession->error("You have been disconnected recently. Please login again !");
                $this->response->redirect("Index");
            }else{
                $restaurantId = $this->session->get('restaurantId');
                $findCustomer = Customers::findFirst("idresto = '$restaurantId' AND userid = '$customerId' ");
                if($findCustomer){
                    if($action === "block"){
                        $findCustomer->status = "inactive";
                    }else if($action === "unblock"){
                        $findCustomer->status = "active";
                    }
                    if($findCustomer->update()){
                        $this->flashSession->success($findCustomer->fullname." has been successfully ".$action."ed");
                        $this->response->redirect("Customer");
                    }
                    else{
                        $this->flash->error("An error occur while trying to block ".$findCustomer->fullname);
                        $this->response->redirect("Customer");
                    }
                }else{
                    $this->flash->error("Something weird has happened. Please try to logout and log in again");
                    $this->response->redirect("Customer");
                }
            }

            //$this->session->set("filterParam", $filterParam);
            /*$this->flash->success("METHOD IS GET AND PARAMETER = ".$customerId);
            $this->response->redirect("Customer");*/
        }
    }

    public function rateCustomerAction(){
        if($this->request->isPost() && $this->request->isAjax()){
            if(!(($this->session->has("restaurantId")) AND ($this->session->has("restaurantName")))) {
                $this->flashSession->error("You have been disconnected recently. Please login again !");
                $this->response->redirect("Index");
            }else{
                $customerId = $this->request->getPost("customer");
                $ratingValue = $this->request->getPost("rateValue");
                $restaurantId = $this->session->get('restaurantId');
                $customer = Customers::findFirst([
                    "idresto = '$restaurantId' and id = '$customerId'",
                ]);
                if($customer){
                    $customer->restorating = $ratingValue;
                    if($customer->update()){
                        $this->flashSession->success($customer->fullname." has been given ".$customer->restorating." stars successfully");
                        return json_encode(
                            array(
                                "Status" => 200,
                                "name" => $customer->fullname,
                                "rate" => $customer->restorating,
                                "success" => true,
                            ), JSON_FORCE_OBJECT
                        );
                    }else{
                        return json_encode("Not saved. Try again!");
                    }
                }else{
                    return json_encode("We did not find this guy ".$customerId);
                }
            }
        }
        return json_encode("Bad request or page not found. :(");
    }
}

