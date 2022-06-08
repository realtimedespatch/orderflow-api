<?php

namespace SixBySix\RealtimeDespatch\Document;

use DOMDocument;
use SixBySix\RealtimeDespatch\Entity\RMA;

/**
 * Import Returns Doc Builder Type.
 */
class ImportReturnsDocBuilderType extends DocBuilderType
{
    /**
     * {@inheritdoc}
     * @throws \DOMException
     */
    public function build()
    {
        $this->_doc  = new DOMDocument('1.0', 'UTF-8');
        $this->_root = $this->_doc->appendChild($this->_doc->createElement('imports'));

        foreach ($this->_params['returns'] as $return) {
            $this->_buildImport($return);
        }

        return $this->_doc;
    }

    /**
     * Builds an individual import line.
     *
     * @param RMA $return
     *
     * @return void
     * @throws \DOMException
     * @throws \DOMException
     * @throws \DOMException
     */
    protected function _buildImport(RMA $return)
    {
        $import = $this->_root->appendChild($this->_doc->createElement('import'));

        $import->setAttribute('type', 'return');
        $import->setAttribute('operation', 'insert');
        $import->setAttribute('externalReference', $return->getExternalReference());

        $content = $this->_buildParams($return->toArray(true));
        $content .= $this->_buildReturnLines($return->getLines());

        $import->appendChild($import->ownerDocument->createCDATASection($content));
    }

    /**
     * Builds the return params.
     *
     * @param array $params
     *
     * @return string
     */
    protected function _buildParams(array $params)
    {
        $content = '';

        foreach ($params as $key => $value) {
            if (is_array($value)) {
                continue;
            }

            $content .= 'return.'.$key."=".$value."\n";
        }

        return $content;
    }

    /**
     * Builds the return lines.
     *
     * @param array $returnLines
     *
     * @return string
     */
    protected function _buildReturnLines(array $returnLines)
    {
        $content = '';

        foreach ($returnLines as $index => $line) {
            $lineIndex = $index + 1;
            foreach ($line->toArray(true) as $key => $value) {
                $content  .= 'returnLine.'.$lineIndex.'.'.$key."=".$value."\n";
            }
        }

        return $content;
    }
}
