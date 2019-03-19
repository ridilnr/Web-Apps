<?php

class CheckoutController extends ControllerBase
{

    public function indexAction()
    {

    }
    //La fonction qui sauvegarde les données commandées en ligne
    public function confirm11Action(){
        if($this->request->isPost()){
            if($this->session->has("IDClient") && $this->session->has("userEmail") && $this->session->has("userName")){
                //Données venant de la session javascript
                $encodeCart = utf8_encode($_COOKIE["fakeCart"]);
                $cartArray = json_decode($encodeCart);
                //Afficher les données vdnant de la session au format code
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
                $orderid = "OG".date("Y").$oid;
                $quantite = 0;
                $prix = 0;
                $newmyorders = new Myorders();
                $newmyorders->id = $oid;
                $newmyorders->orderid = $orderid;
                $newmyorders->orderdata = date("Y-m-d");
                $newmyorders->status = "EN ATTENTE";
                $newmyorders->customer = $this->session->get("IDClient");
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
                        $new1->pid = $cartArray[$i]->pid;
                        $new1->category = $cartArray[$i]->category;
                        $new1->subcat = $cartArray[$i]->subcat;
                        $new1->unitprice = $cartArray[$i]->price;
                        $new1->totalprice = $cartArray[$i]->priceTotal;
                        $prix = $prix + $cartArray[$i]->priceTotal;
                        $new1->image = $cartArray[$i]->image;
                        $new1->qty = $cartArray[$i]->qty;
                        $quantite =$quantite + $cartArray[$i]->qty;
                        $new1->size = $cartArray[$i]->size;
                        $new1->status = "EN ATTENTE";
                        $new1->customer = $this->session->get("IDClient");
                        $new1->dateorder = date("Y-m-d");
                        $new1->month = date("M");
                        $new1->year = date("Y");
                        if($new1->save())
                        {
                            $this->flash->success("PRODUIT AVEC ID ".$new1->pid." SAUVEGARDE AVEC SUCCES");
                        }else{
                            foreach($new1->getMessages() as $er){
                                $this->flash->error($er);
                            }
                        }
                    }
                    $newmyorders->qty = $quantite;
                    $newmyorders->totalprice = $prix;
                    if($newmyorders->save())
                    {
                        $this->flash->success("VOTRE COMMANDE A ETE ENREGISTREE AVEC SUCCES ET VOS ".$newmyorders->qty." PRODUITS SERONT LIVRES A DOMICILE DANS DEUX SEMAINES MAXIMUM. MERCI D'AVOIR CHOISI GEDO COLLECION");
                        $this->response->redirect("Checkout");
                    }else{
                        foreach($newmyorders->getMessages() as $err){
                            $this->flash->error($err);
                            $this->response->redirect("Checkout");
                        }
                    }
                }else{
                    $this->flash->error("IMPOSSIBLE DE SAUVEGARDER VOTRE COMMANDE MAINTENANT, VEUILLEZ REESSAYER PLUS TARD");
                    $this->response->redirect("Checkout");
                }
            }else{
                $this->flash->error("VEUILLEZ VOUS CONNECTER AVANT DE CONFIRMER VOTRE COMMANDE, MERCI");
                $this->response->redirect("Checkout");
            }
        }
    }
}