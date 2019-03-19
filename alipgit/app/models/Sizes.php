<?php

class Sizes extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=15, nullable=false)
     */
    public $Sid;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=false)
     */
    public $Pid;

    /**
     *
     * @var double
     * @Column(type="double", length=10, nullable=false)
     */
    public $Size;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=false)
     */
    public $Available;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("lzyhzazt_dbalipgit");
        $this->setSource("sizes");
    }

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
     * @return Sizes[]|Sizes|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Sizes|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
