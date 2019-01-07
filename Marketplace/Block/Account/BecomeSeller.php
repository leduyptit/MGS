<?php
namespace MGS\Marketplace\Block\Account;

class BecomeSeller extends \Magento\Framework\View\Element\Template
{

	public function getPostAction()
	{
		return $this->getUrl('mgs_marketplace/customer/becomesellerpost');
	}
}
