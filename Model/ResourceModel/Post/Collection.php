<?php

namespace Kd\MyModule\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Kd\MyModule\Model\Post', 'Kd\MyModule\Model\ResourceModel\Post');
    }
}
