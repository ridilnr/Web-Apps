<?php

class ProductDetailController extends ControllerBase
{

    public function indexAction()
    {
        $Product = Productdetails::find([
            'order' => 'pid'
        ]);
        $this->view->setVar('productList', $Product);
    }
}