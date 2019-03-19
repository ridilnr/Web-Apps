<?php

class Billing extends \Phalcon\Mvc\Model
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
    public $orderid;

    /**
     *
     * @var string
     */
    public $pricetotal;

    /**
     *
     * @var string
     */
    public $status;

    /**
     *
     * @var string
     */
    public $paymethod;

    /**
     *
     * @var string
     */
    public $customer;

    /**
     *
     * @var string
     */
    public $cardnumber;

    /**
     *
     * @var string
     */
    public $cardname;

    /**
     *
     * @var string
     */
    public $cardcode;

    /**
     *
     * @var string
     */
    public $cardexpirydate;

    /**
     *
     * @var string
     */
    public $paymentdate;

    /**
     *
     * @var string
     */
    public $invoiceid;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'billing';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Billing[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Billing
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
