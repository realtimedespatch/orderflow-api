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
     *
     * @return SimpleXMLElement
     * @throws Exception
     * @throws Exception
     * @throws Exception
     */
    public function notifyProductCreation(string $sku)
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
     *
     * @return SimpleXMLElement
     * @throws Exception
     * @throws Exception
     * @throws Exception
     */
    public function notifyProductUpdate(string $sku)
    {
        $response = $this->_gateway->productNotification($sku, 'modified');

        if (str_contains($response->__toString(), "Result 'no_operation' for product")) {
            throw new Exception($response->__toString());
        }

        return $response;
    }

    /**
     * Updates a single existing product with RTD.
     *
     * @param Product $product
     *
     * @return ImportReport
     */
    public function updateProduct(Product $product)
    {
        $products = new ProductCollection;
        $products[] = $product;

        return $this->updateProducts($products);
    }

    /**
     * Updates a collection of products with RTD.
     *
     * @param ProductCollection $products
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReportFactor
     */
    public function updateProducts(ProductCollection $products)
    {
        $xml = $this->_getDocumentBuilder()->buildProductUpdate(
            array('products' => $products)
        )->saveXml();

        return $this->_createImportReport($this->_gateway->importProducts($xml));
    }

    /**
     * Imports a single product to RTD.
     *
     * @param Product $product
     *
     * @return ImportReport
     */
    public function importProduct(Product $product)
    {
        $products = new ProductCollection;
        $products[] = $product;

        return $this->importProducts($products);
    }

    /**
     * Imports a collection of products to RTD.
     *
     * @param ProductCollection $products
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReportFactor
     */
    public function importProducts(ProductCollection $products)
    {
        $xml = $this->_getDocumentBuilder()->buildProductImport(
            array('products' => $products)
        )->saveXml();

        return $this->_createImportReport($this->_gateway->importProducts($xml));
    }

    /**
     * Merges a single product.
     *
     * @param Product $product
     *
     * @return ImportReport
     */
    public function mergeProduct(Product $product)
    {
        $products = new ProductCollection;
        $products[] = $product;

        return $this->mergeProducts($products);
    }

    /**
     * Merges a collection of products to RTD.
     *
     * @param ProductCollection $products
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReportFactor
     */
    public function mergeProducts(ProductCollection $products)
    {
        $xml = $this->_getDocumentBuilder()->buildProductMerge(
            array('products' => $products)
        )->saveXml();

        return $this->_createImportReport($this->_gateway->importProducts($xml));
    }
}
