<?php

class Sizes extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $sid;

    /**
     *
     * @var string
     */
    public $pid;

    /**
     *
     * @var double
     */
    public $size;

    /**
     *
     * @var string
     */
    public $sizesoutiengorge;

    /**
     *
     * @var string
     */
    public $available;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'sizes';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Sizes[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Sizes
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
