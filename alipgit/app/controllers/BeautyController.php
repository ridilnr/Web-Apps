<?php

class BeautyController extends ControllerBase
{

    public function indexAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Beauty'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Beauty'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Beauty'",
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
            $this->response->redirect("Beauty".$from);
        }
    }
    //End
    public function bodyAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Beauty' AND subcat = 'Body'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Beauty' AND subcat = 'Body'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Beauty' AND subcat = 'Body'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function giftsAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Beauty' AND subcat = 'Gifts'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Beauty' AND subcat = 'Gifts'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Beauty' AND subcat = 'Gifts'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }    }
    public function makeupAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Beauty' AND subcat = 'Makeup'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Beauty' AND subcat = 'Makeup'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Beauty' AND subcat = 'Makeup'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function nailsAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Beauty' AND subcat = 'Nails'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Beauty' AND subcat = 'Nails'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Beauty' AND subcat = 'Nails'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function skincareAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Beauty' AND subcat = 'Skincare'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Beauty' AND subcat = 'Skincare'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Beauty' AND subcat = 'Skincare'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function hairAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Beauty' AND subcat = 'Hair'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Beauty' AND subcat = 'Hair'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Beauty' AND subcat = 'Hair'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }

}

