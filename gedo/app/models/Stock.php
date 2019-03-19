<?php

class Stock extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $stcid;

    /**
     *
     * @var string
     */
    public $pid;

    /**
     *
     * @var string
     */
    public $pcode;

    /**
     *
     * @var string
     */
    public $barcode;

    /**
     *
     * @var string
     */
    public $brand;

    /**
     *
     * @var integer
     */
    public $qty;

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
     * @return Stock[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Stock
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
