<?php

namespace Kd\MyModule\Controller\Index;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;

/**
 * Class Index
 */
class Index implements HttpGetActionInterface
{
    /**
     * @var PageFactory
     */
    private $pageFactory;

    /**
     * @param PageFactory $pageFactory
     * @param RequestInterface $request
     */
    public function __construct(PageFactory $pageFactory, RequestInterface $request)
    {
        $this->pageFactory = $pageFactory;
    }

    /**
     * @inheritdoc
     */
    public function execute()
    {
        $pageFactory = $this->pageFactory->create();
        $pageFactory->getConfig()->getTitle()->set('List Posts');

        return $pageFactory;
    }
}
