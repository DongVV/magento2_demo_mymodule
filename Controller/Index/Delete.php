<?php

namespace Kd\MyModule\Controller\Index;

use Kd\MyModule\Model\PostFactory;
use Kd\MyModule\Model\ResourceModel\Post;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\ResultFactory;

class Delete implements HttpGetActionInterface
{
    protected $pageFactory;
    protected $request;

    protected $postFactory;
    private $post;
    private $resultRedirectFactory;

    public function __construct(RequestInterface $request, PostFactory $postFactory, Post $post, ResultFactory $resultFactory)
    {
        $this->request = $request;
        $this->postFactory = $postFactory;
        $this->post = $post;
        $this->resultRedirectFactory = $resultFactory;
    }

    public function execute()
    {
        $post = $this->postFactory->create();
        $post->setId($this->request->getParam('id'));

        $this->post->delete($post);

        $resultRedirect = $this->resultRedirectFactory->create(ResultFactory::TYPE_REDIRECT);

        return $resultRedirect->setPath('mymodule/index/index');
    }
}
