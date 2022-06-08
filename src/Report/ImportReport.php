<?php

namespace SixBySix\RealtimeDespatch\Report;

/**
 * Import Report.
 */
class ImportReport
{
    /**
     * Lines.
     *
     * @var ImportReportLine $lines
     */
    protected $_lines;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->_lines = array();
    }

    /**
     * Returns the current report lines.
     *
     * @return array
     */
    public function getLines()
    {
        return $this->_lines;
    }

    /**
     * Adds a new line to the report.
     *
     * @param ImportReportLine $line
     *
     * @return ImportReport
     */
    public function addLine(ImportReportLine $line)
    {
        $this->_lines[] = $line;

        return $this;
    }

    /**
     * Returns whether the import was a success.
     *
     * @return boolean
     */
    public function isSuccess()
    {
        return ! $this->hasErrors() && ! $this->hasDuplicates();
    }

    /**
     * Returns the number of successes.
     *
     * @return integer
     */
    public function getNumberOfSuccesses()
    {
        $count = 0;

        foreach ($this->_lines as $line) {
            if ($line->isSuccess()) {
                $count += 1;
            }
        }

        return $count;
    }

    /**
     * Returns the number of successes.
     *
     * @return integer
     */
    public function getNumberOfUniqueSuccesses()
    {
        $ids   = array();
        $count = 0;

        foreach ($this->_lines as $line) {
            if ($line->isSuccess() && ! isset($ids[$line->getExternalReference()])) {
                $count += 1;
                $ids[$line->getExternalReference()] = $line->getExternalReference();
            }
        }

        return $count;
    }

    /**
     * Checks whether the import contained failures.
     *
     * @return boolean
     */
    public function hasFailures()
    {
        return $this->getNumberOfFailures() > 0;
    }

    /**
     * Returns the number of failures.
     *
     * @return integer
     */
    public function getNumberOfFailures()
    {
        $count = 0;

        foreach ($this->_lines as $line) {
            if ($line->isFailure()) {
                $count += 1;
            }
        }

        return $count;
    }

    /**
     * Checks whether the import contained duplicates.
     *
     * @return boolean
     */
    public function hasDuplicates()
    {
        return $this->getNumberOfDuplicates() > 0;
    }

    /**
     * Returns the number of duplicates.
     *
     * @return integer
     */
    public function getNumberOfDuplicates()
    {
        $count = 0;

        foreach ($this->_lines as $line) {
            if ($line->isDuplicate()) {
                $count += 1;
            }
        }

        return $count;
    }

    /**
     * Returns the import type.
     *
     * @return string
     */
    public function getImportType()
    {
        if ( ! isset($this->_lines[0])) {
            return;
        }

        return ucwords($this->_lines[0]->getOperation());
    }

    /**
     * Returns the entity type of the import.
     *
     * @return string
     */
    public function getEntityType()
    {
        if ( ! isset($this->_lines[0])) {
            return;
        }

        return ucwords($this->_lines[0]->getType());
    }
}
