<?php
class AdminController extends ControllerBase
{

    public function indexAction()
    {
        if(!$this->session->has("email") && !$this->session->has("kingname")){
            $this->response->redirect("index");
        }
    }
    public function ApplicantsAction()
    {
        if(!$this->session->has("email") && !$this->session->has("kingname")){
            $this->response->redirect("index");
        }
        if($this->session->has("candidateid")){
            $id = $this->session->get("candidateid");
            $find = Candidate::findFirst("id = '$id'");
            if($find){
                $this->view->setVar("candidateid",$find->id);
                $this->view->setVar("candidateFname",$find->fname);
                $this->view->setVar("candidateLname",$find->lname);
                $this->view->setVar("candidateEmail",$find->email);
                $this->view->setVar("candidateTel",$find->tel);
                $this->view->setVar("candidateCountry",$find->country);
                $this->view->setVar("candidateUniv",$find->university);
                $this->view->setVar("candidateProgram",$find->program);
                $this->view->setVar("candidateCcomments",$find->ccomments);
                $this->view->setVar("candidateAdress",$find->adress);
                $this->view->setVar("candidateFatherNm",$find->fathername);
                $this->view->setVar("candidateMotherNm",$find->mothname);
                $this->view->setVar("candidateDegree",$find->degree);
                $this->view->setVar("candidateDateApp",$find->dateapplication);
                $this->view->setVar("candidateStatus",$find->status);
                $this->view->setVar("candidateAcomments",$find->acomments);
                $this->view->setVar("candidateCodeAgent",$find->codeagent);
                $find2 = Subagents::findFirst("codeagent = '$find->codeagent'");
                if($find2){
                    $this->view->setVar("agent",$find2->fname."-".$find2->lname." ,".$find2->email);
                }else{
                    $this->view->setVar("agent","");
                }
            }else{
                $this->session->remove("candidateid");
            }
        }
    }
    //Functions for management
    public function OtherAction()
    {

    }
    //Create a new country
    public function CreateCountryAction()
    {
        if(!$this->session->has("email") && !$this->session->has("kingname")){
            $this->response->redirect("index");
        }
        if($this->request->isPost()){
            $country = $this->request->getPost("country");
            $find = Country::findFirst("country = '$country'");
            if($find){
                $this->flash->error("This country already exist");
                $this->response->redirect("Admin/Other");
            }else{
                $new = new Country();
                loop:
                $var = mt_rand(1111111,8888888);
                $y = date("y");
                $id = $var.$y;
                $find1 = Country::findFirst("id = '$id'");
                if($find1){
                    goto loop;
                }
                $new->id = $id;
                $new->country = $country;
                if($new->save()){
                    $this->flash->success("Country ".$country." successfully created");
                    $this->response->redirect("Admin/Other");
                }else{
                    foreach($new->getMessages() as $err){
                        $this->flash->error($err);
                        $this->response->redirect("Admin/Other");
                    }
                }
            }
        }
    }
    //Create a university under a country
    public function CreateUnivAction()
    {
        if(!$this->session->has("email") && !$this->session->has("kingname")){
            $this->response->redirect("index");
        }
        if($this->request->isPost()){
            $country = $this->request->getPost("country");
            $univ = $this->request->getPost("univ");
            $website = $this->request->getPost("website");
            $address = $this->request->getPost("address");
            $description = $this->request->getPost("description");
            $find = Univ::findFirst("univ = '$univ' AND country = '$country'");
            if($find){
                $this->flash->error($univ." already exist under the country ".$country);
                $this->response->redirect("Admin/Other");
            }else{
                loop:
                $var = mt_rand(1111111,8888888);
                $y = date("y");
                $id = $var.$y;
                $find1 = Univ::findFirst("id = '$id'");
                if($find1){
                    goto loop;
                }
                $new = new Univ();
                $new->id = $id;
                $new->country = $country;
                $new->univ = $univ;
                $new->website = $website;
                $new->address = $address;
                $new->description = $description;
                if($new->save()){
                    $this->flash->success($univ." successfully created under the country ".$country);
                    $this->response->redirect("Admin/Other");
                }else{
                    foreach($new->getMessages() as $err){
                        $this->flash->error($err);
                        $this->response->redirect("Admin/Other");
                    }
                }
            }
        }
    }

    //creation of sub agent
    public function CreateSubAgentAction(){
        if(!$this->session->has("email") && !$this->session->has("kingname")){
            $this->response->redirect("index");
        }
        if($this->request->isPost()){
            $fname = $this->request->getPost("firstname");
            $lname = $this->request->getPost("lastname");
            $email = $this->request->getPost("email");
            $pass = $this->request->getPost("pass");
            $country = $this->request->getPost("country");

            $find2 = Subagents::findFirst("email = '$email'");
            if($find2){
                $this->flash->error("This email already exist");
                $this->response->redirect("Admin/Other");
            }
            else{
                loop:
                $var = mt_rand(1111111,9999999);
                $y = date("y");
                $id = $y.$var;
                $find1 = Subagents::findFirst("codeagent = '$id'");
                if($find1){
                    goto loop;
                }
                $new = new Subagents();
                $new->codeagent = $id;
                $new->fname = $fname;
                $new->lname = $lname;
                $new->country = $country;
                $new->pass = $pass;
                $new->status ="active";
                $new->email = $email;
                if($new->save()){
                    $this->flash->success("Sub Agent with code ".$new->codeagent." successfully created");
                    $this->response->redirect("Admin/Other");
                }else {
                    foreach ($new->getMessages() as $err) {
                        $this->flash->error($err);
                        $this->response->redirect("Admin/Other");
                    }
                }
            }
        }
    }

    public function SingleAppAction($id){
        if(!$this->session->has("email") && !$this->session->has("kingname")){
            $this->response->redirect("index");
        }
        $find = Candidate::findFirst("id = '$id'");
        if($find){
            $this->session->set("candidateid",$find->id);
            $this->response->redirect("Admin/Applicants");
        }else{
            $this->flash->error("Candidate not found");
            $this->session->remove("candidateid");
            $this->response->redirect("Admin/Applicants");
        }

    }

    public function DestroyAction()
    {
        $this->session->destroy();
        $this->response->redirect("index");
    }
}