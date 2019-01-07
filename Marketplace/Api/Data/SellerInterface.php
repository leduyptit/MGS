<?php
namespace MGS\Marketplace\Api\Data;

interface SellerInterface
{

    const CREATED_AT = 'created_at';
    const STATUS = 'status';
    const CUSTOMER_ID = 'customer_id';
    const SELLER_ID = 'seller_id';


    /**
     * Get seller_id
     * @return string|null
     */
    public function getSellerId();

    /**
     * Set seller_id
     * @param string $sellerId
     * @return \MGS\Marketplace\Api\Data\SellerInterface
     */
    public function setSellerId($sellerId);

    /**
     * Get customer_id
     * @return string|null
     */
    public function getCustomerId();

    /**
     * Set customer_id
     * @param string $customerId
     * @return \MGS\Marketplace\Api\Data\SellerInterface
     */
    public function setCustomerId($customerId);

    /**
     * Get status
     * @return string|null
     */
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return \MGS\Marketplace\Api\Data\SellerInterface
     */
    public function setStatus($status);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \MGS\Marketplace\Api\Data\SellerInterface
     */
    public function setCreatedAt($createdAt);
}
