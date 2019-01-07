<?php
namespace MGS\Marketplace\Model;

use Magento\Framework\Api\SortOrder;
use Magento\Framework\Reflection\DataObjectProcessor;
use Magento\Framework\Exception\NoSuchEntityException;
use MGS\Marketplace\Model\ResourceModel\Commission as ResourceCommission;
use MGS\Marketplace\Api\CommissionRepositoryInterface;
use Magento\Framework\Exception\CouldNotSaveException;
use MGS\Marketplace\Model\ResourceModel\Commission\CollectionFactory as CommissionCollectionFactory;
use MGS\Marketplace\Api\Data\CommissionInterfaceFactory;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Api\DataObjectHelper;
use MGS\Marketplace\Api\Data\CommissionSearchResultsInterfaceFactory;
use Magento\Store\Model\StoreManagerInterface;

class CommissionRepository implements CommissionRepositoryInterface
{

    protected $resource;

    protected $commissionFactory;

    protected $dataObjectHelper;

    private $storeManager;

    protected $dataCommissionFactory;

    protected $commissionCollectionFactory;

    protected $searchResultsFactory;

    protected $dataObjectProcessor;


    /**
     * @param ResourceCommission $resource
     * @param CommissionFactory $commissionFactory
     * @param CommissionInterfaceFactory $dataCommissionFactory
     * @param CommissionCollectionFactory $commissionCollectionFactory
     * @param CommissionSearchResultsInterfaceFactory $searchResultsFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        ResourceCommission $resource,
        CommissionFactory $commissionFactory,
        CommissionInterfaceFactory $dataCommissionFactory,
        CommissionCollectionFactory $commissionCollectionFactory,
        CommissionSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager
    ) {
        $this->resource = $resource;
        $this->commissionFactory = $commissionFactory;
        $this->commissionCollectionFactory = $commissionCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataCommissionFactory = $dataCommissionFactory;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
    }

    /**
     * {@inheritdoc}
     */
    public function save(
        \MGS\Marketplace\Api\Data\CommissionInterface $commission
    ) {
        /* if (empty($commission->getStoreId())) {
            $storeId = $this->storeManager->getStore()->getId();
            $commission->setStoreId($storeId);
        } */
        try {
            $this->resource->save($commission);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the commission: %1',
                $exception->getMessage()
            ));
        }
        return $commission;
    }

    /**
     * {@inheritdoc}
     */
    public function getById($commissionId)
    {
        $commission = $this->commissionFactory->create();
        $this->resource->load($commission, $commissionId);
        if (!$commission->getId()) {
            throw new NoSuchEntityException(__('commission with id "%1" does not exist.', $commissionId));
        }
        return $commission;
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->commissionCollectionFactory->create();
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
        \MGS\Marketplace\Api\Data\CommissionInterface $commission
    ) {
        try {
            $this->resource->delete($commission);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the commission: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($commissionId)
    {
        return $this->delete($this->getById($commissionId));
    }
}
