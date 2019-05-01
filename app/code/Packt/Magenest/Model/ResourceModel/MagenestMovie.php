<?php
namespace Packt\Magenest\Model\ResourceModel;
class MagenestMovie extends
    \magento\Framework\Model\ResourceModel\Db\AbstractDb {
    public function _construct() {
        $this->_init('packt_magenest_magenestmovie', 'magenestmovie_id');
        $this->_isPkAutoIncrement = false;
    }
}