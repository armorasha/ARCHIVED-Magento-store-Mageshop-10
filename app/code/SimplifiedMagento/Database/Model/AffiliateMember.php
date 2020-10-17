<?php

namespace SimplifiedMagento\Database\Model;

use Magento\Framework\Model\AbstractModel;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember as AffiliateMemberResource;

class AffiliateMember extends AbstractModel
{
    protected function _construct() // careful, this has single underscore as _construct, not __construct
    {
        $this->_init(AffiliateMemberResource::class);
    }
}
