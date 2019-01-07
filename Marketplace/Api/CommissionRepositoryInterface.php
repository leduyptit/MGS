<?php
namespace MGS\Marketplace\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface CommissionRepositoryInterface
{
    /**
     * Save commission
     * @param \MGS\Marketplace\Api\Data\CommissionInterface $commission
     * @return \MGS\Marketplace\Api\Data\CommissionInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \MGS\Marketplace\Api\Data\CommissionInterface $commission
    );

    /**
     * Retrieve commission
     * @param string $commissionId
     * @return \MGS\Marketplace\Api\Data\CommissionInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($commissionId);

    /**
     * Retrieve commission matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \MGS\Marketplace\Api\Data\CommissionSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete commission
     * @param \MGS\Marketplace\Api\Data\CommissionInterface $commission
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \MGS\Marketplace\Api\Data\CommissionInterface $commission
    );

    /**
     * Delete commission by ID
     * @param string $commissionId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($commissionId);
}
