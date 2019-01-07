<?php
namespace MGS\Marketplace\Api\Data;

interface ReviewInterface
{

    const REVIEW_SUMMARY = 'review_summary';
    const QUANTITY_RATING = 'quantity_rating';
    const VALUE_RATING = 'value_rating';
    const VENDOR_ID = 'vendor_id';
    const REVIEW_ID = 'review_id';
    const CUSTOMER_NAME = 'customer_name';
    const REVIEW_CONTENT = 'review_content';
    const PRICE_RATING = 'price_rating';
    const CREATED_AT = 'created_at';
    const STATUS = 'status';


    /**
     * Get review_id
     * @return string|null
     */
    public function getReviewId();

    /**
     * Set review_id
     * @param string $reviewId
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     */
    public function setReviewId($reviewId);

    /**
     * Get vendor_id
     * @return string|null
     */
    public function getVendorId();

    /**
     * Set vendor_id
     * @param string $vendorId
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     */
    public function setVendorId($vendorId);

    /**
     * Get price_rating
     * @return string|null
     */
    public function getPriceRating();

    /**
     * Set price_rating
     * @param string $priceRating
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     */
    public function setPriceRating($priceRating);

    /**
     * Get value_rating
     * @return string|null
     */
    public function getValueRating();

    /**
     * Set value_rating
     * @param string $valueRating
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     */
    public function setValueRating($valueRating);

    /**
     * Get quantity_rating
     * @return string|null
     */
    public function getQuantityRating();

    /**
     * Set quantity_rating
     * @param string $quantityRating
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     */
    public function setQuantityRating($quantityRating);

    /**
     * Get review_summary
     * @return string|null
     */
    public function getReviewSummary();

    /**
     * Set review_summary
     * @param string $reviewSummary
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     */
    public function setReviewSummary($reviewSummary);

    /**
     * Get review_content
     * @return string|null
     */
    public function getReviewContent();

    /**
     * Set review_content
     * @param string $reviewContent
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     */
    public function setReviewContent($reviewContent);

    /**
     * Get customer_name
     * @return string|null
     */
    public function getCustomerName();

    /**
     * Set customer_name
     * @param string $customerName
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     */
    public function setCustomerName($customerName);

    /**
     * Get status
     * @return string|null
     */
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
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
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     */
    public function setCreatedAt($createdAt);
}
