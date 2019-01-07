<?php
namespace MGS\Marketplace\Api\Data;

interface SellerSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{


    /**
     * Get seller list.
     * @return \MGS\Marketplace\Api\Data\SellerInterface[]
     */
    public function getItems();

    /**
     * Set customer_id list.
     * @param \MGS\Marketplace\Api\Data\SellerInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
