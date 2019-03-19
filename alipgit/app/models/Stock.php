<?php

class Stock extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=15, nullable=false)
     */
    public $Stcid;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=false)
     */
    public $Pid;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=false)
     */
    public $Pcode;

    /**
     *
     * @var string
     * @Column(type="string", length=75, nullable=true)
     */
    public $Barcode;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $Brand;

    /**
     *
     * @var integer
     * @Column(type="integer", length=6, nullable=false)
     */
    public $Qty;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("lzyhzazt_dbalipgit");
        $this->setSource("stock");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'stock';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Stock[]|Stock|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Stock|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
