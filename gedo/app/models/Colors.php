<?php

class Colors extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $cid;

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
    public $available;

    /**
     *
     * @var string
     */
    public $image;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'colors';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Colors[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Colors
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
