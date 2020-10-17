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
        $affiliateMember = $this->affiliateMemberFactory->create();

        //let us load member_affiliate with the id 1. worked.
        // $member = $affiliateMember->load(1);
        // var_dump($member->getData());

        //to change address. worked.
        // $member->setAddress('new address');
        // $member->save();
        // var_dump($member->getData());

        //to create new member in db. worked.
        // $affiliateMember->addData(['name' => 'Rand', 'address' => 'different address', 'status' => true, 'phone_number' => '82940043']);
        // $affiliateMember->save();

        //to delete member with id 6 in db. worked.
        $member = $affiliateMember->load(6);
        $affiliateMember->delete();
    }
}
