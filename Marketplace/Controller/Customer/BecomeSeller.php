<?php


namespace MGS\Marketplace\Controller\Customer;

class BecomeSeller extends \Magento\Framework\App\Action\Action
{

    protected $resultPageFactory;
    protected $helper;

    /**
     * Constructor
     *
     * @param \Magento\Framework\App\Action\Context  $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \MGS\Marketplace\Helper\Data $helper
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->helper = $helper;
        parent::__construct($context);
    }

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $stt = $this->helper->checkLoggedInAndNotSeller();
        if($stt == 0)
        {
            $this->_redirect('customer/account/login');
        }
        else if($stt == 2)
        {
            $this->_redirect('mgs_marketplace/dashboard');
        }
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->set('Become Seller');
        $layout = $resultPage->getLayout();
        $layout->unsetElement('sidebar.main.account.seller');
        return $resultPage;
    }
}
