<?php

class KidsController extends ControllerBase
{

    public function indexAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Kids'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Kids'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Kids'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }

    public function boysAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Kids' AND subcat = 'Boys'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Kids' AND subcat = 'Boys'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Kids' AND subcat = 'Boys'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function girlsAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Kids' AND subcat = 'Girls'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Kids' AND subcat = 'Girls'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Kids' AND subcat = 'Girls'",
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
            $this->response->redirect("Kids".$from);
        }
    }
    //End
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
        $size = $this->request->getPost("size");
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
                "category = 'Kids' AND subcat = '$subcat' OR category = 'Kids' AND brand = '$brand' OR category = 'Kids' AND color = '$black'
                OR category = 'Kids' AND color = '$blue' OR category = 'Kids' AND color = '$brown' OR category = 'Kids' AND color = '$camel'
                OR category = 'Kids' AND color = '$cream' OR category = 'Kids' AND
                color = '$green' OR category = 'Kids' AND color = '$grey' OR category = 'Kids' AND color = '$metallic' OR category = 'Kids' AND
                color = '$multi' OR category = 'Kids' AND color = '$nude' OR category = 'Kids' AND color = '$pink' OR category = 'Kids' AND color = '$purple'
                OR category = 'Kids' AND color = '$red' OR category = 'Kids' AND color = '$white' OR category = 'Kids' AND color = '$yellow'
                OR category = 'Kids' AND size = '$size'",
                "order" => "dateinserted DESC"
            ]
        );
        $this->session->set("ProductList",$find);
        $this->response->redirect("Kids/SearchResults?page=1");
    }
    public function SearchResultsAction()
    {
        $this->view->setVar("ProductListe",$this->session->get("ProductList"));
    }

}

