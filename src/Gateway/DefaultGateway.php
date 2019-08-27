<?php

namespace SixBySix\RealtimeDespatch\Gateway;

use Buzz\Browser as HttpClient;
use Buzz\Middleware\MiddlewareInterface as MiddlewareInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

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
     * @var \Buzz\Browser
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
     * @var \DOMDocument
     */
    protected $_lastRequest;

    /**
     * Response Body.
     *
     * @var \DOMDocument
     */
    protected $_lastResponse;

    /**
     * Constructor
     *
     * @param \Buzz\Browser $client
     * @param string $baseUrl
     * @param array $options
     */
    public function __construct(HttpClient $client, $baseUrl, $options = array())
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
            $this->_lastRequest = new \SimpleXMLElement($request->getBody());
        }
        catch (\Exception $ex) {
            $this->_lastRequest = $next($request);
            return;
        }

        return $next($request);
    }

    /**
     * {@inheritdoc}
     */
    public function handleResponse(RequestInterface $request, ResponseInterface $response, callable $next)
    {
        $this->_lastResponse = new \SimpleXMLElement($response->getBody());

        return $next($request, $response);
    }

    /**
     * Returns the last request.
     *
     * @return \SimpleXMLElement
     */
    public function getLastRequest()
    {
        return $this->_lastRequest;
    }

    /**
     * Returns the lastresponse.
     *
     * @return \SimpleXMLElement
     */
    public function getLastResponse()
    {
        return $this->_lastResponse;
    }

    /**
     * Retrieve Inventory.
     *
     * @return \SimpleXMLElement
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
     * @return \SimpleXMLElement
     */
    public function importProducts($body)
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
     * @param string $incrementId Order Increment ID
     * @param string $type        Notification Type
     * @param int $entityId       Order Entity ID
     *
     * @return \SimpleXMLElement
     */
    public function orderNotification($incrementId, $type, $entityId = null)
    {
        $query = [
            'thirdPartyReference' => $incrementId,
            'event' => 'order.'.$type,
            'action' => $type
        ];

        if ($entityId) {
            $query['entityReference'] = $entityId;
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
     * @return \SimpleXMLElement
     */
    public function productNotification($sku, $type)
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
     * @return \SimpleXMLElement
     */
    public function cancelOrder($externalReference)
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
     * @return \SimpleXMLElement
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
     * @return \SimpleXMLElement
     */
    public function importOrders($body)
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
     * @return \SimpleXMLElement
     */
    public function importReturns($body)
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
     * @param array  $options
     *
     * @return string
     */
    protected function _createUrl($resource, $options = array())
    {
        $options = array_merge_recursive($this->_options, $options);

        return $this->_baseUrl.$resource.'?'.http_build_query($options['query']);
    }
}