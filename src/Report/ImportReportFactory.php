<?php

namespace SixBySix\RealtimeDespatch\Report;

use SixBySix\RealtimeDespatch\Report\ImportReport;
use SixBySix\RealtimeDespatch\Report\ImportReportLine;

/**
 * Import Report Factory.
 */
class ImportReportFactory
{
    /**
     * Creates a new gateway instance
     *
     * @param \SimpleXMLElement $response
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReport
     */
    public function createFromResponse(\SimpleXMLElement $response)
    {
        $report = new ImportReport;

        foreach ($response->importSuccesses->children() as $lineData) {
            $reportLine = $this->_createLine($lineData);
            $reportLine->setIsSuccess(true);
            $report->addLine($reportLine);
        }

        foreach ($response->importFailures->children() as $lineData) {
            $reportLine = $this->_createLine($lineData);
            $reportLine->setIsFailure(true);
            $reportLine->setParam('failureDetail', $lineData->failureDetail);
            $reportLine->setParam('failureMessage', $lineData->failureMessage);
            $report->addLine($reportLine);
        }

        foreach ($response->importDuplicates->children() as $lineData) {
            $reportLine = $this->_createLine($lineData);
            $reportLine->setIsDuplicate(true);
            $reportLine->setParam('duplicateDetail', $lineData->duplicateDetail);
            $reportLine->setParam('duplicateMessage', $lineData->duplicateMessage);
            $report->addLine($reportLine);
        }

        return $report;
    }

    /**
     * Creates a new import report line.
     *
     * @param mixed $lineData
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReportLine
     */
    protected function _createLine($lineData)
    {
        $reportLine = new ImportReportLine;

        foreach ($lineData->attributes() as $key => $value) {
            $reportLine->setParam($key, (string) $value);
        }

        return $reportLine;
    }
}