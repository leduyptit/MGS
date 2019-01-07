<?php
namespace MGS\Marketplace\Helper;

use Magento\Framework\App\Helper\Context;

class GetConfig extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $configPrefix = 'mage_solution/marketplace/';
    
	protected $scopeConfig;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    )
    {
        parent::__construct($context);
        $this->scopeConfig = $scopeConfig;
    }
    public function getConfig($path)
    {
        if (is_null($path)) {
            return null;
        }
        return $this->scopeConfig->getValue($this->configPrefix.$path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getAdminEmail()
    {
        return $this->getConfig('general/admin_email');
    }
    public function getGlobalCommissionRate()
    {
        return $this->getConfig('general/global_commission_rate');
    }
    public function getAllowManageOrder()
    {
        return $this->getConfig('general/allow_manage_order');
    }
    public function getMoveProductTaxToSeller()
    {
        return $this->getConfig('general/move_product_tax_to_seller');
    }
    public function getSellerApprovalRequired()
    {
        return $this->getConfig('general/seller_approval_required');
    }
}