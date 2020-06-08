<?php

namespace Spydemon\CatalogRemoveProductComparison\Block;

use \Magento\Catalog\Block\Product\ProductList\Item\AddTo\Compare as InheritedClass;

/**
 * Class CompareOnProductList
 *
 * We sort of disable this block for avoiding the product comparator icon to be displayed on product listings, and at
 * other places.
 */
class CompareOnProductList extends InheritedClass
{

    /**
     * Nothing will be rendered here.
     *
     * @return false
     */
    protected function _toHtml()
    {
        return false;
    }
}
