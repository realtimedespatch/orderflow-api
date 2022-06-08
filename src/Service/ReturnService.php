<?php

namespace SixBySix\RealtimeDespatch\Service;

use SixBySix\RealtimeDespatch\Entity\RMA;
use SixBySix\RealtimeDespatch\Entity\RMACollection;
use SixBySix\RealtimeDespatch\Report\ImportReport;

/**
 * Return Service.
 */
class ReturnService extends AbstractService
{
    /**
     * Imports a single return.
     *
     * @param RMA $return
     *
     * @return ImportReport
     */
    public function importReturn(RMA $return)
    {
        $returns = new RMACollection;
        $returns[] = $return;

        return $this->importReturns($returns);
    }

    /**
     * Imports a collection of returns.
     *
     * @param RMACollection $returns
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReportFactor
     */
    public function importReturns(RMACollection $returns)
    {
        $xml = $this->_getDocumentBuilder()->buildImportReturns(
            array('returns' => $returns)
        )->saveXml();

        return $this->_createImportReport($this->_gateway->importReturns($xml));
    }
}
