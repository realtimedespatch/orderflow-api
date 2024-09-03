<?php

namespace SixBySix\RealtimeDespatch\Report;

/**
 * Import Report.
 */
class ImportReport
{
    /**
     * Lines.
     * @var array<ImportReportLine>
     */
    protected array $_lines;

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
     * @return array<ImportReportLine>
     */
    public function getLines(): array
    {
        return $this->_lines;
    }

    /**
     * Adds a new line to the report.
     *
     * @param ImportReportLine $line
     * @return ImportReport
     */
    public function addLine(ImportReportLine $line): ImportReport
    {
        $this->_lines[] = $line;
        return $this;
    }

    /**
     * Returns whether the import was a success.
     *
     * @return boolean
     */
    public function isSuccess(): bool
    {
        return ! $this->hasFailures() && ! $this->hasDuplicates();
    }

    /**
     * Returns the number of successes.
     *
     * @return integer
     */
    public function getNumberOfSuccesses(): int
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
     * @return integer
     */
    public function getNumberOfUniqueSuccesses(): int
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
     * @return boolean
     */
    public function hasFailures(): bool
    {
        return $this->getNumberOfFailures() > 0;
    }

    /**
     * Returns the number of failures.
     * @return integer
     */
    public function getNumberOfFailures(): int
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
     * @return boolean
     */
    public function hasDuplicates(): bool
    {
        return $this->getNumberOfDuplicates() > 0;
    }

    /**
     * Returns the number of duplicates.
     * @return integer
     */
    public function getNumberOfDuplicates(): int
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
     * @return string|null
     */
    public function getImportType(): ?string
    {
        if ( ! isset($this->_lines[0])) {
            return null;
        }

        return ucwords($this->_lines[0]->getOperation());
    }

    /**
     * Returns the entity type of the import.
     * @return string|null
     */
    public function getEntityType(): ?string
    {
        if ( ! isset($this->_lines[0])) {
            return null;
        }

        return ucwords($this->_lines[0]->getType());
    }
}
