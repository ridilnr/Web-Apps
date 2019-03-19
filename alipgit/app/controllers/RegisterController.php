<?php
use \Phalcon\Tag;

require_once __DIR__ . '/../../vendor/Swift/swift_required.php';

class RegisterController extends ControllerBase
{

    public function indexAction()
    {
        if($this->session->has("ClientID") && $this->session->has("userEmail") && $this->session->has("userName")){
            $this->flash->success("You are already logged in");
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
                $this->session->set("ClientID",$find->cid);
                $this->session->set("userEmail",$emailField);
                $this->session->set("userName", $find->cname);
                $this->flash->success("You are now connected");
                $this->response->redirect("Checkout");
            }else{
                $this->flash->error("Wrong email or password");
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
        $randId = "client".rand(1000, 999999);
        $existingId = Customers::findFirst("cid = '$randId'");
        $fullName = $this->request->getPost("fullName");
        $lastname = $this->request->getPost("lastname");
        $emailAddress = $this->request->getPost("emailAddress");
        $mobilePhone = $this->request->getPost("mobilePhone");
        $address = $this->request->getPost("address");
        $city = $this->request->getPost("city");
        $passwordField = $this->request->getPost("passwordField1");
        $currentDate = date("y-m-d");
        $existingEmail = Customers::findFirst("cemail = '$emailAddress'");
        if($existingId){
            goto setId;
        }
        if($existingEmail){
            $this->flash->message("string", 'your email exist already');
            $this->response->redirect("Register");
            return;
        }
        $Customer->cid = $randId;
        $Customer->cname = $fullName;
        $Customer->lastname = $lastname;
        $Customer->cemail = $emailAddress;
        $Customer->cphone = $mobilePhone;
        $Customer->address = $address;
        $Customer->city = $city;
        $Customer->password = $passwordField;
        $Customer->datecreated = $currentDate;
        $Customer->status = "active";
        if (!$Customer->save()) {
            foreach ($Customer->getMessages() as $message) {
                $this->flash->error($message);
            }
            $this->response->redirect("Register");

            return;
        }else{

            //Registration confirmation email
            $transporter = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                ->setUsername('technoparksystems@gmail.com')
                ->setPassword('Kktc000011#');

            $mailer = Swift_Mailer::newInstance($transporter);

            $message = Swift_Message::newInstance("ALIPGIT - New User Account")
                ->setFrom(array('technoparksystems@gmail.com' => 'Alipgit'))
                ->setTo( array($emailAddress => "") )
                ->setBody("
                <p class='text-justify'>
                Dear $fullName,<br>
                You have successfully created your Alipgit Account<br>
                Please login with your email address and password<br><br>
                Below are your information:<br>
                First Name: $fullName<br>
                Last Name: $lastname<br>
                Email Address: $emailAddress<br>
                Password: $passwordField<br><br>
                Home Adress: $address<br>
                City: $city<br><br>
                Please Note that this adress will be used to deliver any products you order from Alipgit<br>
                And you can use your email adress and password to connect from our website to check your order status<br><br>

                Thank you for chosing Alipgit
                </p>
                The Online Shopping Team.<br>
                info@alipgit.com<br>
                <a target='_blank' href='www.alipgit.com'>www.alipgit.com</a><br><br>
                Regards.",'text/html');
            $mailer->send($message);
            //End Email

            $this->flash->success("You have successfully registered");
            $this->response->redirect("Register");
        }
    }

    public function logoutAction()
    {

        $this->session->remove('userName');
        $this->session->remove('userEmail');
        $this->flash->success('You have been disconnected');
        $this->session->destroy(true);
        $this->response->redirect("Register");
    }
}
