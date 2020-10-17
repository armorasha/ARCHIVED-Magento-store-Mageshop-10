<?php

namespace SimplifiedMagento\RequestFlow\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

// for response types
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\Controller\Result\RedirectFactory;

class ResponseType extends Action
{
    protected $pageFactory;
    protected $jsonFactory;
    protected $raw;
    protected $forwardFactory;
    protected $redirectFactory;

    public function __construct(
        Context $context,
        Pagefactory $pageFactory,
        JsonFactory $jsonFactory,
        Raw $raw,
        ForwardFactory $forwardFactory,
        RedirectFactory $redirectFactory
    ) {
        $this->pageFactory = $pageFactory;
        $this->jsonFactory = $jsonFactory;
        $this->raw = $raw;
        $this->forwardFactory = $forwardFactory;
        $this->redirectFactory = $redirectFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        // 1. page
        // return $this->pageFactory->create(); //worked

        // 2. json
        // return $this->jsonFactory->create()->setData(['samplekey' => 'samplevalue']); //worked. simple.
        // return $this->jsonFactory->create()->setData(['samplekey' => 'samplevalue', 'samplekey2' => ['samplevalue1', 'samplevalue2']]); //worked. complex.

        // 3. raw (string)
        // $result = $this->raw->setContents('some string content');
        // return $result; //worked.

        // 4. forward (internal redirect without changing url)
        // in this exercise, we redirect our controller to a custom 404 page we did previously, without changing the url.
        // $result = $this->forwardFactory->create();
        // $result->setModule('noroutefound')->setController('page')->forward('customnoroute');
        // return $result; //worked

        // 5. redirect (Actual redirect with change in url)
        $result = $this->redirectFactory->create();
        $result->setPath('noroutefound/page/customnoroute');
        return $result; //worked
    }
}
