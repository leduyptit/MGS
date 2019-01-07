<?php
namespace MGS\Marketplace\Model\ResourceModel\Seller;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'MGS\Marketplace\Model\Seller',
            'MGS\Marketplace\Model\ResourceModel\Seller'
        );
    }
}
