<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class Admin extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=25, nullable=false)
     */
    public $idadmin;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $fname;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $lname;

    /**
     *
     * @var string
     * @Column(type="string", length=75, nullable=false)
     */
    public $email;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $username;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $password;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $status;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $type;

    /**
     *
     * @var string
     * @Column(type="string", length=75, nullable=true)
     */
    public $pswupdatecode;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $pswupdatelink;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $datecreation;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $lastupdatedate;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $lastlogindate;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $description;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $otherinfo;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $datebirth;

    /**
     *
     * @var string
     * @Column(type="string", length=8, nullable=true)
     */
    public $gender;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=true)
     */
    public $phonenumber;

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
        $this->setSchema("udzaylcc_foodapp");
        $this->setSource("admin");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'admin';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Admin[]|Admin|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Admin|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
