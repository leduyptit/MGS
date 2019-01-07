<?php
namespace MGS\Marketplace\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface ReviewRepositoryInterface
{
    /**
     * Save review
     * @param \MGS\Marketplace\Api\Data\ReviewInterface $review
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \MGS\Marketplace\Api\Data\ReviewInterface $review
    );

    /**
     * Retrieve review
     * @param string $reviewId
     * @return \MGS\Marketplace\Api\Data\ReviewInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($reviewId);

    /**
     * Retrieve review matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \MGS\Marketplace\Api\Data\ReviewSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete review
     * @param \MGS\Marketplace\Api\Data\ReviewInterface $review
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \MGS\Marketplace\Api\Data\ReviewInterface $review
    );

    /**
     * Delete review by ID
     * @param string $reviewId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($reviewId);
}
