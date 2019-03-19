<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        if($this->request->isPost()){
            $username = $this->request->getPost("username");
            $password = $this->request->getPost("password");
            #$this->flash->notice($password);
            $restaurant = Adminrestaurant::findFirst("username = '$username' ");
            if ($restaurant) {
                if ($this->security->checkHash($password, $restaurant->password)) {
                    if($restaurant->status === 'active'){
                        $this->session->set("restaurantId",$restaurant->idresto);
                        $this->session->set("restaurantAddress",$restaurant->address);
                        $this->session->set("restaurantEmail",$restaurant->email);
                        $this->session->set("restaurantName",$restaurant->restauname);
                        $this->session->set("restaurantPhoto",$restaurant->photo);
                        $this->session->set("username", $restaurant->username);
                        $this->session->set("statusRestaurant", $restaurant->connectivity);
                        $restaurant->connectivity = "online";
                        //
                        if($restaurant->update())
                            $this->flash->success("You are now connected and your restaurant is now visible to all users of foodapp");
                        else
                            $this->flash->success("Your restaurant is not visible to all user of foodapp. Please contact Admin ! ");
                        //
                        $this->response->redirect("Dashboard");
                    }else{
                        $this->flash->error("Wrong email or password");
                        $this->response->redirect("Index");
                    }
                }
            } else {
                $this->security->hash(rand());
                $this->flash->error("Wrong email or password");
                $this->response->redirect("Index");
            }
        }
    }

    public function logoutAction()
    {
        $this->session->destroy();
        $this->flash->success("You have been disconnected");
        $this->response->redirect("Index");
    }
}

