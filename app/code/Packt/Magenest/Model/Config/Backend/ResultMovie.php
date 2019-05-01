<?php
namespace Packt\Magenest\Model\Config\Backend;

class ResultMovie  extends \Magento\Framework\App\Config\Value
{


    protected function _afterLoad()
    {
        $showdata = \Magento\Framework\App\ObjectManager::getInstance();
        $resource = $showdata->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        $sql = "select * from  packt_magenest_magenestmovie";
        $result = $connection->fetchAll($sql);
        $value = count($result);
        $this->setValue($value);
    }


}
