<?php

class Customers extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $cid;

    /**
     *
     * @var string
     */
    public $cname;

    /**
     *
     * @var string
     */
    public $cemail;

    /**
     *
     * @var string
     */
    public $cphone;

    /**
     *
     * @var string
     */
    public $address;

    /**
     *
     * @var string
     */
    public $country;

    /**
     *
     * @var string
     */
    public $city;

    /**
     *
     * @var string
     */
    public $password;

    /**
     *
     * @var string
     */
    public $pwupdatecode;

    /**
     *
     * @var string
     */
    public $datecreated;

    /**
     *
     * @var string
     */
    public $status;

    /**
     *
     * @var string
     */
    public $notes;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'customers';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Customers[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Customers
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
