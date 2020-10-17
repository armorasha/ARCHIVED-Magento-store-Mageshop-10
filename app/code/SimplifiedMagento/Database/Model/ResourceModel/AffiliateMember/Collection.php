<?php

namespace SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use SimplifiedMagento\Database\Model\AffiliateMember;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember as AffiliateMemberResource;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'entity_id';

    protected function _construct() // _ not __
    {
        parent::_construct();
        // here first parameter is Model and second parameter is ResourceModel
        $this->_init(AffiliateMember::class, AffiliateMemberResource::class);
    }
}
