<?php

class Subcat extends \Phalcon\Mvc\Model
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
    public $subcatname;

    /**
     *
     * @var string
     */
    public $categoryname;

    /**
     *
     * @var integer
     */
    public $cat;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'subcat';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Subcat[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Subcat
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
