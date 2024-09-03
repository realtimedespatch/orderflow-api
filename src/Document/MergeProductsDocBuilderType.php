<?php

namespace SixBySix\RealtimeDespatch\Document;

use DOMDocument;
use SixBySix\RealtimeDespatch\Entity\Product;

/**
 * Merge Products Doc Builder Type.
 */
class MergeProductsDocBuilderType extends DocBuilderType
{
    /**
     * {@inheritdoc}
     * @throws \DOMException
     */
    public function build(): DOMDocument
    {
        $this->_doc   = new DOMDocument('1.0', 'UTF-8');
        $this->_root  = $this->_doc->appendChild($this->_doc->createElement('imports'));

        foreach ($this->_params['products'] as $product) {
            $this->_buildMerge($product);
        }

        return $this->_doc;
    }

    /**
     * Builds the individual import lines.
     *
     * @param Product $product
     *
     * @return void
     * @throws \DOMException
     */
    protected function _buildMerge(Product $product): void
    {
        $import = $this->_doc->createElement('import');
        $import->setAttribute('type', 'product');
        $import->setAttribute('operation', 'merge');
        $import->setAttribute('externalReference', $product->getExternalReference());
        $this->_root->appendChild($import);

        $content = "";

        foreach ($product->toArray(true) as $key => $value) {
            $content .= $key."=".$value."\n";
        }

        $import->appendChild($import->ownerDocument->createCDATASection(substr($content, 0, -1)));
    }
}
