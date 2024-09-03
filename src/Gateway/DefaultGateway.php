<?php

namespace SixBySix\RealtimeDespatch\Gateway;

use GuzzleHttp\Client;
use GuzzleHttp\Client as HttpClient;
use DOMDocument;
use Exception;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use SimpleXMLElement;

/**
 * Default Gateway.
 */
class DefaultGateway
{
    const API_ENDPOINT_INVENTORY_RETRIEVAL = 'remotewarehouse/inventory.xml';
    const API_ENDPOINT_PRODUCT_IMPORT = 'remotewarehouse/imports/importitems.xml';
    const API_ENDPOINT_PRODUCT_UPDATE = 'remotewarehouse/product/update.xml';
    const API_ENDPOINT_ORDER_IMPORT = 'remoteorder/imports/importitems.xml';
    const API_ENDPOINT_ORDER_CANCEL = 'remoteorder/order/cancel.xml';
    const API_ENDPOINT_ORDER_DETAIL = 'remoteorder/order/detail.xml';
    const API_ENDPOINT_ORDER_UPDATE = 'remoteorder/order/update.xml';
    const API_ENDPOINT_RETURN_IMPORT = 'remotewarehouse/imports/importitems.xml';

    /**
     * Api Client.
     *
     * @var HttpClient
     */
    protected HttpClient $_client;

    /**
     * Base URL.
     *
     * @var string
     */
    protected string $_baseUrl;

    /**
     * Default Options.
     *
     * @var array<string,array<string,string>>
     */
    protected array $_options;

    /**
     * Request Body.
     * @var SimpleXMLElement|null
     */
    protected ?SimpleXMLElement $_lastRequest;

    /**
     * Response Body.
     * @var SimpleXMLElement|null
     */
    protected ?SimpleXMLElement $_lastResponse;

    /**
     * Constructor
     *
     * @param string $baseUrl
     * @param array<string,array<string,string>> $options
     */
    public function __construct(string $baseUrl, array $options = array())
    {
        $this->_baseUrl = $baseUrl;
        $this->_options = $options;
    }

    /**
     * Sets the HTTP Client.
     * @param HttpClient $httpClient
     * @return $this
     */
    public function setHttpClient(Client $httpClient): DefaultGateway
    {
        $this->_client = $httpClient;
        return $this;
    }

    /**
     * Returns the last request.
     * @return SimpleXMLElement|null
     */
    public function getLastRequest(): ?SimpleXMLElement
    {
        return $this->_lastRequest;
    }

    /**
     * Sets the last request.
     * @param SimpleXMLElement|null $lastRequest
     * @return $this
     */
    public function setLastRequest(?SimpleXMLElement $lastRequest): DefaultGateway
    {
        $this->_lastRequest = $lastRequest;
        return $this;
    }

    /**
     * Returns the last response.
     * @return SimpleXMLElement|null
     */
    public function getLastResponse(): ?SimpleXMLElement
    {
        return $this->_lastResponse;
    }

    /**
     * Sets the last response.
     * @param SimpleXMLElement|null $lastResponse
     * @return $this
     */
    public function setLastResponse(?SimpleXMLElement $lastResponse): DefaultGateway
    {
        $this->_lastResponse = $lastResponse;
        return $this;
    }

    /**
     * Retrieve Inventory.
     * @return SimpleXMLElement
     */
    public function retrieveInventory(): SimpleXMLElement
    {
        $this->_client->get(
            $this->_createUrl(self::API_ENDPOINT_INVENTORY_RETRIEVAL)
        );

        return $this->getLastResponse();
    }

    /**
     * Import Products.
     * @param string $body
     * @return SimpleXMLElement
     */
    public function importProducts(string $body): SimpleXMLElement
    {
        $this->_client->post(
            $this->_createUrl(self::API_ENDPOINT_PRODUCT_IMPORT),
            [
                'body' => $body,
                'headers' => [
                    'Content-Type' => 'application/xml'
                ]
            ]
        );

        return $this->getLastResponse();
    }

    /**
     * Order Notification.
     *
     * @param string $orderId     Primary order ID (typically increment_id)
     * @param string $type        Notification Type
     * @param string|null $altOrderId  Alternative order ID
     * @return SimpleXMLElement
     */
    public function orderNotification(string $orderId, string $type, string $altOrderId = null): SimpleXMLElement
    {
        $query = [
            'thirdPartyReference' => $orderId,
            'event' => 'order.'.$type,
            'action' => $type
        ];

        if ($altOrderId) {
            $query['externalReference'] = $altOrderId;
        }

        $this->_client->post(
            $this->_createUrl(
                self::API_ENDPOINT_ORDER_UPDATE,
                [
                    'query' => $query,
                ]
            )
        );

        return $this->getLastResponse();
    }

    /**
     * Product Notification.
     * @param string $sku  Product SKU
     * @param string $type Notification Type
     * @return SimpleXMLElement
     */
    public function productNotification(string $sku, string $type): SimpleXMLElement
    {
        $this->_client->post(
            $this->_createUrl(
                self::API_ENDPOINT_PRODUCT_UPDATE,
                array(
                    'query' => array(
                        'thirdPartyReference' => $sku,
                        'event' => 'product.'.$type,
                        'action' => $type
                    )
                )
            )
        );

        return $this->getLastResponse();
    }

    /**
     * Cancel Order.
     * @param string $externalReference
     * @return SimpleXMLElement
     */
    public function cancelOrder(string $externalReference): SimpleXMLElement
    {
        $this->_client->post(
            $this->_createUrl(
                self::API_ENDPOINT_ORDER_CANCEL,
                array('query' => array('externalReference' => $externalReference))
            )
        );

        return $this->getLastResponse();
    }

    /**
     * Retrieve Order Details.
     * @param string $externalReference
     * @return SimpleXMLElement
     */
    public function retrieveOrderDetails(string $externalReference): SimpleXMLElement
    {
        $this->_client->post(
            $this->_createUrl(
                self::API_ENDPOINT_ORDER_DETAIL,
                [
                    'query' => [
                        'externalReference' => $externalReference
                    ]
                ]
            )
        );

        return $this->getLastResponse();
    }

    /**
     * Import Orders.
     * @param string $body
     * @return SimpleXMLElement
     */
    public function importOrders(string $body): SimpleXMLElement
    {
        $this->_client->post(
            $this->_createUrl(self::API_ENDPOINT_ORDER_IMPORT),
            [
                'body' => $body,
                'headers' => [
                    'Content-Type' => 'application/xml'
                ]
            ]
        );

        return $this->getLastResponse();
    }

    /**
     * Import Returns.
     * @param string $body
     * @return SimpleXMLElement
     */
    public function importReturns(string $body): SimpleXMLElement
    {
        $this->_client->post(
            $this->_createUrl(self::API_ENDPOINT_RETURN_IMPORT),
            [
                'body' => $body,
                'headers' => [
                    'Content-Type' => 'application/xml'
                ]
            ]
        );

        return $this->getLastResponse();
    }

    /**
     * Creates a new endpoint url.
     * @param string $resource
     * @param array<string,array<string,string>> $options
     * @return string
     */
    protected function _createUrl(string $resource, array $options = array()): string
    {
        $options = array_merge_recursive($this->_options, $options);

        return $this->_baseUrl.$resource.'?'.http_build_query($options['query']);
    }
}
