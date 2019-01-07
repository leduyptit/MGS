<?php


namespace MGS\Marketplace\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{

    /**
     * {@inheritdoc}
     */
    public function upgrade(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $setup->startSetup();
        if (version_compare($context->getVersion(), "1.0.0", "<")) {
            $quote = 'quote';
            $orderTable = 'sales_order';

            $setup->getConnection()
                ->addColumn(
                    $setup->getTable($quote),
                    'mgs_store',
                    [
                        'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                        'comment' =>'MGS Seller store'
                    ]
                );
            
            $setup->getConnection()
                ->addColumn(
                    $setup->getTable($orderTable),
                    'mgs_store',
                    [
                        'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                        'comment' =>'MGS Seller store'
                    ]
                );
        }
        if (version_compare($context->getVersion(), "1.0.1", "<")) {
            $columns = array(
                array(
                    'name' => 'twitter_visibility',
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    'comment' => 'twitter visibility'
                ),
                array(
                    'name' => 'facebook_visibility',
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    'comment' => 'facebook visibility'
                ),
                array(
                    'name' => 'youtube_visibility',
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    'comment' => 'youtube visibility'
                ),
                array(
                    'name' => 'pinterest_visibility',
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    'comment' => 'pinterest visibility'
                ),
                array(
                    'name' => 'instagram_visibility',
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    'comment' => 'instagram visibility'
                ),
                array(
                    'name' => 'googleplus_visibility',
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    'comment' => 'googleplus visibility'
                ),
                array(
                    'name' => 'vimeo_visibility',
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    'comment' => 'vimeo visibility'
                )
            );
            foreach($columns as $column)
            {
                $setup->getConnection()
                    ->addColumn(
                        $setup->getTable('mgs_marketplace_store'),
                        $column['name'],
                        [
                            'type' => $column['type'],
                            'comment' => $column['comment']
                        ]
                    );
            }
        }
        $setup->endSetup();
    }
}
