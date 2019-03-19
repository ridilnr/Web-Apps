<?php

class Billing extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=15, nullable=false)
     */
    public $Id;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $Orderid;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $Pricetotal;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $Status;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $Paymethod;

    /**
     *
     * @var string
     * @Column(type="string", length=75, nullable=false)
     */
    public $Customer;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $Cardnumber;

    /**
     *
     * @var string
     * @Column(type="string", length=75, nullable=true)
     */
    public $Cardname;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $Cardcode;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=true)
     */
    public $Cardexpirydate;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $Paymentdate;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $Invoiceid;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ecommerce");
        $this->setSource("billing");
    }

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
     * @return Billing[]|Billing|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Billing|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
