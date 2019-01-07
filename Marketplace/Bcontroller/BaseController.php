<?php
namespace MGS\Marketplace\Bcontroller;
use Magento\Framework\Controller\ResultFactory;

class BaseController extends \Magento\Framework\App\Action\Action
{
    protected $customerSession;

    protected $sellerRepo;

    protected $helper;

    protected $page_title;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Customer\Model\Session $customerSession,
        \MGS\Marketplace\Model\SellerRepository $sellerRepo,
        \MGS\Marketplace\Helper\Data $helper
    )
    {
        $this->customerSession = $customerSession;
        $this->sellerRepo = $sellerRepo;
        $this->helper = $helper;
        parent::__construct($context);
        $this->check();
    }

    public function execute()
    {
        //to override
    }

    protected function check()
    {
        if(!$this->helper->checkForSeller())
        {
            $this->_redirect('customer/account/login');
        }
    }

    protected function setPageTitle($title)
    {
        $this->page_title = $title;
    }

    protected function loadPageLayout()
    {
        if($this->customerSession->isLoggedIn())
        {
            $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
            $pageConfig = $resultPage->getConfig();
            $layout = $this->customerSession->getMarketplaceLayout();
            if(!$layout || ($layout != 'default' && $layout != 'separate'))
            {
                $layout = 'default';
            }
            if($layout == 'default')
            {
                $page_layout = '2columns-left';
                $resultPage->addHandle('customer_account');
                $layout = $resultPage->getLayout();
            }
            else {
                $page_layout = 'marketplace_seller';

            }
            $pageConfig->setPageLayout($page_layout);
            $pageConfig->getTitle()->set($this->page_title);
            return $resultPage;
        }
    }
    
}