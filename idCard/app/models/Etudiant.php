<?php

use Phalcon\Validation;
use Phalcon\Mvc\Model\Validator\Email as EmailValidator;

class Etudiant extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=12, nullable=false)
     */
    public $numero;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $nom;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $postnom;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $prenom;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $datenaissance;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $faculte;

    /**
     *
     * @var string
     * @Column(type="string", length=75, nullable=false)
     */
    public $departement;

    /**
     *
     * @var string
     * @Column(type="string", length=7, nullable=false)
     */
    public $niveau;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $photo;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $lieunaissance;

    /**
     *
     * @var string
     * @Column(type="string", length=2, nullable=false)
     */
    public $classe;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $nomclasse;

    /**
     *
     * @var string
     * @Column(type="string", length=40, nullable=false)
     */
    public $province;

    /**
     *
     * @var string
     * @Column(type="string", length=40, nullable=true)
     */
    public $villeorigine;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=true)
     */
    public $nidnat;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $numpassport;

    /**
     *
     * @var string
     * @Column(type="string", length=14, nullable=true)
     */
    public $telephone1;

    /**
     *
     * @var string
     * @Column(type="string", length=14, nullable=true)
     */
    public $telephone2;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=false)
     */
    public $nationalite;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $email;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $pass;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $dateenregistrer;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $dategraduer;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $dateannuller;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $dategele;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=false)
     */
    public $status;

    /**
     *
     * @var string
     * @Column(type="string", length=8, nullable=false)
     */
    public $sexe;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=false)
     */
    public $anneeenregistrer;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new EmailValidator(
                [
                    'model'   => $this,
                    'message' => 'Please enter a correct email address',
                ]
            )
        );

        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("univertech");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'etudiant';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Etudiant[]|Etudiant
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Etudiant
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
