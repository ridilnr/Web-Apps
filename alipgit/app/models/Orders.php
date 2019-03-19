<?php

class Orders extends \Phalcon\Mvc\Model
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
    public $productid;

    /**
     *
     * @var string
     */
    public $pcolor;

    /**
     *
     * @var string
     */
    public $psize;

    /**
     *
     * @var integer
     */
    public $qty;

    /**
     *
     * @var string
     */
    public $unitprice;

    /**
     *
     * @var string
     */
    public $totalprice;

    /**
     *
     * @var string
     */
    public $status;

    /**
     *
     * @var string
     */
    public $image;

    /**
     *
     * @var string
     */
    public $customer;

    /**
     *
     * @var string
     */
    public $dateorder;

    /**
     *
     * @var string
     */
    public $expecteddate;

    /**
     *
     * @var string
     */
    public $delivereddate;

    /**
     *
     * @var string
     */
    public $paiddate;

    /**
     *
     * @var string
     */
    public $month;

    /**
     *
     * @var integer
     */
    public $year;

    /**
     *
     * @var string
     */
    public $category;

    /**
     *
     * @var string
     */
    public $subcat;

    /**
     *
     * @var string
     */
    public $productname;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource("'Orders'");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'Orders';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Orders[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Orders
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
