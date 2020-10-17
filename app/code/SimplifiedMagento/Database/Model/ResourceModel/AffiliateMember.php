<?php

namespace SimplifiedMagento\Database\Model\ResourceModel;

class AffiliateMember extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('affiliate_member', 'entity_id');
    }
}
