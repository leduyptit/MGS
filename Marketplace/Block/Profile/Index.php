<?php
namespace MGS\Marketplace\Block\Profile;

class Index extends \Magento\Framework\View\Element\Template
{
	protected $helper;
	protected $customerSession;
	protected $sellerRepository;
	protected $storeRepository;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\MGS\Marketplace\Helper\Data $helper,
		\Magento\Customer\Model\Session $customerSession,
		\MGS\Marketplace\Model\SellerRepository $sellerRepository,
		\MGS\Marketplace\Model\StoreRepository $storeRepository
	)
	{
		$this->helper = $helper;
		$this->customerSession = $customerSession;
		$this->sellerRepository = $sellerRepository;
		$this->storeRepository = $storeRepository;
		parent::__construct($context);
	}

	public function getStoreProfile()
	{
		
		if($this->customerSession->isLoggedIn()) {
			$customer = $this->customerSession->getCustomer();
			$seller = $this->sellerRepository->getByCustomerId($customer->getId());
			$store = $this->storeRepository->getByVendorId($seller->getId());
			return $store;
		}
		return null;
	}

	public function getPostUrl()
	{
		return $this->getUrl('mgs_marketplace/profilepost');
	}
}
