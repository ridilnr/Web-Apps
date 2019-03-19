<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $womenProduct = Productdetails::find([
            "style = 'everybody'",
            'order' => 'pid',
        ]);
        $this->view->setVar('productInfo', $womenProduct);
        $Product = Productdetails::find([
            'order' => 'pid'
        ]);
        $this->view->setVar('productList', $Product);
        //
        $this->session->remove("color");
        $this->session->remove("size");
        $this->session->remove("fit");
        $this->session->remove("price");
        $this->session->remove("subcat");
        $this->session->remove("sizesoutiengorge");
    }
    public function searchAction()
    {
        if($this->session->has("search")){
            $search = $this->session->get("search");
        }else
            $search = "%";
        if($this->session->has("linker3")) {
            $deb = $this->session->get("linker3");
            $womenProduct = Productdetails::find(
                "productname LIKE '%$search%'
                limit $deb,12"
            );
            $womenProduct2 = Productdetails::find(
                "productname LIKE '%$search%'
                order by pid"
            );
        }
        else{
            $womenProduct = Productdetails::find(
                "productname LIKE '%$search%'
                limit 0,12"
            );
            $womenProduct2 = Productdetails::find(
                "productname LIKE '%$search%'
                order by pid"
            );
        }
        $this->view->setVar('productInfo', $womenProduct);
        $this->view->setVar('productInfo2', $womenProduct2);
    }

    public function linker3Action($lien){
        $deb = ($lien-1)*12;
        $this->session->set("linker3",$deb);
        $this->response->redirect("index/search");
    }
    public function set_searchAction()
    {
        if($this->request->isPost()){
            $search = $_POST['search'];
            $this->session->set("search",$search);
            $this->response->redirect("index/search");
        }
    }

    public function newsAction()
    {

        $d = strtotime("-2 Months");
        $d2 = date("Y-m-d", $d);
        $d1 = date("Y-m-d");
        $dt = "BETWEEN ".$d2." AND ".$d1;
        if($this->session->has("color")){
            $color = $this->session->get("color");
        }else
            $color = "%";
        if($this->session->has("fit")){
            $fit = $this->session->get("fit");
        }else
            $fit = "%";
        if($this->session->has("price")){
            $price = $this->session->get("price");
        }else
            $price = "price";
        if($this->session->has("size")){
            $size = $this->session->get("size");
        }else
            $size = ">= 0";
        if($this->session->has("linker3")) {
            $deb = $this->session->get("linker3");
            $womenProduct = Productdetails::find(
                "dateinserted $dt  AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by $price, pid
                limit $deb,12"
            );
            $womenProduct2 = Productdetails::find(
                "dateinserted $dt AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by pid"
            );
        }
        else{
            $womenProduct = Productdetails::find(
                "dateinserted $dt AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by $price, pid
                limit 0,12"
            );
            $womenProduct2 = Productdetails::find(
                "dateinserted $dt AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by pid"
            );
        }
        if(count($womenProduct)==0 && count($womenProduct2)==0 && $color=="%" && $size==">= 0" && $fit=="%"){
            $womenProduct = Productdetails::find(
                "dateinserted $dt
                order by $price, pid
                limit 0,12"
            );
            $womenProduct2 = Productdetails::find(
                "dateinserted $dt
                order by pid"
            );
            if($this->session->has("linker3")) {
                $deb = $this->session->get("linker3");
                $womenProduct = Productdetails::find(
                    "dateinserted $dt
                order by $price, pid
                limit $deb,12"
                );}
        }
        $this->view->setVar('productInfo', $womenProduct);
        $this->view->setVar('productInfo2', $womenProduct2);
        $Product = Productdetails::find([
            'order' => 'pid'
        ]);
        $this->view->setVar('productList', $Product);
    }

    public function linker4Action($lien){
        $deb = ($lien-1)*12;
        $this->session->set("linker3",$deb);
        if($this->request->isGet())
            $from = $_GET['from'];
        $this->response->redirect("index".$from);
    }
    public function set_colorAction()
    {
        if($this->request->isGet()){
            $color = $_GET['color'];
            $from = $_GET['from'];
            $this->session->set("color",$color);
            $this->response->redirect("index".$from);
        }
    }
    public function set_fitAction()
    {
        if($this->request->isGet()){
            $fit = $_GET['fit'];
            $from = $_GET['from'];
            $this->session->set("color",$fit);
            $this->response->redirect("index".$from);
        }
    }
    public function set_priceAction()
    {
        if($this->request->isGet()){
            $price = $_GET['price'];
            if($price == "H-L")
                $price = "price DESC";
            else
                $price = "price";
            $from = $_GET['from'];
            $this->session->set("color",$price);
            $this->response->redirect("index".$from);
        }
    }
    public function set_sizeAction()
    {
        if($this->request->isGet()){
            $size = $_GET['size'];
            if($size == "Small")
                $size = "BETWEEN 0 AND 19";
            elseif($size == "Medium")
                $size = "BETWEEN 20 AND 29";
            elseif($size == "Large")
                $size = "> 29";
            else
                $size = ">= 0";
            $from = $_GET['from'];
            $this->session->set("color",$size);
            $this->response->redirect("index".$from);
        }
    }
    public function DestroyAction()
    {
        $this->session->destroy();
        $this->response->redirect("Index");
    }
}

