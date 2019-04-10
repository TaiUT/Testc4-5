<?php
namespace Packt\Magenest\Model\ResourceModel\MagenestActor;
namespace Packt\Magenest\Model\ResourceModel\MagenestMovie;
namespace Packt\Magenest\Model\ResourceModel\MagenestDirector;
namespace Packt\Magenest\Model\ResourceModel\MagenestMovieActor;


/**
 * Subscription Collection
 */
class Collection extends
    \magento\Framework\Model\ResourceModel\Db\Collection\
    AbstractCollection {
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct() {
        $this->_init('Packt\Magenest\Model\MagenestActor', 'Packt\Magenest\Model\ResourceModel\MagenestActor');
        $this->_init('Packt\Magenest\Model\MagenestMovie', 'Packt\Magenest\Model\ResourceModel\MagenestMovie');
        $this->_init('Packt\Magenest\Model\MagenestDirector', 'Packt\Magenest\Model\ResourceModel\MagenestDirector');
        $this->_init('Packt\Magenest\Model\MagenestMovieActor', 'Packt\Magenest\Model\ResourceModel\MagenestMovieActor');



    }
}