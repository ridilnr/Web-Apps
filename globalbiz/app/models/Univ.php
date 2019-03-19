<?php

class Univ extends \Phalcon\Mvc\Model
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
    public $country;

    /**
     *
     * @var string
     */
    public $univ;

    /**
     *
     * @var string
     */
    public $website;

    /**
     *
     * @var string
     */
    public $address;

    /**
     *
     * @var string
     */
    public $description;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'univ';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Univ[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Univ
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
