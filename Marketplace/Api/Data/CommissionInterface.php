<?php
namespace MGS\Marketplace\Api\Data;

interface CommissionInterface
{

    const LAST_PAID_AMOUNT = 'last_paid_amount';
    const RECEIVED_AMOUNT = 'received_amount';
    const VENDOR_ID = 'vendor_id';
    const TOTAL_SALE = 'total_sale';
    const REMAINING_AMOUNT = 'remaining_amount';
    const COMMISSION_AMOUNT = 'commission_amount';
    const COMMISSION_RATE = 'commission_rate';
    const COMMISSION_ID = 'commission_id';


    /**
     * Get commission_id
     * @return string|null
     */
    public function getCommissionId();

    /**
     * Set commission_id
     * @param string $commissionId
     * @return \MGS\Marketplace\Api\Data\CommissionInterface
     */
    public function setCommissionId($commissionId);

    /**
     * Get vendor_id
     * @return string|null
     */
    public function getVendorId();

    /**
     * Set vendor_id
     * @param string $vendorId
     * @return \MGS\Marketplace\Api\Data\CommissionInterface
     */
    public function setVendorId($vendorId);

    /**
     * Get commission_rate
     * @return string|null
     */
    public function getCommissionRate();

    /**
     * Set commission_rate
     * @param string $commissionRate
     * @return \MGS\Marketplace\Api\Data\CommissionInterface
     */
    public function setCommissionRate($commissionRate);

    /**
     * Get total_sale
     * @return string|null
     */
    public function getTotalSale();

    /**
     * Set total_sale
     * @param string $totalSale
     * @return \MGS\Marketplace\Api\Data\CommissionInterface
     */
    public function setTotalSale($totalSale);

    /**
     * Get received_amount
     * @return string|null
     */
    public function getReceivedAmount();

    /**
     * Set received_amount
     * @param string $receivedAmount
     * @return \MGS\Marketplace\Api\Data\CommissionInterface
     */
    public function setReceivedAmount($receivedAmount);

    /**
     * Get commission_amount
     * @return string|null
     */
    public function getCommissionAmount();

    /**
     * Set commission_amount
     * @param string $commissionAmount
     * @return \MGS\Marketplace\Api\Data\CommissionInterface
     */
    public function setCommissionAmount($commissionAmount);

    /**
     * Get remaining_amount
     * @return string|null
     */
    public function getRemainingAmount();

    /**
     * Set remaining_amount
     * @param string $remainingAmount
     * @return \MGS\Marketplace\Api\Data\CommissionInterface
     */
    public function setRemainingAmount($remainingAmount);

    /**
     * Get last_paid_amount
     * @return string|null
     */
    public function getLastPaidAmount();

    /**
     * Set last_paid_amount
     * @param string $lastPaidAmount
     * @return \MGS\Marketplace\Api\Data\CommissionInterface
     */
    public function setLastPaidAmount($lastPaidAmount);
}
