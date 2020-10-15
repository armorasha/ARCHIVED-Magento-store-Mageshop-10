<?php

namespace SimplifiedMagento\FirstModule\Model;

// this PencilFactory is what Magento will automatically create if we don’t write this PencilFactory.php class file

// With Magento, you don’t have to write any of these Factory classes. Magento will automatically generate it for us in generated/code/SimplifiedMagento/FirstModule/Model/PencilFactory.php. 

// We can actually delete this PencilFactory.php class file (in FirstModule/Model folder), and without changing anything else, the existing code will work just fine.

class PencilFactory
{
    private $objectManager;
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    public function create(array $data)
    {
        return $this->objectManager->create('SimplifiedMagento\FirstModule\Api\PencilInterface', $data);
    }
}
