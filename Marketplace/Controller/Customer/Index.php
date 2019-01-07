<?php


namespace MGS\Marketplace\Controller\Customer;

class Index extends \MGS\Marketplace\Bcontroller\Mui
{

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}
