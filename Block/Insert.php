<?php

namespace Kd\MyModule\Block;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\View\Element\Template\Context;

class Insert extends \Magento\Framework\View\Element\Template
{
    protected $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;

        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->pageFactory->create();
    }
}
