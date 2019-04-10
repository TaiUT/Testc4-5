<?php
namespace Packt\Magenest\Controller\Index;
use \magento\Framework\App\Action\Action;
class  Result extends Action

{


    public function execute()
    {
        $this->_view-> loadLayout();
        $this->_view-> renderLayout();
      //  $this->getdata();

    }
}