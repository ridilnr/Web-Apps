<?php

class NewestController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "price > 0",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "price > 0",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "price > 0",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    //Setting the l or h for lowertohigher or higher to lower price
    public function set_priceAction()
    {
        if($this->request->isGet()){
            $price = $_GET['price'];
            $from = $_GET['from'];
            $this->session->set("price",$price);
            $this->response->redirect("Newest".$from);
        }
    }
    //End

}

