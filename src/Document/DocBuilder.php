<?php

namespace SixBySix\RealtimeDespatch\Document;

use DOMDocument;

/**
 * Doc Builder.
 */
class DocBuilder
{
   /**
    * Doc Builder Type
    *
    * @var DocBuilderType
    */
    protected $_type;

    /**
     * Constructor.
     *
     * @param DocBuilderType $type
     */
    public function __construct(DocBuilderType $type)
    {
        $this->_type = $type;
    }

    /**
     * Builds the request body as a dom document.
     *
     * @return DOMDocument
     */
    public function build()
    {
        return $this->_type->build();
    }
}
