<?php

namespace SimplifiedMagento\RequestFlow\Controller\Page;

use Magento\Framework\App\RequestInterface;

class CustomNoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface
{
    public function process(RequestInterface $request)
    {
        $request->setRouteName('noroutefound')->setControllerName('page')->setActionName('customnoroute');
        return true;
    }
}
