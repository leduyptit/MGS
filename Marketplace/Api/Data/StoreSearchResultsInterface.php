<?php
namespace MGS\Marketplace\Api\Data;

interface StoreSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{


    /**
     * Get store list.
     * @return \MGS\Marketplace\Api\Data\StoreInterface[]
     */
    public function getItems();

    /**
     * Set vendor_id list.
     * @param \MGS\Marketplace\Api\Data\StoreInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
