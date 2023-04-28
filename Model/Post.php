<?php

namespace Kd\MyModule\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = 1;

    protected function _construct()
    {
        $this->_init('Kd\MyModule\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues(): array
    {
        $values = [];

        return $values;
    }
}
