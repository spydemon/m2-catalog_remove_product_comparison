<?php

namespace Spydemon\CatalogRemoveProductComparison\Block;

use \Magento\Catalog\Block\Product\View\AddTo\Compare as InheritedClass;

/**
 * Class CompareOnProductView
 *
 * We sort of disable this block for avoiding the product comparator icon to be displayed on product listings, and at
 * other places.
 */
class CompareOnProductView extends InheritedClass
{

    /**
     * Nothing will be displayed here.
     *
     * @return false
     */
    protected function _toHtml()
    {
        return false;
    }
}
