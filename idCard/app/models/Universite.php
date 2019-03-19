<?php

use Phalcon\Validation;
use Phalcon\Mvc\Model\Validator\Email as EmailValidator;

class Universite extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=3, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $nom;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $province;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $ville;

    /**
     *
     * @var string
     * @Column(type="string", length=75, nullable=false)
     */
    public $email;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=false)
     */
    public $telephone;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $datefondation;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $anneefondation;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $logo;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $recteur;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $secgen;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=true)
     */
    public $nidnat;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=true)
     */
    public $matricule;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=true)
     */
    public $code;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=true)
     */
    public $boitepostal;

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
        return 'universite';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Universite[]|Universite
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Universite
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
