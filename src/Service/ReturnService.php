<?php

namespace SixBySix\RealtimeDespatch\Service;

use SixBySix\RealtimeDespatch\Entity\RMA;
use SixBySix\RealtimeDespatch\Entity\RMACollection;

/**
 * Return Service.
 */
class ReturnService extends AbstractService
{
    /**
     * Imports a single return.
     *
     * @param \SixBySix\RealtimeDespatch\Entity\RMA $return
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReport
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
     * @param \SixBySix\RealtimeDespatch\Entity\RMACollection $returns
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReport
     */
    public function importReturns(RMACollection $returns)
    {
        $xml = $this->_getDocumentBuilder()->buildImportReturns(
            array('returns' => $returns)
        )->saveXml();

        return $this->_createImportReport($this->_gateway->importReturns($xml));
    }
}