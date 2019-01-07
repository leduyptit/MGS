<?php
namespace MGS\Marketplace\Api\Data;

interface ReviewSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{


    /**
     * Get review list.
     * @return \MGS\Marketplace\Api\Data\ReviewInterface[]
     */
    public function getItems();

    /**
     * Set vendor_id list.
     * @param \MGS\Marketplace\Api\Data\ReviewInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
