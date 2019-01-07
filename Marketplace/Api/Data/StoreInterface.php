<?php
namespace MGS\Marketplace\Api\Data;

interface StoreInterface
{

    const INSTAGRAM = 'instagram';
    const COLLECTION_PAGE_REQUEST_URL = 'collection_page_request_url';
    const YOUTUBE = 'youtube';
    const SHOP_POLICY = 'shop_policy';
    const SHOP_TITLE = 'shop_title';
    const PROFILE_PAGE_REQUEST_URL = 'profile_page_request_url';
    const SHOP_LOCALITY = 'shop_locality';
    const SHOP_LOGO = 'shop_logo';
    const PINTEREST = 'pinterest';
    const SHOP_DESCRIPTION = 'shop_description';
    const LOCATION_PAGE_TARGET_URL = 'location_page_target_url';
    const COUNTRY = 'country';
    const PROFILE_PAGE_TARGET_URL = 'profile_page_target_url';
    const META_DESCRIPTION = 'meta_description';
    const REVIEW_PAGE_REQUEST_URL = 'review_page_request_url';
    const RETURN_POLICY = 'return_policy';
    const LOCATION_PAGE_REQUEST_URL = 'location_page_request_url';
    const SHOP_COVER = 'shop_cover';
    const TWIITER = 'twiiter';
    const REVIEW_PAGE_TARGET_URL = 'review_page_target_url';
    const FACEBOOK = 'facebook';
    const THEME_BACKGROUND = 'theme_background';
    const PAYMENT_INFORMATION = 'payment_information';
    const VIMEO = 'vimeo';
    const VENDOR_ID = 'vendor_id';
    const STORE_ID = 'store_id';
    const COLLECTION_PAGE_TARGET_URL = 'collection_page_target_url';
    const META_KEYWORDS = 'meta_keywords';
    const GOOGLE_PLUS = 'google_plus';


    /**
     * Get store_id
     * @return string|null
     */
    public function getStoreId();

    /**
     * Set store_id
     * @param string $storeId
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setStoreId($storeId);

    /**
     * Get vendor_id
     * @return string|null
     */
    public function getVendorId();

    /**
     * Set vendor_id
     * @param string $vendorId
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setVendorId($vendorId);

    /**
     * Get twiiter
     * @return string|null
     */
    public function getTwiiter();

    /**
     * Set twiiter
     * @param string $twiiter
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setTwiiter($twiiter);

    /**
     * Get facebook
     * @return string|null
     */
    public function getFacebook();

    /**
     * Set facebook
     * @param string $facebook
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setFacebook($facebook);

    /**
     * Get youtube
     * @return string|null
     */
    public function getYoutube();

    /**
     * Set youtube
     * @param string $youtube
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setYoutube($youtube);

    /**
     * Get pinterest
     * @return string|null
     */
    public function getPinterest();

    /**
     * Set pinterest
     * @param string $pinterest
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setPinterest($pinterest);

    /**
     * Get instagram
     * @return string|null
     */
    public function getInstagram();

    /**
     * Set instagram
     * @param string $instagram
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setInstagram($instagram);

    /**
     * Get google_plus
     * @return string|null
     */
    public function getGooglePlus();

    /**
     * Set google_plus
     * @param string $googlePlus
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setGooglePlus($googlePlus);

    /**
     * Get vimeo
     * @return string|null
     */
    public function getVimeo();

    /**
     * Set vimeo
     * @param string $vimeo
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setVimeo($vimeo);

    /**
     * Get theme_background
     * @return string|null
     */
    public function getThemeBackground();

    /**
     * Set theme_background
     * @param string $themeBackground
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setThemeBackground($themeBackground);

    /**
     * Get shop_title
     * @return string|null
     */
    public function getShopTitle();

    /**
     * Set shop_title
     * @param string $shopTitle
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setShopTitle($shopTitle);

    /**
     * Get shop_logo
     * @return string|null
     */
    public function getShopLogo();

    /**
     * Set shop_logo
     * @param string $shopLogo
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setShopLogo($shopLogo);

    /**
     * Get shop_cover
     * @return string|null
     */
    public function getShopCover();

    /**
     * Set shop_cover
     * @param string $shopCover
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setShopCover($shopCover);

    /**
     * Get shop_locality
     * @return string|null
     */
    public function getShopLocality();

    /**
     * Set shop_locality
     * @param string $shopLocality
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setShopLocality($shopLocality);

    /**
     * Get shop_description
     * @return string|null
     */
    public function getShopDescription();

    /**
     * Set shop_description
     * @param string $shopDescription
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setShopDescription($shopDescription);

    /**
     * Get shop_policy
     * @return string|null
     */
    public function getShopPolicy();

    /**
     * Set shop_policy
     * @param string $shopPolicy
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setShopPolicy($shopPolicy);

    /**
     * Get return_policy
     * @return string|null
     */
    public function getReturnPolicy();

    /**
     * Set return_policy
     * @param string $returnPolicy
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setReturnPolicy($returnPolicy);

    /**
     * Get country
     * @return string|null
     */
    public function getCountry();

    /**
     * Set country
     * @param string $country
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setCountry($country);

    /**
     * Get meta_keywords
     * @return string|null
     */
    public function getMetaKeywords();

    /**
     * Set meta_keywords
     * @param string $metaKeywords
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setMetaKeywords($metaKeywords);

    /**
     * Get meta_description
     * @return string|null
     */
    public function getMetaDescription();

    /**
     * Set meta_description
     * @param string $metaDescription
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setMetaDescription($metaDescription);

    /**
     * Get profile_page_target_url
     * @return string|null
     */
    public function getProfilePageTargetUrl();

    /**
     * Set profile_page_target_url
     * @param string $profilePageTargetUrl
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setProfilePageTargetUrl($profilePageTargetUrl);

    /**
     * Get profile_page_request_url
     * @return string|null
     */
    public function getProfilePageRequestUrl();

    /**
     * Set profile_page_request_url
     * @param string $profilePageRequestUrl
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setProfilePageRequestUrl($profilePageRequestUrl);

    /**
     * Get collection_page_target_url
     * @return string|null
     */
    public function getCollectionPageTargetUrl();

    /**
     * Set collection_page_target_url
     * @param string $collectionPageTargetUrl
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setCollectionPageTargetUrl($collectionPageTargetUrl);

    /**
     * Get collection_page_request_url
     * @return string|null
     */
    public function getCollectionPageRequestUrl();

    /**
     * Set collection_page_request_url
     * @param string $collectionPageRequestUrl
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setCollectionPageRequestUrl($collectionPageRequestUrl);

    /**
     * Get review_page_target_url
     * @return string|null
     */
    public function getReviewPageTargetUrl();

    /**
     * Set review_page_target_url
     * @param string $reviewPageTargetUrl
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setReviewPageTargetUrl($reviewPageTargetUrl);

    /**
     * Get review_page_request_url
     * @return string|null
     */
    public function getReviewPageRequestUrl();

    /**
     * Set review_page_request_url
     * @param string $reviewPageRequestUrl
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setReviewPageRequestUrl($reviewPageRequestUrl);

    /**
     * Get location_page_target_url
     * @return string|null
     */
    public function getLocationPageTargetUrl();

    /**
     * Set location_page_target_url
     * @param string $locationPageTargetUrl
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setLocationPageTargetUrl($locationPageTargetUrl);

    /**
     * Get location_page_request_url
     * @return string|null
     */
    public function getLocationPageRequestUrl();

    /**
     * Set location_page_request_url
     * @param string $locationPageRequestUrl
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setLocationPageRequestUrl($locationPageRequestUrl);

    /**
     * Get payment_information
     * @return string|null
     */
    public function getPaymentInformation();

    /**
     * Set payment_information
     * @param string $paymentInformation
     * @return \MGS\Marketplace\Api\Data\StoreInterface
     */
    public function setPaymentInformation($paymentInformation);
}
