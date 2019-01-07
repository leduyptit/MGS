<?php
namespace MGS\Marketplace\Model\ResourceModel\Transaction;

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
            'MGS\Marketplace\Model\Transaction',
            'MGS\Marketplace\Model\ResourceModel\Transaction'
        );
    }
}
