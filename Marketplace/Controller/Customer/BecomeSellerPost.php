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
    protected $eventManager;

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
        \MGS\Marketplace\Model\StoreRepository $storeRepository,
        \Magento\Framework\Event\Manager $eventManager
    ) {
        $this->customerSession = $customerSession;
        $this->helper = $helper;
        $this->sellerFactory = $sellerFactory;
        $this->storeFactory = $storeFactory;
        $this->storeRepository = $storeRepository;
        $this->config = $config;
        $this->eventManager = $eventManager;
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
        try {
            if ($this->storeRepository->getByProfileTargetUrl($this->getRequest()->getPostValue('profileurl'))) {
                $this->messageManager->addError(__('The request URL is already exist!'));
            } else {
                $sellerId = $this->saveSeller();
                return $this->saveStore($sellerId);
            }
        } catch (\Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
        }
        return $this->_redirect('customer/account');
    }

    /**
     * create the seller from post value
     * @return int - created seller id
     */
    protected function saveSeller()
    {
        $customerId = $this->customerSession->getCustomer()->getId();
        $seller = $this->sellerFactory->create();
        $seller->setCustomerId($customerId);
        $seller->setCreatedAt(date('Y-m-d H:i:s'));
        if (!$this->config->getSellerApprovalRequired()) {
            $seller->setStatus(1);
        }
        $seller->save();
        return $seller->getId();
    }

    /**
     * create store for seller
     * @param int sellerId
     * @return redirect
     */
    protected function saveStore($sellerId)
    {
        $store = $this->storeFactory->create();
        $store->setVendorId($sellerId);
        $store->setProfilePageTargetUrl($this->getRequest()->getPostValue('profileurl'));
        $store->save();
        if (!$this->config->getSellerApprovalRequired()) {
            $this->eventManager->dispatch('mgs_marketplace_seller_created_after', array('seller_id' => $sellerId, 'store' => $store));
            $this->messageManager->addSuccess(__('You\'re now a seller!'));
            return $this->_redirect('mgs_marketplace/dashboard');
        } else {
            $this->messageManager->addNotice(__('Your request have been sent!'));
            return $this->_redirect('customer/account');
        }
    }
}
