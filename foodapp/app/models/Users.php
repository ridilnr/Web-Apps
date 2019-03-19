<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=25, nullable=false)
     */
    public $userid;

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
     * @Column(type="string", length=15, nullable=false)
     */
    public $phonenumber;

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
     * @Column(type="string", length=50, nullable=false)
     */
    public $status;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=false)
     */
    public $registrationyear;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=false)
     */
    public $registrationmonth;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=false)
     */
    public $registrationday;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $datebirth;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $nationality;

    /**
     *
     * @var string
     * @Column(type="string", length=8, nullable=false)
     */
    public $gender;

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
     * @Column(type="string", length=100, nullable=false)
     */
    public $homeaddress;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $city;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $country;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $photo;

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
        $this->setSource("users");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'users';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]|Users|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
