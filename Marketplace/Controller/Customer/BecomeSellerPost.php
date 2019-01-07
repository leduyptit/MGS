<?php


namespace MGS\Marketplace\Controller\Customer;

class BecomeSellerPost extends \Magento\Framework\App\Action\Action
{

    protected $helper;
    protected $customerSession;
    protected $sellerFactory;
    protected $storeFactory;
    protected $storeRepository;
    protected $config;

    /**
     * Constructor
     *
     * @param \Magento\Framework\App\Action\Context  $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Customer\Model\Session $customerSession,
        \MGS\Marketplace\Helper\Data $helper,
        \MGS\Marketplace\Helper\GetConfig $config,
        \MGS\Marketplace\Model\SellerFactory $sellerFactory,
        \MGS\Marketplace\Model\StoreFactory $storeFactory,
        \MGS\Marketplace\Model\StoreRepository $storeRepository
    ) {
        $this->customerSession = $customerSession;
        $this->helper = $helper;
        $this->sellerFactory = $sellerFactory;
        $this->storeFactory = $storeFactory;
        $this->storeRepository = $storeRepository;
        $this->config = $config;
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
        $post = $this->getRequest()->getPostValue();
        $profileUrl = $post['profileurl'];
        $customerId = $this->customerSession->getCustomer()->getId();
        try{
            if($this->storeRepository->getByProfileTargetUrl($profileUrl))
            {
                $this->messageManager->addError(__('The request URL is already exist!'));
            }
            else {
                $seller = $this->sellerFactory->create();
                $seller->setCustomerId($customerId);
                $seller->setCreatedAt(date('Y-m-d H:i:s'));
                if(!$this->config->getSellerApprovalRequired())
                {
                    $seller->setStatus(1);
                }
                $seller->save();
                $sellerId = $seller->getId();
                $store = $this->storeFactory->create();
                $store->setVendorId($sellerId);
                $store->setProfilePageTargetUrl($profileUrl);
                $store->save();
                if(!$this->config->getSellerApprovalRequired())
                {
                    $this->eventManager->dispatch('mgs_marketplace_seller_created_after', array('seller' => $seller, 'store' => $store));
                    $this->messageManager->addSuccess(__('You\'re now a seller!'));
                    $this->_redirect('mgs_marketplace/dashboard');
                }
                else {
                    $this->messageManager->addNotice(__('Your request have been sent!'));
                    //$this->_redirect('customer/account');
                }
                
            }
            //$this->messageManager->addSuccess('');
        }catch(\Exception $e)
        {
            $this->messageManager->addError(__($e->getMessage()));
        }
    }
}
