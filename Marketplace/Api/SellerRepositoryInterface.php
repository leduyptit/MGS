<?php
namespace MGS\Marketplace\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface SellerRepositoryInterface
{
    /**
     * Save seller
     * @param \MGS\Marketplace\Api\Data\SellerInterface $seller
     * @return \MGS\Marketplace\Api\Data\SellerInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \MGS\Marketplace\Api\Data\SellerInterface $seller
    );

    /**
     * Retrieve seller
     * @param string $sellerId
     * @return \MGS\Marketplace\Api\Data\SellerInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($sellerId);

    /**
     * Retrieve seller matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \MGS\Marketplace\Api\Data\SellerSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete seller
     * @param \MGS\Marketplace\Api\Data\SellerInterface $seller
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \MGS\Marketplace\Api\Data\SellerInterface $seller
    );

    /**
     * Delete seller by ID
     * @param string $sellerId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($sellerId);

    /**
     * Get seller by Customer ID
     * @param string $customerID
     * @return \MGS\Marketplace\Api\Data\SellerInterface | null
     */
    public function getByCustomerId($customerId);
}
