<?php
namespace MGS\Marketplace\Model\ResourceModel;

class Seller extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('mgs_marketplace_seller', 'seller_id');
    }
}
