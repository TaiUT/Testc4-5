<?php
namespace Packt\Magenest\Model\ResourceModel;
class MagenestActor extends
    \magento\Framework\Model\ResourceModel\Db\AbstractDb {
    public function _construct() {
        $this->_init('packt_magenest_magenestactor', 'magenestactor_id');
    }
}