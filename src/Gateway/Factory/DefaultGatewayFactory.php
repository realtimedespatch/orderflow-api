<?php

namespace SixBySix\RealtimeDespatch\Gateway\Factory;

use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;
use SixBySix\RealtimeDespatch\Api\Credentials;
use SixBySix\RealtimeDespatch\Gateway\DefaultGateway;
use GuzzleHttp\Client as HttpClient;

/**
 * Default Gateway Factory.
 * @package SixBySix\RealtimeDespatch\Gateway\Factory
 */
class DefaultGatewayFactory
{
    /**
     * Creates a new default gateway instance
     *
     * @param Credentials $credentials
     * @return DefaultGateway
     */
    public function create(Credentials $credentials): DefaultGateway
    {
        $params = array(
            'query' => array(
                'channel'      => $credentials->getChannel(),
                'organisation' => $credentials->getOrganisation()
            )
        );

        $gateway = new DefaultGateway($credentials->getEndpoint(), $params);

        $stack = HandlerStack::create();
        $stack->setHandler(new CurlHandler());

        // stores the last request
        $stack->push(Middleware::mapRequest(function (RequestInterface $request) use ($gateway) {
            $gateway->setLastRequest(new \SimpleXMLElement($request->getBody()));
            return $request;
        }));

        // stores the last response
        $stack->push(Middleware::mapResponse(function ($response) use ($gateway) {

            if ($response->getStatusCode() >= 400) {
                throw new \Exception($response->getBody(), 500);
            }

            $body = new \SimpleXMLElement($response->getBody()->__toString());
            $h2 = (string)$body->body->h2;

            if (str_contains($h2, 'ERROR')) {
                throw new \Exception($body->body->p . ' ' . $body->head->title, 500);
            }

            if ($body->exception) {
                throw new \Exception($body->exception, $response->getStatusCode());
            }

            $gateway->setLastResponse(new \SimpleXMLElement($response->getBody()));
            return $response;
        }));

        $client = new HttpClient([
            'base_uri' => $credentials->getEndpoint(),
            'handler' => $stack,
            'auth' => [
                $credentials->getUsername(),
                $credentials->getPassword()
            ]
        ]);

        $gateway->setHttpClient($client);

        return $gateway;
    }
}
