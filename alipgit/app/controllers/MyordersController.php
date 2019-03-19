<?php

class MyordersController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        if($this->session->has("userEmail") && $this->session->has("userName"))
        {

        }else{
            $this->flash->error("Your do not have access to the requested area");
            $this->response->redirect("Register");
        }
    }

}

