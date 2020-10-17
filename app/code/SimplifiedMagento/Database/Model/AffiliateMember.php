<?php

namespace SimplifiedMagento\Database\Model;

use Magento\Framework\Model\AbstractModel;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember as AffiliateMemberResource;
use SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface;


class AffiliateMember extends AbstractModel
{
    protected function _construct() // careful, this has single underscore as _construct, not __construct
    {
        $this->_init(AffiliateMemberResource::class);
    }


    /**
     * @return string
     */
    public function getName()
    {

        return $this->getData(AffiliateMemberInterface::NAME);
    }

    /**
     * @return boolean
     *
     */
    public function getStatus()
    {
        return $this->getData(AffiliateMemberInterface::STATUS);
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        // TODO: Implement getAddress() method.
        return $this->getData(AffiliateMemberInterface::ADDRESS);
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        // TODO: Implement getPhoneNumber() method.
        return $this->getData(AffiliateMemberInterface::PHONE_NUMBER);
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        // TODO: Implement getCreatedAt() method.
        return $this->getData(AffiliateMemberInterface::CREATED_AT);
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        // TODO: Implement getUpdatedAt() method.
        return $this->getData(AffiliateMemberInterface::UPDATED_AT);
    }

    public function getId()
    {
        // TODO: Implement getId() method.
        return $this->getData(AffiliateMemberInterface::ID);
    }

    /**
     * @param string $name
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setName($name)
    {
        // TODO: Implement setName() method.
        $this->setData(AffiliateMemberInterface::NAME, $name);
    }

    /**
     * @param boolean $status
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setStatus($status)
    {
        // TODO: Implement setStatus() method.
        $this->setData(AffiliateMemberInterface::STATUS, $status);
    }

    /**
     * @param string $phoneNumber
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setPhoneNumber($phoneNumber)
    {
        // TODO: Implement setPhoneNumber() method.
        $this->setData(AffiliateMemberInterface::PHONE_NUMBER, $phoneNumber);
    }

    /**
     * @param string $address
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setAddress($address)
    {
        // TODO: Implement setAddress() method.
        $this->setData(AffiliateMemberInterface::ADDRESS, $address);
    }

    /**
     * @param string $createdAt
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setCreatedAt($createdAt)
    {
        // TODO: Implement setCreatedAt() method.
        $this->setData(AffiliateMemberInterface::CREATED_AT, $createdAt);
    }

    /**
     * @param string $updatedAt
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setUpdatedAt($updatedAt)
    {
        // TODO: Implement setUpdatedAt() method.
        $this->setData(AffiliateMemberInterface::UPDATED_AT);
    }
}
