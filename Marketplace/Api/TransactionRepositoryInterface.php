<?php
namespace MGS\Marketplace\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface TransactionRepositoryInterface
{
    /**
     * Save transaction
     * @param \MGS\Marketplace\Api\Data\TransactionInterface $transaction
     * @return \MGS\Marketplace\Api\Data\TransactionInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \MGS\Marketplace\Api\Data\TransactionInterface $transaction
    );

    /**
     * Retrieve transaction
     * @param string $transactionId
     * @return \MGS\Marketplace\Api\Data\TransactionInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($transactionId);

    /**
     * Retrieve transaction matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \MGS\Marketplace\Api\Data\TransactionSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete transaction
     * @param \MGS\Marketplace\Api\Data\TransactionInterface $transaction
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \MGS\Marketplace\Api\Data\TransactionInterface $transaction
    );

    /**
     * Delete transaction by ID
     * @param string $transactionId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($transactionId);
}
