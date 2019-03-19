<?php
use Phalcon\Http\Request;

class MyfonctionsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
    //setting pid to the session from ajax
    public function PidSetterAction()
    {
        if($this->request->isPost())
        {
            if($this->request->isAjax())
            {
                $pid = $this->request->getPost("datapid");
                if($pid){
                    $this->session->set("productid",$pid);
                    $this->view->setVar("productid",$pid);
                }
            }
        }
    }

}

