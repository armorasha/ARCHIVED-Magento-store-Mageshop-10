<?php

namespace SimplifiedMagento\Attribute\Setup;

// use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    private $eavSetupFactory;

    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'custom_eav',
            [
                'group' => 'Content', // this 'Content' section where our new attribute 'Custom EAV' will be located in. Go to Admin portal > Catalog > Products (adding attribute to Product::ENTITY) > Add Products > See 'Content' section there to find our attribute 'Custom EAV' there.
                'type' => 'text',
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL, // scope is global since our attributes is to appear throughout the store.
                'backend' => \SimplifiedMagento\Attribute\Model\Config\Validation::class,
                // 'frontend' => '',
                'label' => 'Custom EAV', // this is how the label is visible to us
                'input' => 'text', // text is html textbox input
                // 'class' => '',
                // 'source' => '',
                'visible' => true,
                'required' => true,
                // 'user_defined' => true,
                // 'default' => '',
                'searchable' => false,
                // 'filterable' => false,
                // 'comparable' => false,
                // 'visible_on_front' => false,
                'used_in_product_listing' => true,
                // 'unique' => false,
                // 'apply_to' => 'simple'
            ]
        );

        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'member_type',
            [
                'group' => 'Content', // this 'Content' section where our new attribute 'Custom EAV' will be located in. Go to Admin portal > Catalog > Products (adding attribute to Product::ENTITY) > Add Products > See 'Content' section there to find our attribute 'Custom EAV' there.
                'type' => 'text',
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL, // scope is global since our attributes is to appear throughout the store.
                'label' => 'Member Type', // this is how the label is visible to us
                'input' => 'select', // select-option(html dropdown) input
                'source' => \SimplifiedMagento\Attribute\Model\Config\Options::class,
                'visible' => true,
                'required' => true,
                'searchable' => false,
                'used_in_product_listing' => true
            ]
        );


        $setup->endSetup();
    }
}
