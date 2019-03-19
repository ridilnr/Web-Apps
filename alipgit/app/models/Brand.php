<?php

class Brand extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=25, nullable=false)
     */
    public $Brandid;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $Brandname;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $Address;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $Brandemail;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=false)
     */
    public $Phone1;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=true)
     */
    public $Phone2;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $Contactname;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $Username;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $Password;

    /**
     *
     * @var string
     * @Column(type="string", length=5, nullable=false)
     */
    public $Isloggedin;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $Datecreated;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $Createdby;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $Pwupdatecode;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=false)
     */
    public $Status;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("lzyhzazt_dbalipgit");
        $this->setSource("brand");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'brand';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Brand[]|Brand|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Brand|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
