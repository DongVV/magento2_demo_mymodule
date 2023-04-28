<?php

namespace Kd\MyModule\Block;

use Kd\MyModule\Model\PostFactory;
use Kd\MyModule\Model\ResourceModel\Post;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Edit extends Template
{
    protected $postFactory;
    private $post;

    public function __construct(Context $context, PostFactory $postFactory, Post $post)
    {
        $this->postFactory = $postFactory;
        $this->post = $post;

        return parent::__construct($context);
    }

    public function getEditRecord()
    {
        $post = $this->postFactory->create();
        $this->post->load($post, $this->_request->getParam('id'));

        return $post;
    }
}
