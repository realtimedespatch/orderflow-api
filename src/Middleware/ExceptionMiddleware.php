<?php

namespace SixBySix\RealtimeDespatch\Middleware;

use Buzz\Middleware\MiddlewareInterface as MiddlewareInterface;
use Exception;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use SimpleXMLElement;

class ExceptionMiddleware implements MiddlewareInterface
{
    /**
     * {@inheritdoc}
     */
    public function handleRequest(RequestInterface $request, callable $next)
    {
        return $next($request);
    }

    /**
     * {@inheritdoc}
     * @throws Exception
     */
    public function handleResponse(RequestInterface $request, ResponseInterface $response, callable $next)
    {
        try
        {
            if ($response->getStatusCode() >= 400) {
                throw new Exception($response->getBody(), 500);
            }

            $body = new SimpleXMLElement($response->getBody()->__toString());
            $h2 = (string) $body->body->h2;

            if (str_contains($h2, 'ERROR')) {
                throw new Exception($body->body->p.' '.$body->head->title, 500);
            }

            if ($body->exception) {
                throw new Exception($body->exception, $response->getStatusCode());
            }
        }
        catch (Exception $ex)
        {
            throw new Exception($ex->getMessage());
        }

        return $next($request, $response);
    }
}
