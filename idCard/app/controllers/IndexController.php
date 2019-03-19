<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $varEtud = Etudiant::find();
        $this->view->setVars(
            [
                "EtudInfo" => $varEtud,
            ]
        );
        $varUniv = Universite::findFirst();
        $this->view->setVar("univNom",$varUniv->nom);
        $this->view->setVar("univLogo",$varUniv->logo);
        /*
        $this->view->setVar("etudNom",$varEtud->nom);
        $this->view->setVar("etudPostnom",$varEtud->postnom);
        $this->view->setVar("etudPrenom",$varEtud->prenom);
        $this->view->setVar("etudDateNaiss",$varEtud->datenaissance);
        $this->view->setVar("etudFac",$varEtud->faculte);
        $this->view->setVar("etudDepartement",$varEtud->departement);
        $this->view->setVar("etudNumero",$varEtud->numero);
        $this->view->setVar("etudPhoto",$varEtud->photo);
        $this->view->setVar("etudPromo",$varEtud->nomclasse);
        */

    }
    
}

