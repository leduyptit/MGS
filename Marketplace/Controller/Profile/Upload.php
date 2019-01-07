<?php
namespace MGS\Marketplace\Controller\Profile;

use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Backend\App\Action;

class Upload extends \MGS\Marketplace\Bcontroller\Mui
{
 
    protected $_fileUploaderFactory;
     
    public function __construct(
        \Magento\MediaStorage\Model\File\UploaderFactory $fileUploaderFactory,
        Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Magento\Framework\View\Element\UiComponentFactory $factory,
        \Magento\Customer\Model\Session $customerSession,
        \MGS\Marketplace\Model\SellerRepository $sellerRepo,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \MGS\Marketplace\Helper\Data $helper
    ) {
     
        $this->_fileUploaderFactory = $fileUploaderFactory;
        parent::__construct($context, $pageFactory, $factory, $customerSession, $sellerRepo, $resultPageFactory, $helper);
    }
     
    public function execute(){
     
        $uploader = $this->_fileUploaderFactory->create(['fileId' => 'image']);
          
        $uploader->setAllowedExtensions(['jpg', 'jpeg', 'gif', 'png']);
          
        $uploader->setAllowRenameFiles(false);
          
        $uploader->setFilesDispersion(false);
     
        $path = $this->_filesystem->getDirectoryRead(DirectoryList::MEDIA)
          
        ->getAbsolutePath('images/');
          
        $uploader->save($path);
     
    }
}