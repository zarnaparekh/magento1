<?php


namespace SimplifiedMagento\Attribute\Model\Config;


use Magento\Eav\Model\Entity\Attribute\Backend\AbstractBackend;
use Magento\Framework\Exception\LocalizedException;

class Validation extends AbstractBackend
{
    public function validate($object)
    {
        /*if($object->getData($this->getAttribute()->getAttributeCode()) < 1)
            throw new LocalizedException(__("value should be more than 1"));
        return parent::validate($object); // TODO: Change the autogenerated stub*/
    }
}