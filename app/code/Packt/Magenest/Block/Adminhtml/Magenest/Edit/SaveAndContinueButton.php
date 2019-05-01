<?php

namespace Packt\Magenest\Block\Adminhtml\Magenest\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class SaveAndContinueButton
 */
class SaveAndContinueButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * @return array
     */
    public function getButtonData()
    {

        return [
            'label' => __('Save'),
            'class' => 'action-secondary',
            'data_attribute' => ['mage-init' => ['button' => ['event' => 'saveAndContinueEdit'],],],
            'sort_order' => 80,
        ];
    }

}