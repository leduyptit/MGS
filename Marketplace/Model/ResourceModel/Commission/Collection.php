<?php


namespace MGS\Marketplace\Model\ResourceModel\Commission;

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
            'MGS\Marketplace\Model\Commission',
            'MGS\Marketplace\Model\ResourceModel\Commission'
        );
    }
}
