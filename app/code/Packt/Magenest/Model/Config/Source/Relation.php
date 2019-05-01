<?php
namespace Packt\Magenest\Model\Config\Source;
class Relation implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            [
                'value' => '1',
                'label' => __('Show')
            ],
            [
                'value' => '2',
                'label' => __('not-Show')
            ],

        ];
    }
}

