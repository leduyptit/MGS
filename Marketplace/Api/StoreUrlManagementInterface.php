<?php
namespace MGS\Marketplace\Api;
 
interface StoreUrlManagementInterface
{
    /**
     * check for store url is used or not.
     * @api
     * @param string $url
     * @return string
     */
    public function checkStoreUrl($url);
}