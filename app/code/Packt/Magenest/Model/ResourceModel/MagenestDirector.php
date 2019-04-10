<?php
namespace Packt\Magenest\Model\ResourceModel;
class MagenestDirector extends
    \magento\Framework\Model\ResourceModel\Db\AbstractDb {
    public function _construct() {
        $this->_init('packt_magenest_magenestdirector', 'magenestdirector_id');
    }
}