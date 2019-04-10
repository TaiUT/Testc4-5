<?php
    namespace Packt\Magenest\Controller\Index;
    class Redirect extends \magento\Framework\App\Action\Action
    {
        public function execute()
        {
            $this->_redirect('ShowData');
//              $this->_forward('ShowData');
        }
    }