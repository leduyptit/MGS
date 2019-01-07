<?php
namespace MGS\Marketplace\Block\Account;

class SellerSidebar extends \Magento\Framework\View\Element\Template
{
	protected $helper;
	protected $customerSession;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\MGS\Marketplace\Helper\Data $helper,
		\Magento\Customer\Model\Session $customerSession
	)
	{
		$this->helper = $helper;
		$this->customerSession = $customerSession;
		parent::__construct($context);
	}

	public function checkSeller()
	{
		return $this->helper->checkForSeller();
	}
}
