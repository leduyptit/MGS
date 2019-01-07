<?php
namespace MGS\Marketplace\Model;

use Magento\Framework\Api\SortOrder;
use Magento\Framework\Reflection\DataObjectProcessor;
use Magento\Framework\Exception\NoSuchEntityException;
use MGS\Marketplace\Api\SellerRepositoryInterface;
use MGS\Marketplace\Model\ResourceModel\Seller as ResourceSeller;
use MGS\Marketplace\Model\ResourceModel\Seller\CollectionFactory as SellerCollectionFactory;
use Magento\Framework\Exception\CouldNotSaveException;
use MGS\Marketplace\Api\Data\SellerSearchResultsInterfaceFactory;
use Magento\Framework\Exception\CouldNotDeleteException;
use MGS\Marketplace\Api\Data\SellerInterfaceFactory;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Store\Model\StoreManagerInterface;

class SellerRepository implements SellerRepositoryInterface
{

    protected $resource;

    protected $dataSellerFactory;

    protected $dataObjectHelper;

    private $storeManager;

    protected $sellerFactory;

    protected $sellerCollectionFactory;

    protected $searchResultsFactory;

    protected $dataObjectProcessor;


    /**
     * @param ResourceSeller $resource
     * @param SellerFactory $sellerFactory
     * @param SellerInterfaceFactory $dataSellerFactory
     * @param SellerCollectionFactory $sellerCollectionFactory
     * @param SellerSearchResultsInterfaceFactory $searchResultsFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        ResourceSeller $resource,
        SellerFactory $sellerFactory,
        SellerInterfaceFactory $dataSellerFactory,
        SellerCollectionFactory $sellerCollectionFactory,
        SellerSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager
    ) {
        $this->resource = $resource;
        $this->sellerFactory = $sellerFactory;
        $this->sellerCollectionFactory = $sellerCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataSellerFactory = $dataSellerFactory;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
    }

    /**
     * {@inheritdoc}
     */
    public function save(
        \MGS\Marketplace\Api\Data\SellerInterface $seller
    ) {
        /* if (empty($seller->getStoreId())) {
            $storeId = $this->storeManager->getStore()->getId();
            $seller->setStoreId($storeId);
        } */
        try {
            $this->resource->save($seller);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the seller: %1',
                $exception->getMessage()
            ));
        }
        return $seller;
    }

    /**
     * {@inheritdoc}
     */
    public function getById($sellerId)
    {
        $seller = $this->sellerFactory->create();
        $this->resource->load($seller, $sellerId);
        if (!$seller->getId()) {
            throw new NoSuchEntityException(__('seller with id "%1" does not exist.', $sellerId));
        }
        return $seller;
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->sellerCollectionFactory->create();
        foreach ($criteria->getFilterGroups() as $filterGroup) {
            $fields = [];
            $conditions = [];
            foreach ($filterGroup->getFilters() as $filter) {
                if ($filter->getField() === 'store_id') {
                    $collection->addStoreFilter($filter->getValue(), false);
                    continue;
                }
                $fields[] = $filter->getField();
                $condition = $filter->getConditionType() ?: 'eq';
                $conditions[] = [$condition => $filter->getValue()];
            }
            $collection->addFieldToFilter($fields, $conditions);
        }
        
        $sortOrders = $criteria->getSortOrders();
        if ($sortOrders) {
            /** @var SortOrder $sortOrder */
            foreach ($sortOrders as $sortOrder) {
                $collection->addOrder(
                    $sortOrder->getField(),
                    ($sortOrder->getDirection() == SortOrder::SORT_ASC) ? 'ASC' : 'DESC'
                );
            }
        }
        $collection->setCurPage($criteria->getCurrentPage());
        $collection->setPageSize($criteria->getPageSize());
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        $searchResults->setTotalCount($collection->getSize());
        $searchResults->setItems($collection->getItems());
        return $searchResults;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(
        \MGS\Marketplace\Api\Data\SellerInterface $seller
    ) {
        try {
            $this->resource->delete($seller);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the seller: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($sellerId)
    {
        return $this->delete($this->getById($sellerId));
    }

    /**
     * {@inheritdoc}
     */
    public function getByCustomerId($customerId)
    {
        $seller = $this->sellerFactory->create();
        $seller->load($customerId, 'customer_id');
        if (!$seller->getId()) {
            return null;
        }
        return $seller;
    }
}
