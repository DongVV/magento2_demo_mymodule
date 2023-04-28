<?php

namespace Kd\MyModule\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Result\PageFactory;

class Insert implements HttpGetActionInterface
{
    private $pageFactory;

    public function __construct(PageFactory $pageFactory, RequestInterface $request)
    {
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {
        $resultPage = $this->pageFactory->create();
        $resultPage->getConfig()->getTitle()->set(__('Insert Posts'));

        return $resultPage;
    }
}
