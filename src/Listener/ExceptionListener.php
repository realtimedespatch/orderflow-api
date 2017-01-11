<?php

namespace SixBySix\RealtimeDespatch\Listener;

use Buzz\Listener\ListenerInterface;
use Buzz\Message\MessageInterface;
use Buzz\Message\RequestInterface;

class ExceptionListener implements ListenerInterface
{
    /**
     * {@inheritdoc}
     */
    public function preSend(RequestInterface $request)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function postSend(RequestInterface $request, MessageInterface $response)
    {
        try
        {
            if ($response->isClientError() || $response->isServerError() || $response->isInvalid()) {
                throw new \Exception($response->getContent(), 500);
            }

            $body = new \SimpleXMLElement($response->getContent());

            if (strpos($body->body->h2, 'ERROR') !== false) {
                throw new \Exception($body->body->p.' '.$body->head->title, 500);
            }

            if ($body->exception) {
                throw new \Exception($body->message, $response->getStatusCode());
            }
        }
        catch (\Exception $ex)
        {
            throw new \Exception($ex->getMessage());
        }
    }
}
