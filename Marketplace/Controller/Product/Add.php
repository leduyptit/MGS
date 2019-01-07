<?php


namespace MGS\Marketplace\Controller\Product;

class Index extends \MGS\Marketplace\Bcontroller\Mui
{

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /**
         *
         * @var \Magento\Framework\Controller\ResultInterface
         *
         */
        return $this->loadPageLayout();
    }
}

