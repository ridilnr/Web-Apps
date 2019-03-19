<?php

class MenController extends ControllerBase
{

    public function indexAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Mens'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Mens'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Mens'",
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
            $this->response->redirect("Men".$from);
        }
    }
    //End
    public function jacketsAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Mens' AND subcat = 'Jackets & Coats'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Mens' AND subcat = 'Jackets & Coats'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Mens' AND subcat = 'Jackets & Coats'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function jeansAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Mens' AND subcat = 'Jeans'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Mens' AND subcat = 'Jeans'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Mens' AND subcat = 'Jeans'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function jumpersAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Mens' AND subcat = 'Jumpers & Cardigans'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Mens' AND subcat = 'Jumpers & Cardigans'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Mens' AND subcat = 'Jumpers & Cardigans'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function nightwearAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Mens' AND subcat = 'Nightwear'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Mens' AND subcat = 'Nightwear'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Mens' AND subcat = 'Nightwear'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function shirtsAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Mens' AND subcat = 'Shirts'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Mens' AND subcat = 'Shirts'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Mens' AND subcat = 'Shirts'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function tshirtsAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Mens' AND subcat = 'Tshirts'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Mens' AND subcat = 'Tshirts'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Mens' AND subcat = 'Tshirts'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function shoesAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Mens' AND subcat = 'Shoes'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Mens' AND subcat = 'Shoes'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Mens' AND subcat = 'Shoes'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function trousersAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Mens' AND subcat = 'Trousers'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Mens' AND subcat = 'Trousers'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Mens' AND subcat = 'Trousers'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function shortsAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Mens' AND subcat = 'Shorts'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Mens' AND subcat = 'Shorts'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Mens' AND subcat = 'Shorts'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    //Men search clothes function
    public function SearchCothesAction()
    {
        //Colors from post
        $black = $this->request->getPost("black");
        $blue = $this->request->getPost("blue");
        $brown = $this->request->getPost("brown");
        $camel = $this->request->getPost("camel");
        $cream = $this->request->getPost("cream");
        $green = $this->request->getPost("green");
        $grey = $this->request->getPost("grey");
        $metallic = $this->request->getPost("metallic");
        $multi = $this->request->getPost("multi");
        $nude = $this->request->getPost("nude");
        $pink = $this->request->getPost("pink");
        $purple = $this->request->getPost("purple");
        $red = $this->request->getPost("red");
        $white = $this->request->getPost("white");
        $yellow = $this->request->getPost("yellow");
        //sizes from post
        $xxs = $this->request->getPost("XXS");
        $xs = $this->request->getPost("XS");
        $s = $this->request->getPost("S");
        $m = $this->request->getPost("M");
        $l = $this->request->getPost("L");
        $xl = $this->request->getPost("XL");
        $xxl = $this->request->getPost("XXL");
        $xxxl = $this->request->getPost("XXXL");
        $s42 = $this->request->getPost("s42");
        $s44 = $this->request->getPost("s44");
        $s46 = $this->request->getPost("s46");
        $s48 = $this->request->getPost("s48");
        $s50 = $this->request->getPost("s50");
        $s52 = $this->request->getPost("s52");
        $s54 = $this->request->getPost("s54");
        $s56 = $this->request->getPost("s56");
        $brand = $this->request->getPost("brand");
        $subcat = $this->request->getPost("subcat");
        $find = Productdetails::find([
                "category = 'Mens' AND subcat = '$subcat' OR category = 'Mens' AND brand = '$brand' OR category = 'Mens' AND color = '$black'
                OR category = 'Mens' AND color = '$blue' OR category = 'Mens' AND color = '$brown' OR category = 'Mens' AND color = '$camel'
                OR category = 'Mens' AND color = '$cream' OR category = 'Mens' AND
                color = '$green' OR category = 'Mens' AND color = '$grey' OR category = 'Mens' AND color = '$metallic' OR category = 'Mens' AND
                color = '$multi' OR category = 'Mens' AND color = '$nude' OR category = 'Mens' AND color = '$pink' OR category = 'Mens' AND color = '$purple'
                OR category = 'Mens' AND color = '$red' OR category = 'Mens' AND color = '$white' OR category = 'Mens' AND color = '$yellow'
                OR category = 'Mens' AND size = '$s42' OR category = 'Mens' AND size = '$s44' OR category = 'Mens' AND size = '$s46' OR
                category = 'Mens' AND size = '$s48' OR category = 'Mens' AND size = '$s50' OR category = 'Mens' AND size = '$s52' OR
                category = 'Mens' AND size = '$s54' OR category = 'Mens' AND size = '$s56'
                OR category = 'Mens' AND size = '$xxs' OR category = 'Mens' AND size = '$xs' OR category = 'Mens' AND size = '$s' OR
                category = 'Mens' AND size = '$m' OR category = 'Mens' AND size = '$l' OR category = 'Mens' AND size = '$xl' OR category = 'Mens'
                AND size = '$xxl' OR category = 'Mens' AND size = '$xxxl'",
                "order" => "dateinserted DESC"
            ]
        );
        $this->session->set("ProductList",$find);
        $this->response->redirect("Men/SearchResults?page=1");
    }
    public function SearchResultsAction()
    {
        $this->view->setVar("ProductListe",$this->session->get("ProductList"));
    }
}

