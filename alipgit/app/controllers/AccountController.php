<?php

class AccountController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $Product = Productdetails::find([
            'order' => 'pid'
        ]);
        $this->view->setVar('productList', $Product);
    }

    public function updateAction()
    {

    }

    public function deleteAction()
    {

    }
}

