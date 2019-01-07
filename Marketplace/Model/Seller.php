<?php
namespace MGS\Marketplace\Model;

use MGS\Marketplace\Api\Data\SellerInterface;

class Seller extends \Magento\Framework\Model\AbstractModel implements SellerInterface
{

    protected $_eventPrefix = 'mgs_marketplace_seller';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('MGS\Marketplace\Model\ResourceModel\Seller');
    }

    /**
     * Get seller_id
     * @return string
     */
    public function getSellerId()
    {
        return $this->getData(self::SELLER_ID);
    }

    /**
     * Set seller_id
     * @param string $sellerId
     * @return \MGS\Marketplace\Api\Data\SellerInterface
     */
    public function setSellerId($sellerId)
    {
        return $this->setData(self::SELLER_ID, $sellerId);
    }

    /**
     * Get customer_id
     * @return string
     */
    public function getCustomerId()
    {
        return $this->getData(self::CUSTOMER_ID);
    }

    /**
     * Set customer_id
     * @param string $customerId
     * @return \MGS\Marketplace\Api\Data\SellerInterface
     */
    public function setCustomerId($customerId)
    {
        return $this->setData(self::CUSTOMER_ID, $customerId);
    }

    /**
     * Get status
     * @return string
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * Set status
     * @param string $status
     * @return \MGS\Marketplace\Api\Data\SellerInterface
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * Get created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Set created_at
     * @param string $createdAt
     * @return \MGS\Marketplace\Api\Data\SellerInterface
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
}
