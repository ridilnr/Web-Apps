<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;
use Phalcon\Paginator\Adapter\Model as PaginatorModel;

class Customers extends \Phalcon\Mvc\Model
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
     * @Column(type="string", length=25, nullable=false)
     */
    public $userid;

    /**
     *
     * @var string
     * @Column(type="string", length=150, nullable=false)
     */
    public $fullname;

    /**
     *
     * @var string
     * @Column(type="string", length=75, nullable=false)
     */
    public $email;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=false)
     */
    public $phonenumber;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $city;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $address;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $idresto;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $photo;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $customerrating;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $restorating;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $restocomments;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $otherinfo;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=false)
     */
    public $allownotifications;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $membershipdate;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $status;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new EmailValidator(
                [
                    'model'   => $this,
                    'message' => 'Please enter a correct email address',
                ]
            )
        );

        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("udzaylcc_foodapp");
        $this->setSource("Customers");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'Customers';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Customers[]|Customers|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Customers|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    public static function getList($key, $pageNum, $sort)
    {
        // The data set to paginate
        $customers = Customers::find([
            "idresto = '$key' AND status = 'active'",
            "order" => $sort,
        ]);
        // Create a Model paginator, show 10 rows by page starting from $currentPage
        $paginator = new PaginatorModel(
            [
                'data'  => $customers,
                'limit' => 5,
                'page'  => $pageNum,
            ]
        );

        // Get the paginated results
        $page = $paginator->getPaginate();

        return $page;
    }

}
