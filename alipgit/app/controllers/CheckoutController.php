<?php
use \Phalcon\Tag;
require_once __DIR__ . '/../../vendor/Swift/swift_required.php';

class CheckoutController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function checkoutAction()
    {
        if (!$this->request->isPost())
        {
            $this->response->redirect("Checkout");

            return;
        }
        else
        {
            $account = $this->request->getPost('accountValue');
            if($account == 'register')
            {
                $this->response->redirect('Register');
            }
            else
            {
                $this->response->redirect('Checkout');
            }
        }
    }
    //This function confirms the order with upon delivery payment
    public function confirm11Action()
    {
        if($this->request->isPost()){
            if($this->session->has("ClientID") && $this->session->has("userEmail") && $this->session->has("userName")){
                //data coming from javascript session
                $encodeCart = utf8_encode($_COOKIE["fakeCart"]);
                $cartArray = json_decode($encodeCart);
                $client = $this->session->get("ClientID");
                //display data to code format
                print_r($cartArray);
                $n = count($cartArray);
                //print($n);
                //exit;
                //Creating order ID;
                generate:
                $oy = date("y");
                $rand = mt_rand(22222,99999);
                $oid = $oy.$rand;
                $findMyorder = Myorders::findFirst("id = '$oid'");
                if($findMyorder){
                    goto generate;
                }
                $orderid = "OALG".date("Y").$oid;
                $quantite = 0;
                $prix = 0;
                $newmyorders = new Myorders();
                $newmyorders->id = $oid;
                $newmyorders->orderid = $orderid;
                $newmyorders->orderdata = date("Y-m-d");
                $newmyorders->status = "New";
                $newmyorders->customer = $client;
                if(count($cartArray)>=1){
                    for($i = 0; $i < $n; $i++){
                        gen:
                        $o = date("y");
                        $r = mt_rand(22222,99999);
                        $id1 = $o.$r;
                        $findOrders = Orders::findFirst("id = '$id1'");
                        if($findOrders){
                            goto gen;
                        }
                        $new1 = new Orders();
                        $new1->id = $id1;
                        $new1->orderid = $orderid;
                        $new1->productid = $cartArray[$i]->pid;
                        $new1->productname = $cartArray[$i]->name;
                        $new1->category = $cartArray[$i]->category;
                        $new1->subcat = $cartArray[$i]->subcat;
                        $new1->unitprice = $cartArray[$i]->price;
                        $new1->totalprice = $cartArray[$i]->priceTotal;
                        $prix = $prix + $cartArray[$i]->priceTotal;
                        $new1->image = $cartArray[$i]->image;
                        $new1->qty = $cartArray[$i]->qty;
                        $quantite =$quantite + $cartArray[$i]->qty;
                        $new1->psize = $cartArray[$i]->size;
                        $new1->pcolor = $cartArray[$i]->colour;
                        $new1->status = "New";
                        $new1->customer = $client;
                        $new1->dateorder = date("Y-m-d");
                        $new1->month = date("M");
                        $new1->year = date("Y");

                        if($new1->save())
                        {
                            //$this->flash->success("Product with ID ".$new1->productid." successfully saved");
                        }else{
                            foreach($new1->getMessages() as $er){
                                $this->flash->error($er);
                            }
                        }
                    }
                    $newmyorders->qty = $quantite;
                    $newmyorders->totalprice = $prix;
                    if($newmyorders->save()){
                        $customer = Customers::findFirst("cid = '$client'");
                        $customer->cname;
                        //Email Confirmation to customer
                                $transporter = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                                    ->setUsername('technoparksystems@gmail.com')
                                    ->setPassword('Kktc000011#');

                                $mailer = Swift_Mailer::newInstance($transporter);

                                $message = Swift_Message::newInstance("ALIPGIT - Order Confirmation")
                                    ->setFrom(array('technoparksystems@gmail.com' => 'Alipgit'))
                                    ->setTo( array($customer->cemail => "") )
                                    ->setBody("
                        <p class='text-justify'>
                        Dear $customer->cname;,<br>
                        Your order has been successfully received<br>
                        You have ordered $newmyorders->qty products<br><br>
                        Below are your information:<br>
                        Order ID: $newmyorders->orderid<br>
                        Number Of Products: $newmyorders->qty<br>
                        Please login with your email address and password<br><br>
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
                        $this->flash->success("Your order was successfully saved and your ".$newmyorders->qty." products will be delivered to you in maximum 72 hours. Thank you for chosing ALIPGIT");
                        $this->response->redirect("Checkout");
                    }else{
                        foreach($newmyorders->getMessages() as $err){
                            $this->flash->error($err);
                            $this->response->redirect("Checkout");
                        }
                    }
                }else{
                    $this->flash->error("We are unable to save your order, please try again later");
                    $this->response->redirect("Checkout");
                }
            }else{
                $this->flash->error("Please loggin to your account before ordering any products");
                $this->response->redirect("Checkout");
            }
        }
    }
}

