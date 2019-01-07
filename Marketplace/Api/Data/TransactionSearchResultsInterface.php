<?php
namespace MGS\Marketplace\Api\Data;

interface TransactionSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{


    /**
     * Get transaction list.
     * @return \MGS\Marketplace\Api\Data\TransactionInterface[]
     */
    public function getItems();

    /**
     * Set vendor_id list.
     * @param \MGS\Marketplace\Api\Data\TransactionInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
