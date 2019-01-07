<?php
namespace MGS\Marketplace\Model;

use MGS\Marketplace\Api\Data\CommissionInterface;

class Commission extends \Magento\Framework\Model\AbstractModel implements CommissionInterface
{

    protected $_eventPrefix = 'mgs_marketplace_commission';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('MGS\Marketplace\Model\ResourceModel\Commission');
    }

    /**
     * Get commission_id
     * @return string
     */
    public function getCommissionId()
    {
        return $this->getData(self::COMMISSION_ID);
    }

    /**
     * Set commission_id
     * @param string $commissionId
     * @return \MGS\Marketplace\Api\Data\CommissionInterface
     */
    public function setCommissionId($commissionId)
    {
        return $this->setData(self::COMMISSION_ID, $commissionId);
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
     * @return \MGS\Marketplace\Api\Data\CommissionInterface
     */
    public function setVendorId($vendorId)
    {
        return $this->setData(self::VENDOR_ID, $vendorId);
    }

    /**
     * Get commission_rate
     * @return string
     */
    public function getCommissionRate()
    {
        return $this->getData(self::COMMISSION_RATE);
    }

    /**
     * Set commission_rate
     * @param string $commissionRate
     * @return \MGS\Marketplace\Api\Data\CommissionInterface
     */
    public function setCommissionRate($commissionRate)
    {
        return $this->setData(self::COMMISSION_RATE, $commissionRate);
    }

    /**
     * Get total_sale
     * @return string
     */
    public function getTotalSale()
    {
        return $this->getData(self::TOTAL_SALE);
    }

    /**
     * Set total_sale
     * @param string $totalSale
     * @return \MGS\Marketplace\Api\Data\CommissionInterface
     */
    public function setTotalSale($totalSale)
    {
        return $this->setData(self::TOTAL_SALE, $totalSale);
    }

    /**
     * Get received_amount
     * @return string
     */
    public function getReceivedAmount()
    {
        return $this->getData(self::RECEIVED_AMOUNT);
    }

    /**
     * Set received_amount
     * @param string $receivedAmount
     * @return \MGS\Marketplace\Api\Data\CommissionInterface
     */
    public function setReceivedAmount($receivedAmount)
    {
        return $this->setData(self::RECEIVED_AMOUNT, $receivedAmount);
    }

    /**
     * Get commission_amount
     * @return string
     */
    public function getCommissionAmount()
    {
        return $this->getData(self::COMMISSION_AMOUNT);
    }

    /**
     * Set commission_amount
     * @param string $commissionAmount
     * @return \MGS\Marketplace\Api\Data\CommissionInterface
     */
    public function setCommissionAmount($commissionAmount)
    {
        return $this->setData(self::COMMISSION_AMOUNT, $commissionAmount);
    }

    /**
     * Get remaining_amount
     * @return string
     */
    public function getRemainingAmount()
    {
        return $this->getData(self::REMAINING_AMOUNT);
    }

    /**
     * Set remaining_amount
     * @param string $remainingAmount
     * @return \MGS\Marketplace\Api\Data\CommissionInterface
     */
    public function setRemainingAmount($remainingAmount)
    {
        return $this->setData(self::REMAINING_AMOUNT, $remainingAmount);
    }

    /**
     * Get last_paid_amount
     * @return string
     */
    public function getLastPaidAmount()
    {
        return $this->getData(self::LAST_PAID_AMOUNT);
    }

    /**
     * Set last_paid_amount
     * @param string $lastPaidAmount
     * @return \MGS\Marketplace\Api\Data\CommissionInterface
     */
    public function setLastPaidAmount($lastPaidAmount)
    {
        return $this->setData(self::LAST_PAID_AMOUNT, $lastPaidAmount);
    }
}
