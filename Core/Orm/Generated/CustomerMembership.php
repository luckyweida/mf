<?php
//Last updated: 2019-09-27 10:28:47
namespace MillenniumFalcon\Core\Orm\Generated;

use MillenniumFalcon\Core\Orm;

class CustomerMembership extends Orm
{
    /**
     * #pz text COLLATE utf8mb4_unicode_ci DEFAULT NULL
     */
    private $title;
    
    /**
     * #pz text COLLATE utf8mb4_unicode_ci DEFAULT NULL
     */
    private $discount;
    
    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * @param mixed title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }
    
    /**
     * @param mixed discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
    
}