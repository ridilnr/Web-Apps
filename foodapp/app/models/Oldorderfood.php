<?php

class Oldorderfood extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $orderid;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $orderdate;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $ordertime;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $expectedtime;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    public $afterminutes;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=false)
     */
    public $status;

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
    public $foodid;

    /**
     *
     * @var string
     * @Column(type="string", length=75, nullable=false)
     */
    public $foodname;

    /**
     *
     * @var double
     * @Column(type="double", nullable=false)
     */
    public $foodprice;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=false)
     */
    public $foodqty;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $userid;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=false)
     */
    public $orderyear;

    /**
     *
     * @var integer
     * @Column(type="integer", length=2, nullable=false)
     */
    public $ordermonth;

    /**
     *
     * @var integer
     * @Column(type="integer", length=2, nullable=false)
     */
    public $orderday;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $ordercode;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("udzaylcc_foodapp");
        $this->setSource("oldorderfood");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'oldorderfood';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Oldorderfood[]|Oldorderfood|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Oldorderfood|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
