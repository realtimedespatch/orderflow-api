<?php

namespace SixBySix\RealtimeDespatch\Document;

/**
 * Doc Builder.
 */
class DocBuilder
{
   /**
    * Doc Builder Type
    *
    * @var \SixBySix\RealtimeDespatch\Document\DocBuilderType
    */
    protected $_type;

    /**
     * Constructor.
     *
     * @param \SixBySix\RealtimeDespatch\Document\DocBuilderType $type
     */
    public function __construct(DocBuilderType $type)
    {
        $this->_type = $type;
    }

    /**
     * Builds the request body as a dom document.
     *
     * @return \DOMDocument
     */
    public function build()
    {
        return $this->_type->build();
    }
}