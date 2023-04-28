<?php

namespace Kd\MyModule\Block;

use Kd\MyModule\Model\ResourceModel\Post\Collection;
use Magento\Framework\View\Element\Template\Context;

class Index extends \Magento\Framework\View\Element\Template
{
    private $postCollection;
    public function __construct(Context $context, Collection $postCollection)
    {
        $this->postCollection = $postCollection;

        return parent::__construct($context);
    }

    public function getResult()
    {
        return $this->postCollection->load();
    }
}
