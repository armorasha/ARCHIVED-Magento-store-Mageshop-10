<?php

/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 1/1/2020
 * Time: 8:09 AM
 */

namespace SimplifiedMagento\FirstModule\Controller\Page;


class HelloWorld extends \Magento\Framework\App\Action\Action
{


    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */


    public function execute()
    {

        echo "Main function" . "</br>";
    }
}
