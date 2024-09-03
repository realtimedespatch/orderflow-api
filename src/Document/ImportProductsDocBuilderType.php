<?php

namespace SixBySix\RealtimeDespatch\Document;

use DOMDocument;
use SixBySix\RealtimeDespatch\Entity\Product;

/**
 * Import Products Doc Builder Type.
 */
class ImportProductsDocBuilderType extends DocBuilderType
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
            $this->_buildImport($product);
        }

        return $this->_doc;
    }

    /**
     * Builds the individual import lines.
     *
     * @param Product $product
     * @return void
     * @throws \DOMException
     */
    protected function _buildImport(Product $product): void
    {
        $import = $this->_doc->createElement('import');
        $import->setAttribute('type', 'product');
        $import->setAttribute('operation', 'insert');
        $import->setAttribute('externalReference', $product->getExternalReference());
        $this->_root->appendChild($import);
        $content = '';

        foreach ($product->toArray(true) as $key => $value) {
            $content .= $key."=".$value."\n";
        }

        $import->appendChild($import->ownerDocument->createCDATASection(substr($content, 0, -1)));
    }
}
