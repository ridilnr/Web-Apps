<?php
use Phalcon\Paginator\Adapter\Model as PaginatorModel;

class Ordersummary extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=50, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $ordercode;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $userid;

    /**
     *
     * @var string
     * @Column(type="string", length=75, nullable=false)
     */
    public $restauname;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $orderdate;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $ordertime;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=false)
     */
    public $status;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $totalprice;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $totalqty;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=false)
     */
    public $year;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=false)
     */
    public $month;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=false)
     */
    public $day;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $orderrating;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $otherinfo;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $reasoncanceled;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $reasondeleted;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $ordernotification;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $ratingcustomer;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("udzaylcc_foodapp");
        $this->setSource("ordersummary");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'ordersummary';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Ordersummary[]|Ordersummary|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Ordersummary|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    public static function getList($key1, $pageNum, $sort1, $sort2, $sort3, $order)
    {
        // The data set to paginate
        if($order === "ASC"){
            $orderSum = Ordersummary::find([
                "restauname = '$key1'",
                "order" => $sort1.', '.$sort2.', '.$sort3,
            ]);
        }else if($order === "DESC"){
            $orderSum = Ordersummary::find([
                "restauname = '$key1'",
                "order" => $sort1.' DESC, '.$sort2.', '.$sort3,
            ]);
        }
        return Ordersummary::getPage($pageNum, $orderSum);
    }

    public static function getSpecList($key1, $pageNum, $status, $sort1, $sort2){
        $orderSum = Ordersummary::find([
            "restauname = '$key1' AND status = '$status'",
            "order" => $sort1.', '.$sort2,
        ]);
        return Ordersummary::getPage($pageNum, $orderSum);
    }

    public static function getPage($pageNum, $data){
        // Create a Model paginator, show 10 rows by page starting from $currentPage
        $paginator = new PaginatorModel(
            [
                'data'  => $data,
                'limit' => 5,
                'page'  => $pageNum,
            ]
        );

        // Get the paginated results
        $page = $paginator->getPaginate();

        return $page;
    }

}
