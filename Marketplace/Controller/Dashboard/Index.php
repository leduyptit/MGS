<?php


namespace MGS\Marketplace\Controller\Dashboard;

class Index extends \MGS\Marketplace\Bcontroller\Mui
{

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $this->setPageTitle('Marketplace Dashboard');
        return $this->loadPageLayout();
    }
}
