<?php


class Product
{
    public $productName;
    public $productQuantity;
    public $productUnitPrice;
    public $productDiscount;

    public function __construct(){

    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @return mixed
     */
    public function getProductQuantity()
    {
        return $this->productQuantity;
    }

    /**
     * @return mixed
     */
    public function getProductUnitPrice()
    {
        return $this->productUnitPrice;
    }

    /**
     * @return mixed
     */
    public function getProductDiscount()
    {
        return $this->productDiscount;
    }

    /**
     * @return array
     */


}