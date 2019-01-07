<?php
namespace MGS\Marketplace\Model\ResourceModel\Store;

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
            'MGS\Marketplace\Model\Store',
            'MGS\Marketplace\Model\ResourceModel\Store'
        );
    }
}
