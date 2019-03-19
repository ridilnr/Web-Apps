<?php

class Brand extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $brandid;

    /**
     *
     * @var string
     */
    public $brandname;

    /**
     *
     * @var string
     */
    public $address;

    /**
     *
     * @var string
     */
    public $brandemail;

    /**
     *
     * @var string
     */
    public $phone1;

    /**
     *
     * @var string
     */
    public $phone2;

    /**
     *
     * @var string
     */
    public $contactname;

    /**
     *
     * @var string
     */
    public $username;

    /**
     *
     * @var string
     */
    public $password;

    /**
     *
     * @var string
     */
    public $isloggedin;

    /**
     *
     * @var string
     */
    public $datecreated;

    /**
     *
     * @var string
     */
    public $createdby;

    /**
     *
     * @var string
     */
    public $pwupdatecode;

    /**
     *
     * @var string
     */
    public $status;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'brand';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Brand[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Brand
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
