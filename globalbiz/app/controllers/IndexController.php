<?php

class IndexController extends ControllerBase
{
    public function indexAction()
    {

    }
    public function ApplyAction()
    {
        if($this->request->isPost()){
            if($this->request->getUploadedFiles() == true){
                $fname = $this->request->getPost("fname");
                $lname = $this->request->getPost("lname");
                $email = $this->request->getPost("email");
                $tel = $this->request->getPost("tel");
                $country = $this->request->getPost("country");
                $univ = $this->request->getPost("univ");
                $program = $this->request->getPost("program");
                $degree = $this->request->getPost("degree");
                $father = $this->request->getPost("father");
                $mother = $this->request->getPost("mother");
                $codeagent = $this->request->getPost("codeagent");
                $comments = $this->request->getPost("comments");
                $address = $this->request->getPost("address");
                loop:
                $var = mt_rand(2222222,7777777);
                $y = date("y");
                $id = $y.$var;
                $find1 = Candidate::findFirst("id = '$id'");
                if($find1){
                    goto loop;
                }
                $new = new Candidate();
                $new->id = $id;
                $new->program = $program;
                $new->adress = $address;
                $new->fname = $fname;
                $new->lname = $lname;
                $new->tel = $tel;
                $new->email = $email;
                $new->country = $country;
                $new->university = $univ;
                $new->degree = $degree;
                $new->fathername = $father;
                $new->mothname = $mother;
                $new->codeagent = $codeagent;
                $new->ccomments = $comments;
                $new->dateapplication = date("Y-m-d");
                $new->status = "New";
                //Verification code sub agent
                $findagent = Subagents::findFirst("codeagent = '$codeagent'");
                if($codeagent == "" || $findagent){
                    if($new->save()){
                        $i = 0;
                        foreach($this->request->getUploadedFiles() as $fl)
                        {
                            $i++;
                            generate:
                            $n = mt_rand(1111111,9999999);
                            $y = date("y");
                            $idd = $y.$n;
                            $find1 = Documents::findFirst("id = '$idd'");
                            if($find1)
                                goto generate;
                            $file[$i] = 'documents/'.md5(uniqid(rand(),true)).'-'.strtolower($fl->getName());
                            $names[$i] = $fl->getName();
                            $types[$i] = $fl->getType();
                            $sizes[$i] = $fl->getSize();
                            if($types[$i] == "application/pdf" ||$types[$i] == "image/jpg" || $types[$i] == "image/png" || $types[$i] == "image/jpeg")
                            {
                                $fl->moveTo($file[$i]);
                                $doc = new Documents();
                                $doc->id = $idd;
                                $doc->candidateid = $id;
                                $doc->name = $names[$i];
                                $doc->link = $file[$i];
                                if($doc->save()){

                                }else{
                                    foreach($doc->getMessages() as $err){
                                        $this->flash->error($err);
                                        $this->response->redirect("Index");
                                    }
                                }
                            }
                        }
                        $this->flash->success("You application was successfully received");
                        $this->response->redirect("Index");
                    }else{
                        foreach($new->getMessages() as $err1){
                            $this->flash->success($err1);
                            $this->response->redirect("Index");
                        }
                    }
                }else{
                    $this->flash->error("Please make sure your Sub Agent Code is Correct");
                    $this->response->redirect("Index");
                }
                //echo "<h2>Succes</h2></br>";
            }else{
                $this->flash->error("Academic documents are required");
                $this->response->redirect("Index");

            }
        }
    }
    public function LoginAction()
    {
        if($this->request->isPost()){
            $email = $this->request->getPost("email");
            $pass = $this->request->getPost("pass");
            $find = Admin::findFirst("email = '$email' AND pass = '$pass'");
            if($find){
                $this->session->set("email",$email);
                $this->session->set("kingname", $find->fname."-".$find->lname);
                $this->response->redirect("Admin");
            }else{
                $this->flash->error("Wrong email or password");
                $this->response->redirect("index");
            }
        }
    }

    public function set_drop_downAction()
    {
        if($this->request->isGet()){
            $country = $_GET['Country'];
            $univ = Univ::find("country = '$country'");
            echo '<option>------------------------------------ Select University ------------------------------------</option>';
            foreach($univ as $temp)
                echo"<option value = '".$temp->univ."'>".$temp->univ."</option>";
        }
    }
}

