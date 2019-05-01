<?php

namespace Packt\Magenest\Block\Adminhtml\Movietable;

use Magento\Backend\Block\Widget\Grid as WidgetGrid;

class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    /**
     * @var \Packt\Magenest\Model\Resource\Subscription\Collection
     */
    protected $_subscriptionCollection;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param \Packt\Magenest\Model\ResourceModel\Subscription\Collection $subscriptionCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Packt\Magenest\Model\ResourceModel\Subscription\Collection $subscriptionCollection,
        array $data = []
    )
    {
        $this->_subscriptionCollection = $subscriptionCollection;
        parent::__construct($context, $backendHelper, $data);
        $this->setEmptyText(__('No Subscriptions Found'));
    }

    /**
     * Initialize the subscription collection
     *
     * @return WidgetGrid
     */
    protected function _prepareCollection()
    {
        $this->setCollection($this->_subscriptionCollection);
        return parent::_prepareCollection();
    }

    /**
     * Prepare grid columns
     *
     * @return $this
     */
    protected function _prepareColumns()
    {
        $this->addColumn(
            'movie_id',
            ['header' => __('Id'),
                'index' => 'movie_id',
            ]
        );
        $this->addColumn(
            'name',
            [
                'header' => __('Name'),
                'index' => 'name',
            ]
        );
        $this->addColumn(
            'discription',
            [
                'header' => __('Description'),
                'index' => 'description',
            ]
        );
        $this->addColumn(
            'rating',
            [
                'header' => __('Rating'),
                'index' => 'rating',
            ]
        );
        $this->addColumn(
            'director_id',
            [
                'header' => __('Director'),
                'index' => 'director_id',
            ]
        );
        return $this;
    }
}