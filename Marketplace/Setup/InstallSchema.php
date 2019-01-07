<?php
namespace MGS\Marketplace\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{

    /**
     * {@inheritdoc}
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $installer = $setup;
        $installer->startSetup();

        $table_mgs_marketplace_seller = $setup->getConnection()->newTable($setup->getTable('mgs_marketplace_seller'));

        
        $table_mgs_marketplace_seller->addColumn(
            'seller_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            array('identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,),
            'Entity ID'
        );
        

        
        $table_mgs_marketplace_seller->addColumn(
            'customer_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['unsigned' => true],
            'customer id'
        );
        

        
        $table_mgs_marketplace_seller->addColumn(
            'status',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            ['default' => '0','nullable' => False],
            'pending/approved/disapproved'
        );
        

        
        $table_mgs_marketplace_seller->addColumn(
            'created_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
            null,
            ['nullable' => False],
            'created at'
        );
        

        $table_mgs_marketplace_store = $setup->getConnection()->newTable($setup->getTable('mgs_marketplace_store'));

        
        $table_mgs_marketplace_store->addColumn(
            'store_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            array('identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,),
            'Entity ID'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'vendor_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => False,'unsigned' => true],
            'seller id'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'twiiter',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'twiiter link'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'facebook',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'facebook link'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'youtube',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'youtube link'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'pinterest',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'pinterest link'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'instagram',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'instagram link'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'google_plus',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'google plus link'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'vimeo',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'vimeo link'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'theme_background',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'theme background color'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'shop_title',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'shop_title'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'shop_logo',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'shop logo image'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'shop_cover',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'shop cover image'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'shop_locality',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'address of store'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'shop_description',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'shop description'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'shop_policy',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'shop policy'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'return_policy',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'return policy'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'country',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'shop country'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'meta_keywords',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'shop meta keywords'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'meta_description',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'shop meta description'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'profile_page_target_url',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'profile page real url'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'profile_page_request_url',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'profile page alias url'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'collection_page_target_url',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'collection page real url'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'collection_page_request_url',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'collection page alias url'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'review_page_target_url',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'review page real url'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'review_page_request_url',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'review page alias url'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'location_page_target_url',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'location page real url'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'location_page_request_url',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'location page alias url'
        );
        

        
        $table_mgs_marketplace_store->addColumn(
            'payment_information',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'payment information'
        );
        

        $table_mgs_marketplace_commission = $setup->getConnection()->newTable($setup->getTable('mgs_marketplace_commission'));

        
        $table_mgs_marketplace_commission->addColumn(
            'commission_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            array('identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,),
            'Entity ID'
        );
        

        
        $table_mgs_marketplace_commission->addColumn(
            'vendor_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => False,'unsigned' => true],
            'seller id'
        );
        

        
        $table_mgs_marketplace_commission->addColumn(
            'commission_rate',
            \Magento\Framework\DB\Ddl\Table::TYPE_FLOAT,
            null,
            ['default' => '0'],
            'commission rate'
        );
        

        
        $table_mgs_marketplace_commission->addColumn(
            'total_sale',
            \Magento\Framework\DB\Ddl\Table::TYPE_FLOAT,
            null,
            ['default' => '0'],
            'life time sale'
        );
        

        
        $table_mgs_marketplace_commission->addColumn(
            'received_amount',
            \Magento\Framework\DB\Ddl\Table::TYPE_FLOAT,
            null,
            ['default' => '0'],
            'received amount'
        );
        

        
        $table_mgs_marketplace_commission->addColumn(
            'commission_amount',
            \Magento\Framework\DB\Ddl\Table::TYPE_FLOAT,
            null,
            ['default' => '0'],
            'commission amount'
        );
        

        
        $table_mgs_marketplace_commission->addColumn(
            'remaining_amount',
            \Magento\Framework\DB\Ddl\Table::TYPE_FLOAT,
            null,
            ['default' => '0'],
            'remaining amount'
        );
        

        
        $table_mgs_marketplace_commission->addColumn(
            'last_paid_amount',
            \Magento\Framework\DB\Ddl\Table::TYPE_FLOAT,
            null,
            ['default' => '0'],
            'last paid amount'
        );
        

        $table_mgs_marketplace_transaction = $setup->getConnection()->newTable($setup->getTable('mgs_marketplace_transaction'));

        
        $table_mgs_marketplace_transaction->addColumn(
            'transaction_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            array('identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,),
            'Entity ID'
        );
        

        
        $table_mgs_marketplace_transaction->addColumn(
            'vendor_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => False],
            'seller id'
        );
        

        
        $table_mgs_marketplace_transaction->addColumn(
            'received_transaction_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'transaction id'
        );
        

        
        $table_mgs_marketplace_transaction->addColumn(
            'amount',
            \Magento\Framework\DB\Ddl\Table::TYPE_FLOAT,
            null,
            [],
            'amount of transaction'
        );
        

        
        $table_mgs_marketplace_transaction->addColumn(
            'type',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'type of transaction (manual/??)'
        );
        

        
        $table_mgs_marketplace_transaction->addColumn(
            'method',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'method of transaction (manual/??)'
        );
        

        
        $table_mgs_marketplace_transaction->addColumn(
            'read',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            ['default' => '0','nullable' => False],
            'was seen or not (0/1)'
        );
        

        
        $table_mgs_marketplace_transaction->addColumn(
            'created_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
            null,
            [],
            'created at'
        );
        

        $table_mgs_marketplace_review = $setup->getConnection()->newTable($setup->getTable('mgs_marketplace_review'));

        
        $table_mgs_marketplace_review->addColumn(
            'review_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            array('identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,),
            'Entity ID'
        );
        

        
        $table_mgs_marketplace_review->addColumn(
            'vendor_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => False,'unsigned' => true],
            'seller id'
        );
        

        
        $table_mgs_marketplace_review->addColumn(
            'price_rating',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            [],
            'price rating (1/2/3/4/5 stars)'
        );
        

        
        $table_mgs_marketplace_review->addColumn(
            'value_rating',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            [],
            'value_rating (1/2/3/4/5 stars)'
        );
        

        
        $table_mgs_marketplace_review->addColumn(
            'quantity_rating',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            [],
            'quantity rating (1/2/3/4/5 stars)'
        );
        

        
        $table_mgs_marketplace_review->addColumn(
            'review_summary',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'review summary'
        );
        

        
        $table_mgs_marketplace_review->addColumn(
            'review_content',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'review content'
        );
        

        
        $table_mgs_marketplace_review->addColumn(
            'customer_name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'customer submit the review'
        );
        

        
        $table_mgs_marketplace_review->addColumn(
            'status',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            ['default' => '0'],
            'whether reivew is seen or not or approved'
        );
        

        
        $table_mgs_marketplace_review->addColumn(
            'created_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
            null,
            [],
            'created at'
        );
        

        $setup->getConnection()->createTable($table_mgs_marketplace_review);

        $setup->getConnection()->createTable($table_mgs_marketplace_transaction);

        $setup->getConnection()->createTable($table_mgs_marketplace_commission);

        $setup->getConnection()->createTable($table_mgs_marketplace_store);

        $setup->getConnection()->createTable($table_mgs_marketplace_seller);

        $setup->endSetup();
    }
}
