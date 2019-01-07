<?php
namespace MGS\Marketplace\Model\Config\Source;

class ProductTypeForSeller implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [['value' => '', 'label' => __('')]];
    }

    public function toArray()
    {
        return ['' => __('')];
    }
}
