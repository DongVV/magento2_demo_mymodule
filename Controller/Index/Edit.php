<?php

namespace Kd\MyModule\Controller\Index;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;

class Edit implements HttpGetActionInterface
{
    protected $pageFactory;

    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {
        $pageFactory = $this->pageFactory->create();
        $pageFactory->getConfig()->getTitle()->set('List Posts');

        return $pageFactory;
    }
}
