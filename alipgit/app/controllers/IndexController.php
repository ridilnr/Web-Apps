<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {

    }
    public function set_searchAction()
    {
        if($this->request->isPost()){
            $search = $this->request->getPost("search");
            //Colors from post

            $find = Productdetails::find([
                    "productname LIKE '%$search%' OR category LIKE '%$search%' OR subcat LIKE '%$search%'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->session->set("ProductList",$find);
            $this->response->redirect("Index/SearchResults?page=1");
                //$ProductListe
        }
    }
    //search result
    public function SearchResultsAction()
    {
        $this->view->setVar("ProductListe",$this->session->get("ProductList"));
    }

    //Setting the l or h for lowertohigher or higher to lower price
    public function set_priceAction()
    {
        if($this->request->isGet()){
            $price = $_GET['price'];
            $this->session->set("price",$price);
        }
    }
    //End

}

