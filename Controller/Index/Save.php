<?php

namespace Kd\MyModule\Controller\Index;

use Kd\MyModule\Model\PostFactory;
use Kd\MyModule\Model\ResourceModel\Post;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\AlreadyExistsException;
use Magento\Framework\App\Action\HttpPostActionInterface;

class Save implements HttpPostActionInterface
{
    private $request;
    protected $postFactory;
    protected $post;
    protected $actionFactory;
    private $resultRedirectFactory;

    public function __construct(RequestInterface $request, PostFactory $postFactory, Post $post, ResultFactory $resultFactory)
    {
        $this->request = $request;
        $this->postFactory = $postFactory;
        $this->post = $post;
        $this->resultRedirectFactory = $resultFactory;
    }

    /**
     * Execute save data
     *
     * @return ResponseInterface|ResultInterface|void
     * @throws AlreadyExistsException
     */
    public function execute()
    {
        if ($this->request->isPost()) {
            $input = $this->request->getPostValue();
            $post = $this->postFactory->create();

            if (!empty($input['editRecordId'])) {
                $post->setId($input['editRecordId']);
                $post->addData($input);
            } else {
                $post->addData($input);
            }

            $this->post->save($post);

            $resultRedirect = $this->resultRedirectFactory->create(ResultFactory::TYPE_REDIRECT);

            return $resultRedirect->setPath('mymodule/index/index');
        }
    }
}
