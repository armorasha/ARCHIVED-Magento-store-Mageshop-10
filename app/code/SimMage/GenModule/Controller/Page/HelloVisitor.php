<?php

namespace SimMage\GenModule\Controller\Page;


// use Magento\Framework\App\Action\Context;
// use Magento\Framework\App\ResponseInterface;
// use SimplifiedMagento\FirstModule\Api\PencilInterface;
// use Magento\Vault\Api\PaymentTokenManagementInterface;
// use SimplifiedMagento\FirstModule\Model\PencilFactory;
// use Magento\Catalog\Model\ProductFactory;

class HelloVisitor extends \Magento\Framework\App\Action\Action
{
    // protected $pencilInterface;
    // protected  $paymentTokenManagement;
    // protected $pencilFactory;
    // protected $productFactory;
    // public function __construct(
    //     Context $context
    //     // ProductFactory $productFactory,
    //     // PencilFactory $pencilFactory,
    //     // PencilInterface $pencilInterface,
    //     // PaymentTokenManagementInterface $paymentTokenManagement


    // ) {
    //     // $this->pencilFactory = $pencilFactory;
    //     // $this->pencilInterface = $pencilInterface;
    //     // $this->paymentTokenManagement = $paymentTokenManagement;
    //     // $this->productFactory = $productFactory;
    //     parent::__construct($context);
    // }

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

        //       $pencil = $this->pencilFactory->create(array("name"=>"Bob", "school"=>"International College"));
        //       var_dump($pencil);
        //        $product = $this->productFactory->create()->load(1);
        //        $product->setName("Iphone 6");
        //        $productName = $product->getIdBySku("A00001");
        //echo $productName;
        echo "Main function" . "</br>";
    }
}
