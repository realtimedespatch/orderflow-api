<?php

namespace SixBySix\RealtimeDespatch\Document;

use DOMDocument;
use DOMElement;

/**
 * Doc Builder Type.
 */
abstract class DocBuilderType
{
    protected DOMDocument $_doc;
    protected \DOMNode $_root;

    /**
     * Doc Params
     *
     * @var array<string,mixed>
     */
    protected array $_params;

    /**
     * Constructor.
     *
     * @param array<string,mixed> $params
     */
    public function __construct(array $params = array())
    {
        $this->_params = $params;
    }

    /**
     * Builds the request body as a dom document.
     *
     * @return DOMDocument
     */
    public abstract function build(): DOMDocument;
}
