<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class Admin extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $fname;

    /**
     *
     * @var string
     */
    public $lname;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
     */
    public $tel;

    /**
     *
     * @var string
     */
    public $status;

    /**
     *
     * @var string
     */
    public $pass;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    /*public function validation()
    {
        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }*/

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
     * @return Admin[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Admin
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
