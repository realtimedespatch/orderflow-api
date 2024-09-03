<?php

namespace SixBySix\RealtimeDespatch\Document;

use DOMDocument;
use Exception;

/**
 * Doc Factory.
 */
class DocFactory
{
    const REQUEST_BUILDER_TYPE_UPDATE_PRODUCTS = 'UpdateProducts';
    const REQUEST_BUILDER_TYPE_IMPORT_PRODUCTS = 'ImportProducts';
    const REQUEST_BUILDER_TYPE_MERGE_PRODUCTS  = 'MergeProducts';
    const REQUEST_BUILDER_TYPE_IMPORT_ORDERS   = 'ImportOrders';
    const REQUEST_BUILDER_TYPE_IMPORT_RETURNS  = 'ImportReturns';

    /**
     * Creates a new request builder instance
     *
     * @param string $type
     * @param array<string,mixed> $params
     * @return DOMDocument
     * @throws Exception
     */
    public function build(string $type, array $params = array()): DOMDocument
    {
        $class = "\SixBySix\RealtimeDespatch\Document\\".$type."DocBuilderType";

        if ( ! class_exists($class, true)) {
            throw new Exception('Builder does not exist');
        }

        /** @var DocBuilderType $class */
        $docBuilderType = new $class($params);
        $builder = new DocBuilder($docBuilderType);

        return $builder->build();
    }

    /**
     * Builds a product update document.
     *
     * @param array<string,mixed> $params
     * @return DOMDocument
     * @throws Exception
     */
    public function buildProductUpdate(array $params = array()): DOMDocument
    {
        return $this->build(
            self::REQUEST_BUILDER_TYPE_UPDATE_PRODUCTS,
            $params
        );
    }

    /**
     * Builds a product import document.
     *
     * @param array<string,mixed> $params
     * @return DOMDocument
     * @throws Exception
     */
    public function buildProductImport(array $params = array()): DOMDocument
    {
        return $this->build(
            self::REQUEST_BUILDER_TYPE_IMPORT_PRODUCTS,
            $params
        );
    }

    /**
     * Builds a product merge document.
     *
     * @param array<string,mixed> $params
     * @return DOMDocument
     * @throws Exception
     */
    public function buildProductMerge(array $params = array()): DOMDocument
    {
        return $this->build(
            self::REQUEST_BUILDER_TYPE_MERGE_PRODUCTS,
            $params
        );
    }

    /**
     * Builds an import orders document.
     *
     * @param array<string,mixed> $params
     * @return DOMDocument
     * @throws Exception
     */
    public function buildImportOrders(array $params = array()): DOMDocument
    {
        return $this->build(
            self::REQUEST_BUILDER_TYPE_IMPORT_ORDERS,
            $params
        );
    }

    /**
     * Builds an import returns document.
     *
     * @param array<string,mixed> $params
     * @return DOMDocument
     * @throws Exception
     */
    public function buildImportReturns(array $params = array()): DOMDocument
    {
        return $this->build(
            self::REQUEST_BUILDER_TYPE_IMPORT_RETURNS,
            $params
        );
    }
}
