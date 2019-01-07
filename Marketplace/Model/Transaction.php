<?php
namespace MGS\Marketplace\Model;

use MGS\Marketplace\Api\Data\TransactionInterface;

class Transaction extends \Magento\Framework\Model\AbstractModel implements TransactionInterface
{

    protected $_eventPrefix = 'mgs_marketplace_transaction';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('MGS\Marketplace\Model\ResourceModel\Transaction');
    }

    /**
     * Get transaction_id
     * @return string
     */
    public function getTransactionId()
    {
        return $this->getData(self::TRANSACTION_ID);
    }

    /**
     * Set transaction_id
     * @param string $transactionId
     * @return \MGS\Marketplace\Api\Data\TransactionInterface
     */
    public function setTransactionId($transactionId)
    {
        return $this->setData(self::TRANSACTION_ID, $transactionId);
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
     * @return \MGS\Marketplace\Api\Data\TransactionInterface
     */
    public function setVendorId($vendorId)
    {
        return $this->setData(self::VENDOR_ID, $vendorId);
    }

    /**
     * Get received_transaction_id
     * @return string
     */
    public function getReceivedTransactionId()
    {
        return $this->getData(self::RECEIVED_TRANSACTION_ID);
    }

    /**
     * Set received_transaction_id
     * @param string $receivedTransactionId
     * @return \MGS\Marketplace\Api\Data\TransactionInterface
     */
    public function setReceivedTransactionId($receivedTransactionId)
    {
        return $this->setData(self::RECEIVED_TRANSACTION_ID, $receivedTransactionId);
    }

    /**
     * Get amount
     * @return string
     */
    public function getAmount()
    {
        return $this->getData(self::AMOUNT);
    }

    /**
     * Set amount
     * @param string $amount
     * @return \MGS\Marketplace\Api\Data\TransactionInterface
     */
    public function setAmount($amount)
    {
        return $this->setData(self::AMOUNT, $amount);
    }

    /**
     * Get type
     * @return string
     */
    public function getType()
    {
        return $this->getData(self::TYPE);
    }

    /**
     * Set type
     * @param string $type
     * @return \MGS\Marketplace\Api\Data\TransactionInterface
     */
    public function setType($type)
    {
        return $this->setData(self::TYPE, $type);
    }

    /**
     * Get method
     * @return string
     */
    public function getMethod()
    {
        return $this->getData(self::METHOD);
    }

    /**
     * Set method
     * @param string $method
     * @return \MGS\Marketplace\Api\Data\TransactionInterface
     */
    public function setMethod($method)
    {
        return $this->setData(self::METHOD, $method);
    }

    /**
     * Get read
     * @return string
     */
    public function getRead()
    {
        return $this->getData(self::READ);
    }

    /**
     * Set read
     * @param string $read
     * @return \MGS\Marketplace\Api\Data\TransactionInterface
     */
    public function setRead($read)
    {
        return $this->setData(self::READ, $read);
    }

    /**
     * Get created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Set created_at
     * @param string $createdAt
     * @return \MGS\Marketplace\Api\Data\TransactionInterface
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
}
