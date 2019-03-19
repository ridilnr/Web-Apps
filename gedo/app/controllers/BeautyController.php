<?php

class BeautyController extends ControllerBase
{

    public function indexAction()
    {
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
                "category = 'Beauty' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by $price, pid
                limit $deb,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Beauty' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by pid"
            );
        }
        else{
            $womenProduct = Productdetails::find(
                "category = 'Beauty' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by $price, pid
                limit 0,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Beauty' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by pid"
            );
        }
        if(count($womenProduct)==0 && count($womenProduct2)==0 && $color=="%" && $size==">= 0" && $fit=="%"){
            $womenProduct = Productdetails::find(
                "category = 'Beauty'
                order by $price, pid
                limit 0,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Beauty'
                order by pid"
            );
            if($this->session->has("linker3")) {
                $deb = $this->session->get("linker3");
                $womenProduct = Productdetails::find(
                    "category = 'Beauty'
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
        $this->response->redirect("Beauty".$from);
    }
    public function set_colorAction()
    {
        if($this->request->isGet()){
            $color = $_GET['color'];
            $from = $_GET['from'];
            $this->session->set("color",$color);
            $this->response->redirect("Beauty".$from);
        }
    }
    public function set_fitAction()
    {
        if($this->request->isGet()){
            $fit = $_GET['fit'];
            $from = $_GET['from'];
            $this->session->set("color",$fit);
            $this->response->redirect("Beauty".$from);
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
            $this->response->redirect("Beauty".$from);
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
            $this->response->redirect("Beauty".$from);
        }
    }
    public function bodyAction()
    {
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
                "category = 'Beauty' AND
                subcat = 'Body' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by $price, pid
                limit $deb,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Body' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by pid"
            );
        }
        else{
            $womenProduct = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Body' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by $price, pid
                limit 0,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Body' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by pid"
            );
        }
        if(count($womenProduct)==0 && count($womenProduct2)==0 && $color=="%" && $size==">= 0" && $fit=="%"){
            $womenProduct = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Body'
                limit 0,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Body'
                order by pid"
            );
            if($this->session->has("linker3")) {
                $deb = $this->session->get("linker3");
                $womenProduct = Productdetails::find(
                    "category = 'Beauty' AND
                subcat = 'Body'
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
    public function giftsAction()
    {
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
                "category = 'Beauty' AND
                subcat = 'Gifts' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by $price, pid
                limit $deb,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Gifts' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by pid"
            );
        }
        else{
            $womenProduct = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Gifts' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by $price, pid
                limit 0,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Gifts' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by pid"
            );
        }
        if(count($womenProduct)==0 && count($womenProduct2)==0 && $color=="%" && $size==">= 0" && $fit=="%"){
            $womenProduct = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Gifts'
                order by $price, pid
                limit 0,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Gifts'
                order by pid"
            );
            if($this->session->has("linker3")) {
                $deb = $this->session->get("linker3");
                $womenProduct = Productdetails::find(
                    "category = 'Beauty' AND
                subcat = 'Gifts'
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
    public function makeupAction()
    {
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
                "category = 'Beauty' AND
                subcat = 'Makeup' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by $price, pid
                limit $deb,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Makeup' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by pid"
            );
        }
        else{
            $womenProduct = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Makeup' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by $price, pid
                limit 0,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Makeup' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by pid"
            );
        }
        if(count($womenProduct)==0 && count($womenProduct2)==0 && $color=="%" && $size==">= 0" && $fit=="%"){
            $womenProduct = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Makeup'
                order by $price, pid
                limit 0,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Makeup'
                order by pid"
            );
            if($this->session->has("linker3")) {
                $deb = $this->session->get("linker3");
                $womenProduct = Productdetails::find(
                    "category = 'Beauty' AND
                subcat = 'Makeup'
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
    public function nailsAction()
    {
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
                "category = 'Beauty' AND
                subcat = 'Nails' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by $price, pid
                limit $deb,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Nails' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by pid"
            );
        }
        else{
            $womenProduct = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Nails' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by $price, pid
                limit 0,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Nails' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by pid"
            );
        }
        if(count($womenProduct)==0 && count($womenProduct2)==0 && $color=="%" && $size==">= 0" && $fit=="%"){
            $womenProduct = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Nails'
                order by $price, pid
                limit 0,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Beauty' AND
                subcat = 'Nails'
                order by pid"
            );
            if($this->session->has("linker3")) {
                $deb = $this->session->get("linker3");
                $womenProduct = Productdetails::find(
                    "category = 'Beauty' AND
                subcat = 'Nails'
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
    public function skincareAction()
    {
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
                "category = 'Beauty' AND
                subcat = 'Skincare' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by $price, pid
                limit $deb,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Beauty' AND
                 subcat = 'Skincare' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by pid"
            );
        }
        else{
            $womenProduct = Productdetails::find(
                "category = 'Beauty' AND
                 subcat = 'Skincare' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by $price, pid
                limit 0,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Beauty' AND
                 subcat = 'Skincare' AND
                color LIKE '$color' AND
                size $size AND
                fit LIKE '$fit'
                order by pid"
            );
        }
        if(count($womenProduct)==0 && count($womenProduct2)==0 && $color=="%" && $size==">= 0" && $fit=="%"){
            $womenProduct = Productdetails::find(
                "category = 'Beauty' AND
                 subcat = 'Skincare'
                limit 0,12"
            );
            $womenProduct2 = Productdetails::find(
                "category = 'Beauty' AND
                 subcat = 'Skincare'
                order by pid"
            );
            if($this->session->has("linker3")) {
                $deb = $this->session->get("linker3");
                $womenProduct = Productdetails::find(
                    "category = 'Beauty' AND
                 subcat = 'Skincare'
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

}

