<?php

class UpdateController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $emailAddress = $this->session->get('userEmail');
        $name = $this->session->get('userName');
        $findUser = Customers::findFirst("cemail = '$emailAddress' AND cname = '$name'");
        if($findUser)
        {
            $this->view->setVar('userName', $findUser->cname);
            $this->view->setVar('userEmail', $findUser->cemail);
            $this->view->setVar('userPhone', $findUser->cphone);
            $this->view->setVar('userAddress', $findUser->address);
            $this->view->setVar('userCity', $findUser->city);
            $this->view->setVar('userPassword', $findUser->password);
        }
        else
        {
            $this->view->setVar('userName', '');
            $this->view->setVar('userEmail', '');
            $this->view->setVar('userPhone', '');
            $this->view->setVar('userAddress', '');
            $this->view->setVar('userCity', '');
            $this->view->setVar('userPassword', '');
        }
    }

    public function updateAction()
    {
        $emailAddress = $this->session->get('userEmail');
        $name = $this->session->get('userName');
        $updateCustomer = Customers::findFirst("cemail = '$emailAddress' AND cname = '$name'");
        if($updateCustomer)
        {
            if (!$this->request->isPost())
            {
                $this->response->redirect("Register");
                return;
            }
            else
            {
                //get new information from the form
                $fullName = $this->request->getPost("fullName");
                $emailAddress = $this->request->getPost("emailAddress");
                $mobilePhone = $this->request->getPost("mobilePhone");
                $address = $this->request->getPost("address");
                $city = $this->request->getPost("city");
                $passwordField = $this->request->getPost("passwordField1");
                //update new information in DBMS
                $updateCustomer->cname = $fullName;
                $updateCustomer->cemail = $emailAddress;
                $updateCustomer->cphone = $mobilePhone;
                $updateCustomer->address = $address;
                $updateCustomer->city = $city;
                $updateCustomer->password = $passwordField;
                if (!$updateCustomer->update())
                {
                    foreach ($updateCustomer->getMessages() as $message)
                    {
                        $this->flash->error($message);
                    }
                    $this->response->redirect("Update");
                    return;
                }
                else
                {
                    $this->session->set("userEmail",$emailAddress);
                    $this->session->set("userName", $fullName);
                    $this->flash->success("MODIFICATION TERMINEE");
                    $this->response->redirect("Update");
                }
            }
        }
    }

    public function deleteAction()
    {
        $emailAddress = $this->session->get('userEmail');
        $name = $this->session->get('userName');
        $deleteCustomer = Customers::findFirst("cemail = '$emailAddress' AND cname = '$name'");
        if($deleteCustomer)
        {
            if (!$this->request->isPost())
            {
                $this->response->redirect("Update");
                return;
            }
            else
            {
                //change status in DBMS
                $deleteCustomer->status = "inactive";
                if (!$deleteCustomer->update())
                {
                    foreach ($deleteCustomer->getMessages() as $message)
                    {
                        $this->flash->error($message);
                    }
                    $this->response->redirect("Update");
                    return;
                }
                else
                {
                    $this->session->remove('userEmail');
                    $this->session->remove('userName');
                    $this->flash->success("COMPTE SUPRIME AVEC SUCCES");
                    $this->response->redirect("Register");
                }
            }
        }
    }
}

