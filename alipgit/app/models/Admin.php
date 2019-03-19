<?php

class Admin extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=15, nullable=false)
     */
    public $Id;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $Fname;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $Lname;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $Email1;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $Password;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=true)
     */
    public $Phone;

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
    public $Email2;

    /**
     *
     * @var string
     * @Column(type="string", length=5, nullable=false)
     */
    public $Isloggedin;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $Lastlogindate;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $Loginlocation;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=false)
     */
    public $Status;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $Pwupdatecode;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("lzyhzazt_dbalipgit");
        $this->setSource("admin");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'admin';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Admin[]|Admin|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Admin|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
