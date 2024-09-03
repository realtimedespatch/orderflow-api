<?php

namespace SixBySix\RealtimeDespatch\Service;

use Exception;
use SimpleXMLElement;
use SixBySix\RealtimeDespatch\Gateway\DefaultGateway;

use SixBySix\RealtimeDespatch\Document\DocFactory;
use SixBySix\RealtimeDespatch\Report\ImportReport;
use SixBySix\RealtimeDespatch\Report\ImportReportFactory;

/**
 * Abstract Service.
 */
abstract class AbstractService
{
    /**
     * Gateway.
     */
     protected DefaultGateway $_gateway;

     /**
      * Constructor.
      *
      * @param DefaultGateway $gateway
      */
     public function __construct(DefaultGateway $gateway)
     {
         $this->_gateway = $gateway;
     }

     /**
      * Returns the current import report builder.
      *
      * @param SimpleXMLElement $response
      * @return ImportReport
      */
     protected function _createImportReport(SimpleXMLElement $response): ImportReport
     {
        $importReportFactory = new ImportReportFactory;
        return $importReportFactory->createFromResponse($response);
     }

     /**
      * Returns the current document builder.
      * @return DocFactory
      */
     protected function _getDocumentBuilder(): DocFactory
     {
        return new DocFactory;
     }

     /**
      * Returns the latest request body.
      * @return string|false
      */
     public function getLastRequestBody(): string|false
     {
         return $this->_gateway->getLastRequest()->saveXML();
     }

     /**
      * Returns the latest response body.
      * @return string|false
      */
     public function getLastResponseBody(): string|false
     {
         return $this->_gateway->getLastResponse() ? $this->_gateway->getLastResponse()->saveXML() : '';
     }
}
