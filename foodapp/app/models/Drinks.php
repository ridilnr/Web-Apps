<?php

use Phalcon\Paginator\Adapter\Model as PaginatorModel;

class Drinks extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=50, nullable=false)
     */
    public $drinkid;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $restoid;

    /**
     *
     * @var string
     * @Column(type="string", length=75, nullable=false)
     */
    public $restauname;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $drinkname;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=true)
     */
    public $type;

    /**
     *
     * @var double
     * @Column(type="double", nullable=false)
     */
    public $price;

    /**
     *
     * @var string
     * @Column(type="string", length=5, nullable=false)
     */
    public $available;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $dateinserted;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $lastupdateddate;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    public $discount;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $description;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=true)
     */
    public $size;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $photo;

    /**
     *
     * @var string
     * @Column(type="string", length=5, nullable=false)
     */
    public $state;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("udzaylcc_foodapp");
        $this->setSource("drinks");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'drinks';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Drinks[]|Drinks|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Drinks|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    public static function getList($key1, $key2, $pageNum, $sort)
    {
        // The data set to paginate
        $drinks = Drinks::find([
            "restoid = '$key1'",
            "restauname = '$key2'",
            "order" => $sort
        ]);
        // Create a Model paginator, show 10 rows by page starting from $currentPage
        $paginator = new PaginatorModel(
            [
                'data'  => $drinks,
                'limit' => 5,
                'page'  => $pageNum,
            ]
        );

        // Get the paginated results
        $page = $paginator->getPaginate();

        return $page;
    }

}
