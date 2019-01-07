<?php
namespace MGS\Marketplace\Model;

use Magento\Framework\Json\Helper\Data as JsonHelper;
 
class StoreUrlManagement implements \MGS\Marketplace\Api\StoreUrlManagementInterface
{
    protected $storeRepository;

    protected $json; 

    public function __construct(StoreRepository $storeRepository, JsonHelper $json)
    {
        $this->storeRepository = $storeRepository;
        $this->json = $json;
    }

    /**
     * {@inheritdoc}
     */
    public function checkStoreUrl($url)
    {
        $result = 1;
        $store = $this->storeRepository->getByProfileTargetUrl($url);
        if ($store === null) {
            $result = 0;
        }
        return $this->json->jsonEncode($result);
    }
}