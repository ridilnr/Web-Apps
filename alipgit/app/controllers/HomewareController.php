<?php

class HomewareController extends ControllerBase
{

    public function indexAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Homeware'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Homeware'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Homeware'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }

    public function bathroomAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Homeware' AND subcat = 'Bathroom'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Homeware' AND subcat = 'Bathroom'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Homeware' AND subcat = 'Bathroom'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function bedroomAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Homeware' AND subcat = 'Bedroom'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Homeware' AND subcat = 'Bedroom'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Homeware' AND subcat = 'Bedroom'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function kidsAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Homeware' AND subcat = 'Kids room'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Homeware' AND subcat = 'Kids room'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Homeware' AND subcat = 'Kids room'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function kitchenAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Homeware' AND subcat = 'Kitchen'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Homeware' AND subcat = 'Kitchen'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Homeware' AND subcat = 'Kitchen'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function livingAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Homeware' AND subcat = 'Living room'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Homeware' AND subcat = 'Living room'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Homeware' AND subcat = 'Living room'",
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
            $this->response->redirect("Homeware".$from);
        }
    }
    //End
}

