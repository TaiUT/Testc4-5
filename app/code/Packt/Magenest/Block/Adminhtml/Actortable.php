<?php

namespace Packt\Magenest\Block\Adminhtml;
class Actortable extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'Packt_Magenest';
        $this->_controller = 'adminhtml_actortable';
        parent::_construct();
    }
}