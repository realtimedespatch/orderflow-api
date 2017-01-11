<?php

namespace SixBySix\RealtimeDespatch\Document;

/**
 * Doc Builder Type.
 */
abstract class DocBuilderType
{
    /**
     * Doc Params
     *
     * @var array
     */
    protected $_params;

    /**
     * Constructor.
     *
     * @param array $params
     */
    public function __construct(array $params = array())
    {
        $this->_params = $params;
    }

    /**
     * Builds the request body as a dom document.
     *
     * @return \DOMDocument
     */
    public abstract function build();
}