<?php
namespace MGS\Marketplace\Helper;

use Magento\Framework\App\Helper\Context;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	protected $customerSession;

    protected $sellerRepo;

	public function __construct(
        Context $context,
        \Magento\Customer\Model\Session $customerSession,
        \MGS\Marketplace\Model\SellerRepository $sellerRepo
    )
    {
    	$this->customerSession = $customerSession;
        $this->sellerRepo = $sellerRepo;
        parent::__construct($context);
    }
	public function checkForSeller()
    {
        if ($this->customerSession->isLoggedIn()) {
            $customerId = $this->customerSession->getCustomer()->getId();
            if($seller = $this->sellerRepo->getByCustomerId($customerId))
            {
                if($seller->getStatus() == 1) {
                    return true;
                }
            }
        }
        return false;
    }

    public function checkLoggedInAndNotSeller()
    {
    	if ($this->customerSession->isLoggedIn()) {
            $customerId = $this->customerSession->getCustomer()->getId();
            if(!$this->sellerRepo->getByCustomerId($customerId))
            {
                return 1; //true
            }
            return 2; //logged in and is seller
        }
        return 0; //not logged in
    }
}