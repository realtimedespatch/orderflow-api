<?php

namespace SixBySix\RealtimeDespatch\Gateway;

use Buzz\Browser as HttpClient;
use Buzz\Middleware\MiddlewareInterface as MiddlewareInterface;
use DOMDocument;
use Exception;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use SimpleXMLElement;

/**
 * Default Gateway.
 */
class DefaultGateway implements MiddlewareInterface
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
    protected $_client;

    /**
     * Base URL.
     *
     * @var string
     */
    protected $_baseUrl;

    /**
     * Default Options.
     *
     * @var array
     */
    protected $_options;

    /**
     * Request Body.
     *
     * @var DOMDocument
     */
    protected $_lastRequest;

    /**
     * Response Body.
     *
     * @var DOMDocument
     */
    protected $_lastResponse;

    /**
     * Constructor
     *
     * @param HttpClient $client
     * @param string $baseUrl
     * @param array $options
     */
    public function __construct(HttpClient $client, string $baseUrl, array $options = array())
    {
        $this->_client  = $client;
        $this->_baseUrl = $baseUrl;
        $this->_options = $options;

        $this->_client->addMiddleware($this);
    }

    /**
     * {@inheritdoc}
     */
    public function handleRequest(RequestInterface $request, callable $next)
    {
        $this->_lastRequest = null;

        try {
            $this->_lastRequest = new SimpleXMLElement($request->getBody());
        }
        catch (Exception $ex) {
            $this->_lastRequest = $next($request);
            return;
        }

        return $next($request);
    }

    /**
     * {@inheritdoc}
     * @throws Exception
     */
    public function handleResponse(RequestInterface $request, ResponseInterface $response, callable $next)
    {
        $body = (string) $response->getBody();

        $this->_lastResponse = new SimpleXMLElement($response->getBody());

        return $next($request, $response);
    }

    /**
     * Returns the last request.
     *
     * @return DOMDocument
     */
    public function getLastRequest()
    {
        return $this->_lastRequest;
    }

    /**
     * Returns the lastresponse.
     *
     * @return DOMDocument
     */
    public function getLastResponse()
    {
        return $this->_lastResponse;
    }

    /**
     * Retrieve Inventory.
     *
     * @return SimpleXMLElement
     */
    public function retrieveInventory()
    {
        $this->_client->get(
            $this->_createUrl(self::API_ENDPOINT_INVENTORY_RETRIEVAL)
        );

        return $this->getLastResponse();
    }

    /**
     * Import Products.
     *
     * @param string $body
     *
     * @return SimpleXMLElement
     */
    public function importProducts(string $body)
    {
        $this->_client->post(
            $this->_createUrl(self::API_ENDPOINT_PRODUCT_IMPORT),
            array('Content-Type' => 'application/xml'),
            $body
        );

        return $this->getLastResponse();
    }

    /**
     * Order Notification.
     *
     * @param string $orderId     Primary order ID (typically increment_id)
     * @param string $type        Notification Type
     * @param string|null $altOrderId  Alternative order ID
     *
     * @return SimpleXMLElement
     */
    public function orderNotification(string $orderId, string $type, string $altOrderId = null)
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
                array(
                    'query' => $query
                )
            )
        );

        return $this->getLastResponse();
    }

    /**
     * Product Notification.
     *
     * @param string $sku  Product SKU
     * @param string $type Notification Type
     *
     * @return SimpleXMLElement
     */
    public function productNotification(string $sku, string $type)
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
     *
     * @param string $externalReference
     *
     * @return SimpleXMLElement
     */
    public function cancelOrder(string $externalReference)
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
     *
     * @return SimpleXMLElement
     */
    public function retrieveOrderDetails($externalReference)
    {
        $this->_client->post(
            $this->_createUrl(
                self::API_ENDPOINT_ORDER_DETAIL,
                array('query' => array('externalReference' => $externalReference))
            )
        );

        return $this->getLastResponse();
    }

    /**
     * Import Orders.
     *
     * @param string $body
     *
     * @return SimpleXMLElement
     */
    public function importOrders(string $body)
    {
        $this->_client->post(
            $this->_createUrl(self::API_ENDPOINT_ORDER_IMPORT),
            array('Content-Type' => 'application/xml'),
            $body
        );

        return $this->getLastResponse();
    }

    /**
     * Import Returns.
     *
     * @param string $body
     *
     * @return SimpleXMLElement
     */
    public function importReturns(string $body)
    {
        $this->_client->post(
            $this->_createUrl(self::API_ENDPOINT_RETURN_IMPORT),
            array('Content-Type' => 'application/xml'),
            $body
        );

        return $this->getLastResponse();
    }

    /**
     * Creates a new endpoint url.
     *
     * @param string $resource
     * @param array $options
     *
     * @return string
     */
    protected function _createUrl(string $resource, array $options = array())
    {
        $options = array_merge_recursive($this->_options, $options);

        return $this->_baseUrl.$resource.'?'.http_build_query($options['query']);
    }
}
