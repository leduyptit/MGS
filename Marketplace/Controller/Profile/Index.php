<?php


namespace MGS\Marketplace\Controller\Profile;

class Index extends \MGS\Marketplace\Bcontroller\Mui
{

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $this->setPageTitle('Marketplace Store Profile');
        return $this->loadPageLayout();
    }
}
