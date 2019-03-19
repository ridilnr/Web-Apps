<?php

class WomenController extends ControllerBase
{
    public function indexAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Women'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Women'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Women'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function DressesAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Women' AND subcat = 'dresses'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Women' AND subcat = 'dresses'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Women' AND subcat = 'dresses'",
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
            $this->response->redirect("Women".$from);
        }
    }
    //End
    public function jacketsAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Women' AND subcat = 'Jackets & Coats'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Women' AND subcat = 'Jackets & Coats'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Women' AND subcat = 'Jackets & Coats'",
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
                        "category = 'Women' AND subcat = 'Jeans'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Women' AND subcat = 'Jeans'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Women' AND subcat = 'Jeans'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function knitwearAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Women' AND subcat = 'Knitwear'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Women' AND subcat = 'Knitwear'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Women' AND subcat = 'Knitwear'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function lingerieAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Women' AND subcat = 'Lingerie'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Women' AND subcat = 'Lingerie'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Women' AND subcat = 'Lingerie'",
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
                        "category = 'Women' AND subcat = 'Nightwear'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Women' AND subcat = 'Nightwear'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Women' AND subcat = 'Nightwear'",
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
                        "category = 'Women' AND subcat = 'Shorts & Skirts'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Women' AND subcat = 'Shorts & Skirts'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Women' AND subcat = 'Shorts & Skirts'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    public function topsAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Women' AND subcat = 'Tops'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Women' AND subcat = 'Tops'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Women' AND subcat = 'Tops'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }    }
    public function trousersAction()
    {
        if($this->session->has("price")){
            $price = $this->session->get("price");
            if($price == 'l'){
                $find = Productdetails::find([
                        "category = 'Women' AND subcat = 'Trousers & Jumpsuits'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Women' AND subcat = 'Trousers & Jumpsuits'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Women' AND subcat = 'Trousers & Jumpsuits'",
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
                        "category = 'Women' AND subcat = 'Shoes'",
                        "order" => "price ASC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }else{
                $find = Productdetails::find([
                        "category = 'Women' AND subcat = 'Shoes'",
                        "order" => "price DESC"
                    ]
                );
                $this->view->setVar("ProductListe",$find);
            }

        }else{
            $find = Productdetails::find([
                    "category = 'Women' AND subcat = 'Shoes'",
                    "order" => "dateinserted DESC"
                ]
            );
            $this->view->setVar("ProductListe",$find);
        }
    }
    //Women search clothes function
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
        $s32 = $this->request->getPost("s32");
        $s34 = $this->request->getPost("s34");
        $s36 = $this->request->getPost("s36");
        $s38 = $this->request->getPost("s38");
        $s40 = $this->request->getPost("s40");
        $s42 = $this->request->getPost("s42");
        $s44 = $this->request->getPost("s44");
        $s46 = $this->request->getPost("s46");

        $s35 = $this->request->getPost("s35");
        $s355 = $this->request->getPost("s355");
        $s365 = $this->request->getPost("s365");
        $s37 = $this->request->getPost("s37");
        $s375 = $this->request->getPost("s375");
        $s385 = $this->request->getPost("s385");
        $s39 = $this->request->getPost("s39");
        $s405 = $this->request->getPost("s405");
        $s41 = $this->request->getPost("s41");
        $s425 = $this->request->getPost("s425");
        $s43 = $this->request->getPost("s43");
        $s445 = $this->request->getPost("s445");

        $brand = $this->request->getPost("brand");
        $subcat = $this->request->getPost("subcat");
        $find = Productdetails::find([
                "category = 'Women' AND subcat = '$subcat' OR category = 'Women' AND brand = '$brand' OR category = 'Women' AND color = '$black'
                OR category = 'Women' AND color = '$blue' OR category = 'Women' AND color = '$brown' OR category = 'Women' AND color = '$camel'
                OR category = 'Women' AND color = '$cream' OR category = 'Women' AND
                color = '$green' OR category = 'Women' AND color = '$grey' OR category = 'Women' AND color = '$metallic' OR category = 'Women' AND
                color = '$multi' OR category = 'Women' AND color = '$nude' OR category = 'Women' AND color = '$pink' OR category = 'Women' AND color = '$purple'
                OR category = 'Women' AND color = '$red' OR category = 'Women' AND color = '$white' OR category = 'Women' AND color = '$yellow'
                OR category = 'Women' AND size = '$s32' OR category = 'Women' AND size = '$s34' OR category = 'Women' AND size = '$s36' OR
                category = 'Women' AND size = '$s38' OR category = 'Women' AND size = '$s40' OR category = 'Women' AND size = '$s42' OR
                category = 'Women' AND size = '$s44' OR category = 'Women' AND size = '$s46'
                OR category = 'Women' AND size = '$xxs' OR category = 'Women' AND size = '$xs' OR category = 'Women' AND size = '$s' OR
                category = 'Women' AND size = '$m' OR category = 'Women' AND size = '$l' OR category = 'Women' AND size = '$xl' OR category = 'Women'
                AND size = '$xxl' 
                OR category = 'Women' AND size = '$xxxl'
                OR category = 'Women' AND size = '$s35'
                OR category = 'Women' AND size = '$s355'
                OR category = 'Women' AND size = '$s365'
                OR category = 'Women' AND size = '$s37'
                OR category = 'Women' AND size = '$s375'
                OR category = 'Women' AND size = '$s385'
                OR category = 'Women' AND size = '$s39'
                OR category = 'Women' AND size = '$s405'
                OR category = 'Women' AND size = '$s41'
                OR category = 'Women' AND size = '$s425'
                OR category = 'Women' AND size = '$s43'
                OR category = 'Women' AND size = '$s445'
                ",
                "order" => "dateinserted DESC"
            ]
        );
        $this->session->set("ProductList",$find);
        $this->response->redirect("Women/SearchResults?page=1");
    }
    public function ShoesSearchAction()
    {

    }
    //Women search result
    public function SearchResultsAction()
    {
        $this->view->setVar("ProductListe",$this->session->get("ProductList"));
    }
}

