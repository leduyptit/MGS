<?php
namespace MGS\Marketplace\Model;

use MGS\Marketplace\Api\Data\StoreInterface;

class Store extends \Magento\Framework\Model\AbstractModel implements StoreInterface
{

    protected $_eventPrefix = 'mgs_marketplace_store';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('MGS\Marketplace\Model\ResourceModel\Store');
    }

    /**
     * Get store_id
     * @return string
     */
    public function getStoreId()
    {
        return $this->getData(self::STORE_ID);
    }

    /**
     * Set store_id
     * @param string $storeId
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setStoreId($storeId)
    {
        return $this->setData(self::STORE_ID, $storeId);
    }

    /**
     * Get vendor_id
     * @return string
     */
    public function getVendorId()
    {
        return $this->getData(self::VENDOR_ID);
    }

    /**
     * Set vendor_id
     * @param string $vendorId
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setVendorId($vendorId)
    {
        return $this->setData(self::VENDOR_ID, $vendorId);
    }

    /**
     * Get twiiter
     * @return string
     */
    public function getTwiiter()
    {
        return $this->getData(self::TWIITER);
    }

    /**
     * Set twiiter
     * @param string $twiiter
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setTwiiter($twiiter)
    {
        return $this->setData(self::TWIITER, $twiiter);
    }

    /**
     * Get facebook
     * @return string
     */
    public function getFacebook()
    {
        return $this->getData(self::FACEBOOK);
    }

    /**
     * Set facebook
     * @param string $facebook
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setFacebook($facebook)
    {
        return $this->setData(self::FACEBOOK, $facebook);
    }

    /**
     * Get youtube
     * @return string
     */
    public function getYoutube()
    {
        return $this->getData(self::YOUTUBE);
    }

    /**
     * Set youtube
     * @param string $youtube
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setYoutube($youtube)
    {
        return $this->setData(self::YOUTUBE, $youtube);
    }

    /**
     * Get pinterest
     * @return string
     */
    public function getPinterest()
    {
        return $this->getData(self::PINTEREST);
    }

    /**
     * Set pinterest
     * @param string $pinterest
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setPinterest($pinterest)
    {
        return $this->setData(self::PINTEREST, $pinterest);
    }

    /**
     * Get instagram
     * @return string
     */
    public function getInstagram()
    {
        return $this->getData(self::INSTAGRAM);
    }

    /**
     * Set instagram
     * @param string $instagram
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setInstagram($instagram)
    {
        return $this->setData(self::INSTAGRAM, $instagram);
    }

    /**
     * Get google_plus
     * @return string
     */
    public function getGooglePlus()
    {
        return $this->getData(self::GOOGLE_PLUS);
    }

    /**
     * Set google_plus
     * @param string $googlePlus
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setGooglePlus($googlePlus)
    {
        return $this->setData(self::GOOGLE_PLUS, $googlePlus);
    }

    /**
     * Get vimeo
     * @return string
     */
    public function getVimeo()
    {
        return $this->getData(self::VIMEO);
    }

    /**
     * Set vimeo
     * @param string $vimeo
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setVimeo($vimeo)
    {
        return $this->setData(self::VIMEO, $vimeo);
    }

    /**
     * Get theme_background
     * @return string
     */
    public function getThemeBackground()
    {
        return $this->getData(self::THEME_BACKGROUND);
    }

    /**
     * Set theme_background
     * @param string $themeBackground
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setThemeBackground($themeBackground)
    {
        return $this->setData(self::THEME_BACKGROUND, $themeBackground);
    }

    /**
     * Get shop_title
     * @return string
     */
    public function getShopTitle()
    {
        return $this->getData(self::SHOP_TITLE);
    }

    /**
     * Set shop_title
     * @param string $shopTitle
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setShopTitle($shopTitle)
    {
        return $this->setData(self::SHOP_TITLE, $shopTitle);
    }

    /**
     * Get shop_logo
     * @return string
     */
    public function getShopLogo()
    {
        return $this->getData(self::SHOP_LOGO);
    }

    /**
     * Set shop_logo
     * @param string $shopLogo
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setShopLogo($shopLogo)
    {
        return $this->setData(self::SHOP_LOGO, $shopLogo);
    }

    /**
     * Get shop_cover
     * @return string
     */
    public function getShopCover()
    {
        return $this->getData(self::SHOP_COVER);
    }

    /**
     * Set shop_cover
     * @param string $shopCover
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setShopCover($shopCover)
    {
        return $this->setData(self::SHOP_COVER, $shopCover);
    }

    /**
     * Get shop_locality
     * @return string
     */
    public function getShopLocality()
    {
        return $this->getData(self::SHOP_LOCALITY);
    }

    /**
     * Set shop_locality
     * @param string $shopLocality
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setShopLocality($shopLocality)
    {
        return $this->setData(self::SHOP_LOCALITY, $shopLocality);
    }

    /**
     * Get shop_description
     * @return string
     */
    public function getShopDescription()
    {
        return $this->getData(self::SHOP_DESCRIPTION);
    }

    /**
     * Set shop_description
     * @param string $shopDescription
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setShopDescription($shopDescription)
    {
        return $this->setData(self::SHOP_DESCRIPTION, $shopDescription);
    }

    /**
     * Get shop_policy
     * @return string
     */
    public function getShopPolicy()
    {
        return $this->getData(self::SHOP_POLICY);
    }

    /**
     * Set shop_policy
     * @param string $shopPolicy
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setShopPolicy($shopPolicy)
    {
        return $this->setData(self::SHOP_POLICY, $shopPolicy);
    }

    /**
     * Get return_policy
     * @return string
     */
    public function getReturnPolicy()
    {
        return $this->getData(self::RETURN_POLICY);
    }

    /**
     * Set return_policy
     * @param string $returnPolicy
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setReturnPolicy($returnPolicy)
    {
        return $this->setData(self::RETURN_POLICY, $returnPolicy);
    }

    /**
     * Get country
     * @return string
     */
    public function getCountry()
    {
        return $this->getData(self::COUNTRY);
    }

    /**
     * Set country
     * @param string $country
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setCountry($country)
    {
        return $this->setData(self::COUNTRY, $country);
    }

    /**
     * Get meta_keywords
     * @return string
     */
    public function getMetaKeywords()
    {
        return $this->getData(self::META_KEYWORDS);
    }

    /**
     * Set meta_keywords
     * @param string $metaKeywords
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setMetaKeywords($metaKeywords)
    {
        return $this->setData(self::META_KEYWORDS, $metaKeywords);
    }

    /**
     * Get meta_description
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->getData(self::META_DESCRIPTION);
    }

    /**
     * Set meta_description
     * @param string $metaDescription
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setMetaDescription($metaDescription)
    {
        return $this->setData(self::META_DESCRIPTION, $metaDescription);
    }

    /**
     * Get profile_page_target_url
     * @return string
     */
    public function getProfilePageTargetUrl()
    {
        return $this->getData(self::PROFILE_PAGE_TARGET_URL);
    }

    /**
     * Set profile_page_target_url
     * @param string $profilePageTargetUrl
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setProfilePageTargetUrl($profilePageTargetUrl)
    {
        return $this->setData(self::PROFILE_PAGE_TARGET_URL, $profilePageTargetUrl);
    }

    /**
     * Get profile_page_request_url
     * @return string
     */
    public function getProfilePageRequestUrl()
    {
        return $this->getData(self::PROFILE_PAGE_REQUEST_URL);
    }

    /**
     * Set profile_page_request_url
     * @param string $profilePageRequestUrl
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setProfilePageRequestUrl($profilePageRequestUrl)
    {
        return $this->setData(self::PROFILE_PAGE_REQUEST_URL, $profilePageRequestUrl);
    }

    /**
     * Get collection_page_target_url
     * @return string
     */
    public function getCollectionPageTargetUrl()
    {
        return $this->getData(self::COLLECTION_PAGE_TARGET_URL);
    }

    /**
     * Set collection_page_target_url
     * @param string $collectionPageTargetUrl
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setCollectionPageTargetUrl($collectionPageTargetUrl)
    {
        return $this->setData(self::COLLECTION_PAGE_TARGET_URL, $collectionPageTargetUrl);
    }

    /**
     * Get collection_page_request_url
     * @return string
     */
    public function getCollectionPageRequestUrl()
    {
        return $this->getData(self::COLLECTION_PAGE_REQUEST_URL);
    }

    /**
     * Set collection_page_request_url
     * @param string $collectionPageRequestUrl
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setCollectionPageRequestUrl($collectionPageRequestUrl)
    {
        return $this->setData(self::COLLECTION_PAGE_REQUEST_URL, $collectionPageRequestUrl);
    }

    /**
     * Get review_page_target_url
     * @return string
     */
    public function getReviewPageTargetUrl()
    {
        return $this->getData(self::REVIEW_PAGE_TARGET_URL);
    }

    /**
     * Set review_page_target_url
     * @param string $reviewPageTargetUrl
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setReviewPageTargetUrl($reviewPageTargetUrl)
    {
        return $this->setData(self::REVIEW_PAGE_TARGET_URL, $reviewPageTargetUrl);
    }

    /**
     * Get review_page_request_url
     * @return string
     */
    public function getReviewPageRequestUrl()
    {
        return $this->getData(self::REVIEW_PAGE_REQUEST_URL);
    }

    /**
     * Set review_page_request_url
     * @param string $reviewPageRequestUrl
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setReviewPageRequestUrl($reviewPageRequestUrl)
    {
        return $this->setData(self::REVIEW_PAGE_REQUEST_URL, $reviewPageRequestUrl);
    }

    /**
     * Get location_page_target_url
     * @return string
     */
    public function getLocationPageTargetUrl()
    {
        return $this->getData(self::LOCATION_PAGE_TARGET_URL);
    }

    /**
     * Set location_page_target_url
     * @param string $locationPageTargetUrl
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setLocationPageTargetUrl($locationPageTargetUrl)
    {
        return $this->setData(self::LOCATION_PAGE_TARGET_URL, $locationPageTargetUrl);
    }

    /**
     * Get location_page_request_url
     * @return string
     */
    public function getLocationPageRequestUrl()
    {
        return $this->getData(self::LOCATION_PAGE_REQUEST_URL);
    }

    /**
     * Set location_page_request_url
     * @param string $locationPageRequestUrl
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setLocationPageRequestUrl($locationPageRequestUrl)
    {
        return $this->setData(self::LOCATION_PAGE_REQUEST_URL, $locationPageRequestUrl);
    }

    /**
     * Get payment_information
     * @return string
     */
    public function getPaymentInformation()
    {
        return $this->getData(self::PAYMENT_INFORMATION);
    }

    /**
     * Set payment_information
     * @param string $paymentInformation
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setPaymentInformation($paymentInformation)
    {
        return $this->setData(self::PAYMENT_INFORMATION, $paymentInformation);
    }
}
