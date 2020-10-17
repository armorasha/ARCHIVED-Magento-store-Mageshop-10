<?php

namespace SimplifiedMagento\Database\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

use Magento\Framework\Db\Ddl\Table;
// use Magento\Framework\View\TemplateEngine\Xhtml\Compiler\Text;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        // addColumn(column_name_like_studentid_or_studentname,  datatype_like_text_or_int, length_like_40, other_attributes_array_like_NN_UN_UQ, column_comment)

        $table = $setup->getConnection()->newTable(

            $setup->getTable('affiliate_member')
        )->addColumn(
            'entity_id',
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'MEMBER ID'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'NAME OF MEMBER'
        )->addColumn(
            'address',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'ADDRESS OF MEMBER'
        )->addColumn(
            'status',
            Table::TYPE_BOOLEAN,
            10,
            ['nullable' => false, 'default' => false],
            'STATUS'
        )->addColumn(
            'created_at',
            Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
            'TIME CREATED'
        )->addColumn(
            'updated_at',
            Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => Table::TIMESTAMP_INIT_UPDATE],
            'TIME FOR UPDATE'
        )->setComment(
            'Affiliate Member table'

        );

        // setComment() method above is to set comment to the entire table

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
