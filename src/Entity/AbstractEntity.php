<?php

namespace SixBySix\RealtimeDespatch\Entity;

/**
 * Abstract Entity.
 */
abstract class AbstractEntity
{
    /**
     * Custom parameters.
     *
     * @var array
     */
    private $_customParams = array();

    /**
     * Gets a parameter value.
     *
     * @return mixed
     */
    public function getParam($key)
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
     *
     * @return SixBySix\RealtimeDespatch\Entity\AbstractEntity
     */
    public function setParam($key, $value)
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
     *
     * @return array
     */
    public function toArray($hideNull = false)
    {
        $reflect = new \ReflectionClass($this);
        $props   = $reflect->getProperties(\ReflectionProperty::IS_PUBLIC | \ReflectionProperty::IS_PROTECTED);
        $values  = array();

        foreach ($props as $prop) {
            $value = $this->getParam(str_replace("_",'', $prop->getName()));

            if ($hideNull && ! $value) {
                continue;
            }

            if ($value instanceof \SixBySix\RealtimeDespatch\Entity\AbstractEntity) {
                continue;
            }

            $values[str_replace('_','', $prop->getName())] = str_replace(array("\n","\r\n","\r"), '', $value);
        }

        return $values + $this->_customParams;
    }
}