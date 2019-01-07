<?php
namespace MGS\Marketplace\Model;

use MGS\Marketplace\Api\Data\ReviewInterface;

class Review extends \Magento\Framework\Model\AbstractModel implements ReviewInterface
{

    protected $_eventPrefix = 'mgs_marketplace_review';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('MGS\Marketplace\Model\ResourceModel\Review');
    }

    /**
     * Get review_id
     * @return string
     */
    public function getReviewId()
    {
        return $this->getData(self::REVIEW_ID);
    }

    /**
     * Set review_id
     * @param string $reviewId
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     */
    public function setReviewId($reviewId)
    {
        return $this->setData(self::REVIEW_ID, $reviewId);
    }

    /**
     * Get vendor_id
     * @return string
     */
    public function getVendorId()
    {
        return $this->getData(self::VENDOR_ID);
    }

    /**
     * Set vendor_id
     * @param string $vendorId
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     */
    public function setVendorId($vendorId)
    {
        return $this->setData(self::VENDOR_ID, $vendorId);
    }

    /**
     * Get price_rating
     * @return string
     */
    public function getPriceRating()
    {
        return $this->getData(self::PRICE_RATING);
    }

    /**
     * Set price_rating
     * @param string $priceRating
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     */
    public function setPriceRating($priceRating)
    {
        return $this->setData(self::PRICE_RATING, $priceRating);
    }

    /**
     * Get value_rating
     * @return string
     */
    public function getValueRating()
    {
        return $this->getData(self::VALUE_RATING);
    }

    /**
     * Set value_rating
     * @param string $valueRating
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     */
    public function setValueRating($valueRating)
    {
        return $this->setData(self::VALUE_RATING, $valueRating);
    }

    /**
     * Get quantity_rating
     * @return string
     */
    public function getQuantityRating()
    {
        return $this->getData(self::QUANTITY_RATING);
    }

    /**
     * Set quantity_rating
     * @param string $quantityRating
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     */
    public function setQuantityRating($quantityRating)
    {
        return $this->setData(self::QUANTITY_RATING, $quantityRating);
    }

    /**
     * Get review_summary
     * @return string
     */
    public function getReviewSummary()
    {
        return $this->getData(self::REVIEW_SUMMARY);
    }

    /**
     * Set review_summary
     * @param string $reviewSummary
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     */
    public function setReviewSummary($reviewSummary)
    {
        return $this->setData(self::REVIEW_SUMMARY, $reviewSummary);
    }

    /**
     * Get review_content
     * @return string
     */
    public function getReviewContent()
    {
        return $this->getData(self::REVIEW_CONTENT);
    }

    /**
     * Set review_content
     * @param string $reviewContent
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     */
    public function setReviewContent($reviewContent)
    {
        return $this->setData(self::REVIEW_CONTENT, $reviewContent);
    }

    /**
     * Get customer_name
     * @return string
     */
    public function getCustomerName()
    {
        return $this->getData(self::CUSTOMER_NAME);
    }

    /**
     * Set customer_name
     * @param string $customerName
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     */
    public function setCustomerName($customerName)
    {
        return $this->setData(self::CUSTOMER_NAME, $customerName);
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
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
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
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
}
