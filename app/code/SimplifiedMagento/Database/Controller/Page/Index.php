<?php

namespace SimplifiedMagento\Database\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use SimplifiedMagento\Database\Model\AffiliateMemberFactory;

class Index extends Action
{

    protected $affiliateMemberFactory;

    public function __construct(Context $context, AffiliateMemberFactory $affiliateMemberFactory)
    {
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        parent::__construct($context);
    }


    public function execute()
    {
        //let us load member_affiliate with the id 1
        $affiliateMember = $this->affiliateMemberFactory->create();
        $member = $affiliateMember->load(1);
        var_dump($member->getData());
    }
}
