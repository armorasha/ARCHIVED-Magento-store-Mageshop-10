<?php

namespace SimplifiedMagento\Database\Setup;


use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '0.0.2', '<')) {
            $setup->getConnection()->insert(

                $setup->getTable('affiliate_member'),
                ['name' => 'Ade', 'status' => true, 'address' => 'no 15, Dubai', 'phone_number' => '924324233']

                //$setup->getConnection()->quoteInto('entity_id =?', 3)
            );
        }


        $setup->endSetup();
    }
}
