<?php

namespace SixBySix\RealtimeDespatch\Entity;

use ReflectionClass;
use ReflectionProperty;

/**
 * Abstract Entity.
 */
abstract class AbstractEntity
{
    /**
     * Custom parameters.
     *
     * @var array<string,mixed>
     */
    private array $_customParams = [];

    /**
     * Gets a parameter value.
     *
     * @return mixed
     * @param string $key
     */
    public function getParam(string $key): mixed
    {
        $value = null;

        if (property_exists(get_class($this), '_'.$key)) {
            $value = $this->{'_'.$key};
        }
        else if (isset($this->_customParams[$key])) {
            $value = $this->_customParams[$key];
        }

        return $value;
    }

    /**
     * Sets a parameter value.
     * @param string $key
     * @param mixed $value
     * @return AbstractEntity
     */
    public function setParam(string $key, mixed $value): AbstractEntity
    {
        if (method_exists(get_class($this), 'set'.ucfirst($key))) {
            $this->{'set'.ucfirst($key)}($value);
        }
        else if (property_exists(get_class($this), '_'.$key)) {
            $this->{'_'.$key} = $value;
        }
        else {
            $this->_customParams[$key] = $value;
        }

        return $this;
    }

    /**
     * Returns the entity as an array.
     *
     * @param boolean $hideNull
     * @return array<string,mixed>
     */
    public function toArray(bool $hideNull = false): array
    {
        $reflect = new ReflectionClass($this);
        $props   = $reflect->getProperties(ReflectionProperty::IS_PUBLIC | ReflectionProperty::IS_PROTECTED);
        $values  = array();

        foreach ($props as $prop) {
            $value = $this->getParam(str_replace("_",'', $prop->getName()));

            if ($hideNull && ! $value) {
                continue;
            }

            if ($value instanceof AbstractEntity) {
                continue;
            }

            $values[str_replace('_','', $prop->getName())] = str_replace(array("\n","\r\n","\r"), '', $value);
        }

        return $values + $this->_customParams;
    }
}
