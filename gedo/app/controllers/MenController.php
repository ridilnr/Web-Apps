<?php

class MenController extends ControllerBase
{

    public function indexAction()
    {
        //$this->session->destroy();
        if($this->session->has("color")){
            $color = $this->session->get("color");
        }else
            $color = "%";
            //$this->session->remove("color");
        if($this->session->has("price")){
            $price = $this->session->get("price");
        }else
            $price = "price";
            //$this->session->remove("price");
        /*if($this->session->has("size")){
            $size = $this->session->get("size");
        }else
            $size = ">= 44";*/
        if($this->session->has("linker3")) {
            $deb = $this->session->get("linker3");
            $womenProduct = Productdetails::find(
                "category = 'Homme' AND
                color LIKE '$color'
                order by $price, pid
                limit $deb,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Homme' AND
                color LIKE '$color'
                order by pid"
            );
        }
        else{
            $womenProduct = Productdetails::find(
                "category = 'Homme' AND
                color LIKE '$color'
                order by $price, pid
                limit 0,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Homme' AND
                color LIKE '$color'
                order by pid"
            );
        }
        if(count($womenProduct)==0 && count($womenProduct2)==0 && $color == "%"/*$size == ">= 0"*/){
            $womenProduct = Productdetails::find(
                "category = 'Homme'
                order by $price, pid
                limit 0,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Homme'
                order by pid"
            );
            if($this->session->has("linker3")) {
                $deb = $this->session->get("linker3");
                $womenProduct = Productdetails::find(
                    "category = 'Homme'
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
    public function linker3Action($lien){
        $deb = ($lien-1)*12;
        $this->session->set("linker3",$deb);
        if($this->request->isGet())
            $from = $_GET['from'];
        $this->response->redirect("Men".$from);
    }
    public function set_colorAction()
    {
        if($this->request->isGet()){
            $color = $_GET['color'];
            $from = $_GET['from'];
            $this->session->set("color",$color);
            $this->response->redirect("Men".$from);
        }
    }
    /*public function set_fitAction()
    {
        if($this->request->isGet()){
            $fit = $_GET['fit'];
            $from = $_GET['from'];
            $this->session->set("color",$fit);
            $this->response->redirect("Men".$from);
        }
    }*/
    public function set_priceAction()
    {
        if($this->request->isGet()){
            $price = $_GET['price'];
            if($price == "H-L")
                $price = "price DESC";
            else
                $price = "price";
            $from = $_GET['from'];
            $this->session->set("price",$price);
            $this->response->redirect("Men".$from);
        }
    }
    public function set_sizeAction()
    {
        if($this->request->isGet()){
            $size = $_GET['size'];
            /*if($size == "Small")
                $size = "BETWEEN 0 AND 19";
            elseif($size == "Medium")
                $size = "BETWEEN 20 AND 29";
            elseif($size == "Large")
                $size = "> 29";
            else
                $size = ">= 0";*/
            $size = ">= $size";
            $from = $_GET['from'];
            $this->session->set("size",$size);
            $this->response->redirect("Men".$from);
        }
    }
}