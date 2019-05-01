<?php
 namespace Packt\Magenest\Model\Config\Backend;
 class ResultActor extends \Magento\Framework\App\Config\Value
 {
     public function _afterLoad()
     {
         $showdata = \Magento\Framework\App\ObjectManager::getInstance();
         $resource = $showdata->get('Magento\Framework\App\ResourceConnection');
         $connection = $resource->getConnection();
         $sql = "select * from  packt_magenest_magenestactor";
         $result = $connection->fetchAll($sql);
         $temp= count($result);
         $this->setValue($temp);
     }
 }
