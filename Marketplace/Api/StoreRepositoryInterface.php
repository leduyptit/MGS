<?php
namespace MGS\Marketplace\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface StoreRepositoryInterface
{
    /**
     * Save store
     * @param \MGS\Marketplace\Api\Data\StoreInterface $store
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \MGS\Marketplace\Api\Data\StoreInterface $store
    );

    /**
     * Retrieve store
     * @param string $storeId
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($storeId);

    /**
     * Retrieve store matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \MGS\Marketplace\Api\Data\StoreSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete store
     * @param \MGS\Marketplace\Api\Data\StoreInterface $store
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \MGS\Marketplace\Api\Data\StoreInterface $store
    );

    /**
     * Delete store by ID
     * @param string $storeId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($storeId);

    /**
     * Get/find store by it's url
     * @param string $url
     * @return \MGS\Marketplace\Api\Data\StoreInterface $store | null
     */
    public function getByProfileTargetUrl($url);
}
