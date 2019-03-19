<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class Adminrestaurant extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=25, nullable=false)
     */
    public $idresto;

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
    public $pwupdatecode;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $pwupdatelink;

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
     *
     * @var string
     * @Column(type="string", length=75, nullable=false)
     */
    public $restauname;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $city;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $country;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $deliverystarttime;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $deliverystoptime;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $photo;

    /**
     *
     * @var string
     * @Column(type="string", length=200, nullable=false)
     */
    public $address;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $connectivity;

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
        $this->setSource("adminrestaurant");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'adminrestaurant';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Adminrestaurant[]|Adminrestaurant|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Adminrestaurant|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
