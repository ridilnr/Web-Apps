<?php

class AccessoriesController extends ControllerBase
{

    public function indexAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'ACCESSORIES'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'ACCESSORIES'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'ACCESSORIES'",
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
            $this->response->redirect("Accessories".$from);
        }
    }
    //End

    public function bagsAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'ACCESSORIES' AND subcat = 'Bags & Purses'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'ACCESSORIES' AND subcat = 'Bags & Purses'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'ACCESSORIES' AND subcat = 'Bags & Purses'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function beltsAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'ACCESSORIES' AND subcat = 'Belts'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'ACCESSORIES' AND subcat = 'Belts'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'ACCESSORIES' AND subcat = 'Belts'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function glovesAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'ACCESSORIES' AND subcat = 'Gloves'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'ACCESSORIES' AND subcat = 'Gloves'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'ACCESSORIES' AND subcat = 'Gloves'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function hatsAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'ACCESSORIES' AND subcat = 'Hats'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'ACCESSORIES' AND subcat = 'Hats'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'ACCESSORIES' AND subcat = 'Hats'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function jewelryAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'ACCESSORIES' AND subcat = 'Jewellery'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'ACCESSORIES' AND subcat = 'Jewellery'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'ACCESSORIES' AND subcat = 'Jewellery'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function phoneAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'ACCESSORIES' AND subcat = 'Phone & Tablet Cases'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'ACCESSORIES' AND subcat = 'Phone & Tablet Cases'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'ACCESSORIES' AND subcat = 'Phone & Tablet Cases'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function scarvesAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'ACCESSORIES' AND subcat = 'Scarves'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'ACCESSORIES' AND subcat = 'Scarves'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'ACCESSORIES' AND subcat = 'Scarves'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function sunglassesAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'ACCESSORIES' AND subcat = 'Sunglasses'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'ACCESSORIES' AND subcat = 'Sunglasses'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'ACCESSORIES' AND subcat = 'Sunglasses'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function watchesAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'ACCESSORIES' AND subcat = 'Watches'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'ACCESSORIES' AND subcat = 'Watches'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'ACCESSORIES' AND subcat = 'Watches'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }

}

