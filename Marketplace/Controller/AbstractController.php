<?php
namespace MGS\Marketplace\Controller;

use Magento\Framework\View\Element\UiComponentInterface;
use Magento\Framework\Controller\ResultFactory;
use MGS\Marketplace\Helper\Data as Helper;

class AbstractController extends \Magento\Framework\App\Action\Action
{
    protected $customerSession;

    protected $pageFactory;

    protected $factory;

    protected $helper;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Magento\Framework\View\Element\UiComponentFactory $factory,
        \Magento\Customer\Model\Session $customerSession,
        Helper $helper
    )
    {
        $this->pageFactory = $pageFactory;
        $this->factory = $factory;
        $this->customerSession = $customerSession;
        $this->helper = $helper;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        //detect for seller login
        $sellerCheck = $this->helper->checkForSeller();
        if ($sellerCheck == 1) {
            //is valid seller
            $isAjax = $this->getRequest()->isAjax();
            if ($isAjax) {
                $component = $this->factory->create($this->_request->getParam('namespace'));
                $this->prepareComponent($component);
                $this->_response->appendBody((string) $component->render());
            } else {
                $resultPage = $this->pageFactory->create();
                return $resultPage;
            }
        } elseif ($sellerCheck == 2) {
            //seller is blocked from marketplace -> redirect to marketplace homepage and display error
            $this->messageManager->addError(__('Your account has been blocked from Marketplace. Please contact the administrator!'));
            $resultRedirect->setPath('mgs_marketplace');
        } elseif ($sellerCheck == 0) {
            //is not a seller -> redirect to become seller page
            $resultRedirect->setPath('mgs_marketplace/customer/becomeseller');
        } elseif ($sellerCheck == -1) {
            // not logged in
            $resultRedirect->setPath('customer/account/login');
        }
        return $resultRedirect;
    }

    protected function prepareComponent(UiComponentInterface $component)
    {
        foreach ($component->getChildComponents() as $child) {
            $this->prepareComponent($child);
        }
        $component->prepare();
    }
}
