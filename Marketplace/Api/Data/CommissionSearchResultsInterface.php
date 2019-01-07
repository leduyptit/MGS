<?php
namespace MGS\Marketplace\Api\Data;

interface CommissionSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{


    /**
     * Get commission list.
     * @return \MGS\Marketplace\Api\Data\CommissionInterface[]
     */
    public function getItems();

    /**
     * Set vendor_id list.
     * @param \MGS\Marketplace\Api\Data\CommissionInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
