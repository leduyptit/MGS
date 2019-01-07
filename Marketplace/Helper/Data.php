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

    /**
     * Check current user is seller
     * @return int
     */
	public function checkForSeller()
    {
        if ($this->customerSession->isLoggedIn()) {
            $customerId = $this->customerSession->getCustomer()->getId();
            if ($seller = $this->sellerRepo->getByCustomerId($customerId)) {
                if ($seller->getStatus() == 1) {
                    return 1; //valid seller
                } elseif ($seller->getStatus() == -1) {
                    return 2; //is a seller but locked
                }
            }
            return 0; //is not a seller
        }
        return -1; //user is not logged in
    }
}