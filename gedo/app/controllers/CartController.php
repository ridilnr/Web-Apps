<?php

class CartController extends ControllerBase
{

    public function indexAction()
    {
        $Product = Productdetails::find([
            'order' => 'pid'
        ]);
        $this->view->setVar('productList', $Product);
    }
}

