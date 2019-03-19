<?php

class Cities extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=25, nullable=false)
     */
    public $cityid;

    /**
     *
     * @var string
     * @Column(type="string", length=75, nullable=false)
     */
    public $cityname;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $countryname;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $description;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $otherinfo;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=false)
     */
    public $status;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("udzaylcc_foodapp");
        $this->setSource("cities");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cities';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cities[]|Cities|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cities|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
