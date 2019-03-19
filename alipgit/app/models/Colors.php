<?php

class Colors extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=15, nullable=false)
     */
    public $Cid;

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
    public $Colorname;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=false)
     */
    public $Available;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $Image;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("lzyhzazt_dbalipgit");
        $this->setSource("colors");
    }

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
     * @return Colors[]|Colors|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Colors|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
