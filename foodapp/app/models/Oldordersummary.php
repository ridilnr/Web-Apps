<?php

class Oldordersummary extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=50, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $ordercode;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $userid;

    /**
     *
     * @var string
     * @Column(type="string", length=75, nullable=false)
     */
    public $restauname;

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
     * @Column(type="string", length=15, nullable=false)
     */
    public $status;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $totalprice;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $totalqty;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=false)
     */
    public $year;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=false)
     */
    public $month;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=false)
     */
    public $day;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $orderrating;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $otherinfo;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $reasoncanceled;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $reasondeleted;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $ordernotification;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $ratingcustomer;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("udzaylcc_foodapp");
        $this->setSource("oldordersummary");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'oldordersummary';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Oldordersummary[]|Oldordersummary|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Oldordersummary|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
