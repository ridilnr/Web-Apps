<?php

class Category extends \Phalcon\Mvc\Model
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
     * @Column(type="string", length=45, nullable=false)
     */
    public $Cname;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $Cadi;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("lzyhzazt_dbalipgit");
        $this->setSource("category");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'category';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Category[]|Category|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Category|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
