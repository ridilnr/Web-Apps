<?php

class Colorsize extends \Phalcon\Mvc\Model
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
    public $pid;

    /**
     *
     * @var string
     */
    public $colorname;

    /**
     *
     * @var string
     */
    public $size;

    /**
     *
     * @var string
     */
    public $fit;

    /**
     *
     * @var string
     */
    public $available;

    /**
     *
     * @var integer
     */
    public $qty;

    /**
     *
     * @var string
     */
    public $barcode;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'colorsize';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Colorsize[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Colorsize
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
