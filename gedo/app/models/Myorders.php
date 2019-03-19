<?php

class Myorders extends \Phalcon\Mvc\Model
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
     * @var integer
     */
    public $qty;

    /**
     *
     * @var string
     */
    public $orderdata;

    /**
     *
     * @var string
     */
    public $paiddate;

    /**
     *
     * @var string
     */
    public $status;

    /**
     *
     * @var string
     */
    public $totalprice;

    /**
     *
     * @var string
     */
    public $customer;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'myorders';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Myorders[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Myorders
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
