<?php

namespace Kd\MyModule\Controller\Test;

class HelloWorld implements \Magento\Framework\App\ActionInterface
{
    public function execute()
    {
        echo "123123";
        return 'hello world';
    }
}
