<?php

namespace SixBySix\RealtimeDespatch\Service;

use Exception;
use SimpleXMLElement;
use SixBySix\RealtimeDespatch\Entity\Product;
use SixBySix\RealtimeDespatch\Entity\ProductCollection;
use SixBySix\RealtimeDespatch\Report\ImportReport;

/**
 * Product Service.
 */
class ProductService extends AbstractService
{
    /**
     * Notifies OrderFlow of a created product.
     *
     * @param string $sku
     * @return SimpleXMLElement
     * @throws Exception
     */
    public function notifyProductCreation(string $sku): SimpleXMLElement
    {
        $response = $this->_gateway->productNotification($sku, 'created');

        if (str_contains($response->__toString(), "Result 'no_operation' for product")) {
            throw new Exception($response->__toString());
        }

        return $response;
    }

    /**
     * Notifies OrderFlow of a product update.
     *
     * @param string $sku
     * @return SimpleXMLElement
     * @throws Exception
     */
    public function notifyProductUpdate(string $sku): SimpleXMLElement
    {
        $response = $this->_gateway->productNotification($sku, 'modified');

        if (str_contains($response->__toString(), "Result 'no_operation' for product")) {
            throw new Exception($response->__toString());
        }

        return $response;
    }

    /**
     * Updates a single existing product with RTD.
     * @param Product $product
     * @return ImportReport
     * @throws Exception
     */
    public function updateProduct(Product $product): ImportReport
    {
        $products = new ProductCollection;
        $products[] = $product;

        return $this->updateProducts($products);
    }

    /**
     * Updates a collection of products with RTD.
     *
     * @param ProductCollection $products
     * @return ImportReport
     * @throws Exception
     */
    public function updateProducts(ProductCollection $products): ImportReport
    {
        $xml = (string) $this->_getDocumentBuilder()->buildProductUpdate(
            array('products' => $products)
        )->saveXml();

        return $this->_createImportReport($this->_gateway->importProducts($xml));
    }

    /**
     * Imports a single product to RTD.
     *
     * @param Product $product
     * @return ImportReport
     * @throws Exception
     */
    public function importProduct(Product $product): ImportReport
    {
        $products = new ProductCollection;
        $products[] = $product;

        return $this->importProducts($products);
    }

    /**
     * Imports a collection of products to RTD.
     *
     * @param ProductCollection $products
     * @return ImportReport
     * @throws Exception
     */
    public function importProducts(ProductCollection $products): ImportReport
    {
        $xml = (string) $this->_getDocumentBuilder()->buildProductImport(
            array('products' => $products)
        )->saveXml();

        return $this->_createImportReport($this->_gateway->importProducts($xml));
    }

    /**
     * Merges a single product.
     *
     * @param Product $product
     * @return ImportReport
     * @throws Exception
     */
    public function mergeProduct(Product $product): ImportReport
    {
        $products = new ProductCollection;
        $products[] = $product;

        return $this->mergeProducts($products);
    }

    /**
     * Merges a collection of products to RTD.
     *
     * @param ProductCollection $products
     * @return ImportReport
     * @throws Exception
     */
    public function mergeProducts(ProductCollection $products): ImportReport
    {
        $xml = (string) $this->_getDocumentBuilder()->buildProductMerge(
            array('products' => $products)
        )->saveXml();

        return $this->_createImportReport($this->_gateway->importProducts($xml));
    }
}
