<?php

class RegisterController extends ControllerBase
{

    public function indexAction()
    {
        if($this->session->has("IDClient") && $this->session->has("userEmail") && $this->session->has("userName")){
            $this->flash->success("VOUS ETES DEJA CONNECTE");
            $this->response->redirect("Checkout");
        }
    }

    public function loginAction()
    {
        if($this->request->isPost()){
            $emailField = $this->request->getPost("userEmail");
            $passwordField = $this->request->getPost("passwordField2");
            $find = Customers::findFirst("cemail = '$emailField' AND password = '$passwordField'");
            if($find and ($find->status === 'active')){
                $this->session->set("IDClient",$find->cid);
                $this->session->set("userEmail",$emailField);
                $this->session->set("userName", $find->cname);
                $this->flash->success("VOUS ETES CONNECTE");
                $this->response->redirect("Checkout");
            }else{
                $this->flash->error("EMAIL OU MOT DE PASSE INCORRECT");
                $this->response->redirect("Register");
            }
        }
    }

    public function signAction()
    {
        if (!$this->request->isPost()) {
            $this->response->redirect("Register");

            return;
        }

        $Customer = new Customers();
        setId:
        $randId = "CLGD".rand(1000, 999999);
        $existingId = Customers::findFirst("cid = '$randId'");
        $fullName = $this->request->getPost("fullName");
        $emailAddress = $this->request->getPost("emailAddress");
        $mobilePhone = $this->request->getPost("mobilePhone");
        $address = $this->request->getPost("address");
        $country = $this->request->getPost("country");
        $city = $this->request->getPost("city");
        $passwordField = $this->request->getPost("passwordField1");
        $currentDate = date("y-m-d");
        $existingEmail = Customers::findFirst("cemail = '$emailAddress'");
        if($existingId){
            goto setId;
        }
        if($existingEmail){
            $this->flash->error("CETTE ADRESSE EMAIL EXISTE DEJA, VEUILLEZ VOUS CONNECTER OU CREER UN NOUVEAU COMPTE");
            $this->response->redirect("Register");
            return;
        }
        $Customer->cid = $randId;
        $Customer->cname = $fullName;
        $Customer->cemail = $emailAddress;
        $Customer->cphone = $mobilePhone;
        $Customer->address = $address;
        $Customer->country = $country;
        $Customer->city = $city;
        $Customer->password = $passwordField;
        $Customer->datecreated = $currentDate;
        $Customer->status = "active";
        if (!$Customer->save()) {
            foreach ($Customer->getMessages() as $message) {
                $this->flash->error($message);
                $this->response->redirect("Register");
            }
        }else{
            $this->flash->success("COMPTE CREE AVEC SUCCESS, VEUILLEZ VOUS CONNECTER POUR COMMANDER");
            $this->response->redirect("Register");
        }
    }

    public function logoutAction()
    {
        $this->session->remove('userName');
        $this->session->remove('userEmail');
        $this->flash->success('You have been disconnected');
        $this->session->destroy();
        $this->response->redirect("Register");
    }
}
