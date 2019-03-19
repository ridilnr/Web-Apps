<?php

class Productdetails extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $pid;

    /**
     *
     * @var string
     */
    public $productid;

    /**
     *
     * @var string
     */
    public $barcode;

    /**
     *
     * @var string
     */
    public $productcode;

    /**
     *
     * @var string
     */
    public $category;

    /**
     *
     * @var string
     */
    public $subcat;

    /**
     *
     * @var string
     */
    public $productname;

    /**
     *
     * @var string
     */
    public $price;

    /**
     *
     * @var string
     */
    public $discount;

    /**
     *
     * @var string
     */
    public $style;

    /**
     *
     * @var string
     */
    public $brand;

    /**
     *
     * @var string
     */
    public $image;

    /**
     *
     * @var integer
     */
    public $qty;

    /**
     *
     * @var string
     */
    public $colorcode;

    /**
     *
     * @var string
     */
    public $color;

    /**
     *
     * @var string
     */
    public $size;

    /**
     *
     * @var string
     */
    public $deliverycost;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var string
     */
    public $fit;

    /**
     *
     * @var string
     */
    public $dateinserted;

    /**
     *
     * @var string
     */
    public $sizesoutiengorge;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'productdetails';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Productdetails[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Productdetails
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
