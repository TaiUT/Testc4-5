<?php
namespace Packt\Magenest\Model\Config\Backend;
class ReloadPage extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        location.reload(true);
    }
}

