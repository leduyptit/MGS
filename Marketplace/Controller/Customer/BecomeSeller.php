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
        $sellerCheck = $this->helper->checkForSeller();
        if ($sellerCheck == -1) {
            //not logged in
            return $this->_redirect('customer/account/login');
        } elseif ($sellerCheck == 1) {
            //is a seller already
            return $this->_redirect('mgs_marketplace/dashboard');
        } elseif ($sellerCheck == 2) {
            //blocked
            $this->messageManager->addError(__('Your account has been blocked from Marketplace. Please contact the administrator!'));
            return $this->_redirect('mgs_marketplace');
        }
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->set('Become Seller');
        $layout = $resultPage->getLayout();
        $layout->unsetElement('sidebar.main.account.seller');
        return $resultPage;
    }
}
