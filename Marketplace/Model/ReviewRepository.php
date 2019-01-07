<?php
namespace MGS\Marketplace\Model;

use MGS\Marketplace\Api\Data\ReviewInterfaceFactory;
use Magento\Framework\Api\SortOrder;
use Magento\Framework\Reflection\DataObjectProcessor;
use Magento\Framework\Exception\NoSuchEntityException;
use MGS\Marketplace\Api\Data\ReviewSearchResultsInterfaceFactory;
use MGS\Marketplace\Api\ReviewRepositoryInterface;
use Magento\Framework\Exception\CouldNotSaveException;
use MGS\Marketplace\Model\ResourceModel\Review as ResourceReview;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Api\DataObjectHelper;
use MGS\Marketplace\Model\ResourceModel\Review\CollectionFactory as ReviewCollectionFactory;
use Magento\Store\Model\StoreManagerInterface;

class ReviewRepository implements ReviewRepositoryInterface
{

    protected $dataObjectProcessor;

    protected $resource;

    protected $dataObjectHelper;

    private $storeManager;

    protected $dataReviewFactory;

    protected $reviewFactory;

    protected $searchResultsFactory;

    protected $reviewCollectionFactory;


    /**
     * @param ResourceReview $resource
     * @param ReviewFactory $reviewFactory
     * @param ReviewInterfaceFactory $dataReviewFactory
     * @param ReviewCollectionFactory $reviewCollectionFactory
     * @param ReviewSearchResultsInterfaceFactory $searchResultsFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        ResourceReview $resource,
        ReviewFactory $reviewFactory,
        ReviewInterfaceFactory $dataReviewFactory,
        ReviewCollectionFactory $reviewCollectionFactory,
        ReviewSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager
    ) {
        $this->resource = $resource;
        $this->reviewFactory = $reviewFactory;
        $this->reviewCollectionFactory = $reviewCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataReviewFactory = $dataReviewFactory;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
    }

    /**
     * {@inheritdoc}
     */
    public function save(
        \MGS\Marketplace\Api\Data\ReviewInterface $review
    ) {
        /* if (empty($review->getStoreId())) {
            $storeId = $this->storeManager->getStore()->getId();
            $review->setStoreId($storeId);
        } */
        try {
            $this->resource->save($review);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the review: %1',
                $exception->getMessage()
            ));
        }
        return $review;
    }

    /**
     * {@inheritdoc}
     */
    public function getById($reviewId)
    {
        $review = $this->reviewFactory->create();
        $this->resource->load($review, $reviewId);
        if (!$review->getId()) {
            throw new NoSuchEntityException(__('review with id "%1" does not exist.', $reviewId));
        }
        return $review;
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->reviewCollectionFactory->create();
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
        \MGS\Marketplace\Api\Data\ReviewInterface $review
    ) {
        try {
            $this->resource->delete($review);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the review: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($reviewId)
    {
        return $this->delete($this->getById($reviewId));
    }
}
