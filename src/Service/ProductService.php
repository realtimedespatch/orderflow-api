<?php

namespace SixBySix\RealtimeDespatch\Service;

use SixBySix\RealtimeDespatch\Entity\Product;
use SixBySix\RealtimeDespatch\Entity\ProductCollection;

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
     * @return \SimpleXMLElement
     */
    public function notifyProductCreation($sku)
    {
        $response = $this->_gateway->productNotification($sku, 'created');

        if (strstr($response->__toString(), "Result 'no_operation' for product")) {
            throw new \Exception($response->__toString());
        }

        return $response;
    }

    /**
     * Notifies OrderFlow of a product update.
     *
     * @param string $sku
     *
     * @return \SimpleXMLElement
     */
    public function notifyProductUpdate($sku)
    {
        $response = $this->_gateway->productNotification($sku, 'modified');

        if (strstr($response->__toString(), "Result 'no_operation' for product")) {
            throw new \Exception($response->__toString());
        }

        return $response;
    }

    /**
     * Updates a single existing product with RTD.
     *
     * @param \SixBySix\RealtimeDespatch\Entity\Product $product
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReport
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
     * @param \SixBySix\RealtimeDespatch\Entity\ProductCollection $products
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReport
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
     * @param \SixBySix\RealtimeDespatch\Entity\Product $product
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReport
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
     * @param \SixBySix\RealtimeDespatch\Entity\ProductCollection $products
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReport
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
     * @param \SixBySix\RealtimeDespatch\Entity\Product $product
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReport
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
     * @param \SixBySix\RealtimeDespatch\Entity\ProductCollection $products
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReport
     */
    public function mergeProducts(ProductCollection $products)
    {
        $xml = $this->_getDocumentBuilder()->buildProductMerge(
            array('products' => $products)
        )->saveXml();

        return $this->_createImportReport($this->_gateway->importProducts($xml));
    }
}