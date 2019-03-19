<?php

class ProductDetailController extends ControllerBase
{

    public function indexAction()
    {
        $pid = $this->session->get("productid");
        $this->view->setVar("productid",$this->session->get("productid"));
        $lire = Productdetails::findFirst("pid = '$pid'");
        //Product info

        //Displaying other photos
        $otherimages = Productimages::find([
            "pid = '$pid'",
            "order" => "id",
            "limit = 4"
        ]);
        $i = 0;
        $image[] = 0;
        if(count($otherimages) > 0)
        {
            foreach($otherimages as $img)
            {
               $image[$i] = $img->image;
                $i++;
            }
        }
        $photo1 = $lire->image;//$image[0];
        $photo2 = $image[0];
        $photo3 = $image[1];
        $photo4 = $image[2];
        $this->view->setVar("photo1",$photo1);
        if(!$photo2)
            $this->view->setVar("photo2",$photo1);
        else
            $this->view->setVar("photo2",$photo2);

        if(!$photo3)
            $this->view->setVar("photo3",$photo1);
        else
            $this->view->setVar("photo3",$photo3);

        if(!$photo4)
            $this->view->setVar("photo4",$photo1);
        else
            $this->view->setVar("photo4",$photo4);

        
        $this->view->setVar("size",$lire->size);
        $this->view->setVar("color",$lire->color);
        $this->view->setVar("description",$lire->description);

    }
    public function SetterPIDAction($pid)
    {
        if($pid){
            $this->session->set("productid",$pid);
            $this->response->redirect("ProductDetail");
        }else{
            $this->session->remove("productid");
            $this->response->redirect("ProductDetail");
        }
    }

}