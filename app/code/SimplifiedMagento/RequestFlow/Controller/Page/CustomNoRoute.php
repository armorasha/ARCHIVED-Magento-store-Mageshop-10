<?php

namespace SimplifiedMagento\RequestFlow\Controller\Page;

use Magento\Framework\App\ResponseInterface;

class CustomNoRoute extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        echo "custom 404 page";
    }
}
