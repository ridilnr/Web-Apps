<?php

class DestroysessionController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->session->destroy();
        $this->response->redirect("Index");
    }

}

