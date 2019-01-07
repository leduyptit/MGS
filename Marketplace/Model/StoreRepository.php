<?php
namespace MGS\Marketplace\Model;

use Magento\Framework\Api\SortOrder;
use MGS\Marketplace\Api\Data\StoreInterfaceFactory;
use Magento\Framework\Reflection\DataObjectProcessor;
use MGS\Marketplace\Api\Data\StoreSearchResultsInterfaceFactory;
use Magento\Framework\Exception\NoSuchEntityException;
use MGS\Marketplace\Model\ResourceModel\Store as ResourceStore;
use Magento\Framework\Exception\CouldNotSaveException;
use MGS\Marketplace\Model\ResourceModel\Store\CollectionFactory as StoreCollectionFactory;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Api\DataObjectHelper;
use MGS\Marketplace\Api\StoreRepositoryInterface;
use Magento\Store\Model\StoreManagerInterface;

class StoreRepository implements StoreRepositoryInterface
{

    protected $resource;

    protected $storeCollectionFactory;

    protected $dataObjectHelper;

    private $storeManager;

    protected $storeFactory;

    protected $dataStoreFactory;

    protected $searchResultsFactory;

    protected $dataObjectProcessor;


    /**
     * @param ResourceStore $resource
     * @param StoreFactory $storeFactory
     * @param StoreInterfaceFactory $dataStoreFactory
     * @param StoreCollectionFactory $storeCollectionFactory
     * @param StoreSearchResultsInterfaceFactory $searchResultsFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        ResourceStore $resource,
        StoreFactory $storeFactory,
        StoreInterfaceFactory $dataStoreFactory,
        StoreCollectionFactory $storeCollectionFactory,
        StoreSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager
    ) {
        $this->resource = $resource;
        $this->storeFactory = $storeFactory;
        $this->storeCollectionFactory = $storeCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataStoreFactory = $dataStoreFactory;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
    }

    /**
     * {@inheritdoc}
     */
    public function save(
        \MGS\Marketplace\Api\Data\StoreInterface $store
    ) {
        /* if (empty($store->getStoreId())) {
            $storeId = $this->storeManager->getStore()->getId();
            $store->setStoreId($storeId);
        } */
        try {
            $this->resource->save($store);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the store: %1',
                $exception->getMessage()
            ));
        }
        return $store;
    }

    /**
     * {@inheritdoc}
     */
    public function getById($storeId)
    {
        $store = $this->storeFactory->create();
        $this->resource->load($store, $storeId);
        if (!$store->getId()) {
            throw new NoSuchEntityException(__('store with id "%1" does not exist.', $storeId));
        }
        return $store;
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->storeCollectionFactory->create();
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
        \MGS\Marketplace\Api\Data\StoreInterface $store
    ) {
        try {
            $this->resource->delete($store);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the store: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($storeId)
    {
        return $this->delete($this->getById($storeId));
    }

    /**
     * {@inheritdoc}
     */
    public function getByProfileTargetUrl($url)
    {
        $store = $this->storeFactory->create();
        $store->load($url, 'profile_page_target_url');
        if (!$store->getId()) {
            return null;
        }
        return $store;
    }
}
