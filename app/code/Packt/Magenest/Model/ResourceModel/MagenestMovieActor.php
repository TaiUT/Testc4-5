<?php
namespace Packt\Magenest\Model\ResourceModel;
class MagenestMovieActor extends
    \magento\Framework\Model\ResourceModel\Db\AbstractDb {
    public function _construct() {
        $this->_init('packt_magenest_magenestmovieactor', 'magenestmovieactor_id');
    }
}