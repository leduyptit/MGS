<?php


namespace MGS\Marketplace\Bcontroller;

use Magento\Framework\View\Element\UiComponentInterface;
use Magento\Framework\Controller\ResultFactory;

class Mui extends BaseController
{
    protected $pageFactory;

    protected $factory;

    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Magento\Framework\View\Element\UiComponentFactory $factory,
        \Magento\Customer\Model\Session $customerSession,
        \MGS\Marketplace\Model\SellerRepository $sellerRepo,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \MGS\Marketplace\Helper\Data $helper
    )
    {
        $this->pageFactory = $pageFactory;
        $this->factory = $factory;
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context, $customerSession, $sellerRepo, $helper);
    }

    public function execute()
    {
        $isAjax = $this->getRequest()->isAjax();
        if ($isAjax) {
            $component = $this->factory->create($this->_request->getParam('namespace'));
            $this->prepareComponent($component);
            $this->_response->appendBody((string) $component->render());
        } else {
            $resultPage = $this->pageFactory->create();
            return $resultPage;
        }
    }

    protected function prepareComponent(UiComponentInterface $component)
    {
        foreach ($component->getChildComponents() as $child) {
            $this->prepareComponent($child);
        }
        $component->prepare();
    }
}
