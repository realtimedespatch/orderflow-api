<?php

namespace SixBySix\RealtimeDespatch\Service;

use SixBySix\RealtimeDespatch\Entity\InventoryLine;
use SixBySix\RealtimeDespatch\Entity\InventoryLineCollection;

/**
 * Inventory Service.
 */
class InventoryService extends AbstractService
{
    /**
     * Retrieves the current inventory.
     *
     * @return InventoryLineCollection
     */
    public function retrieveInventory()
    {
        $response   = $this->_gateway->retrieveInventory();
        $collection = new InventoryLineCollection;

        foreach ($response->children() as $child) {
            $inventoryLine = new InventoryLine;

            foreach ($child->attributes() as $key => $value) {
                $inventoryLine->setParam($key, $value);
            }

            $collection[] = $inventoryLine;
        }

        return $collection;
    }
}
