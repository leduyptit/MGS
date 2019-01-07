<?php
namespace MGS\Marketplace\Api\Data;

interface TransactionInterface
{

    const AMOUNT = 'amount';
    const RECEIVED_TRANSACTION_ID = 'received_transaction_id';
    const VENDOR_ID = 'vendor_id';
    const READ = 'read';
    const CREATED_AT = 'created_at';
    const TRANSACTION_ID = 'transaction_id';
    const TYPE = 'type';
    const METHOD = 'method';


    /**
     * Get transaction_id
     * @return string|null
     */
    public function getTransactionId();

    /**
     * Set transaction_id
     * @param string $transactionId
     * @return \MGS\Marketplace\Api\Data\TransactionInterface
     */
    public function setTransactionId($transactionId);

    /**
     * Get vendor_id
     * @return string|null
     */
    public function getVendorId();

    /**
     * Set vendor_id
     * @param string $vendorId
     * @return \MGS\Marketplace\Api\Data\TransactionInterface
     */
    public function setVendorId($vendorId);

    /**
     * Get received_transaction_id
     * @return string|null
     */
    public function getReceivedTransactionId();

    /**
     * Set received_transaction_id
     * @param string $receivedTransactionId
     * @return \MGS\Marketplace\Api\Data\TransactionInterface
     */
    public function setReceivedTransactionId($receivedTransactionId);

    /**
     * Get amount
     * @return string|null
     */
    public function getAmount();

    /**
     * Set amount
     * @param string $amount
     * @return \MGS\Marketplace\Api\Data\TransactionInterface
     */
    public function setAmount($amount);

    /**
     * Get type
     * @return string|null
     */
    public function getType();

    /**
     * Set type
     * @param string $type
     * @return \MGS\Marketplace\Api\Data\TransactionInterface
     */
    public function setType($type);

    /**
     * Get method
     * @return string|null
     */
    public function getMethod();

    /**
     * Set method
     * @param string $method
     * @return \MGS\Marketplace\Api\Data\TransactionInterface
     */
    public function setMethod($method);

    /**
     * Get read
     * @return string|null
     */
    public function getRead();

    /**
     * Set read
     * @param string $read
     * @return \MGS\Marketplace\Api\Data\TransactionInterface
     */
    public function setRead($read);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \MGS\Marketplace\Api\Data\TransactionInterface
     */
    public function setCreatedAt($createdAt);
}
