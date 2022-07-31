<?php
// phpcs:ignore
namespace App\Models;

// phpcs:ignore
class ShoppingList
{
    private array $_list = [];
    
    /**
     * addItem
     *
     * @param  mixed $item  item to add
     * @return bool         return true on successful add
     */
    public function addItem(string $item): bool
    {
        array_push($this->_list, $item);
        return true;
    }
    
        
    /**
     * addItems
     *
     * @param  mixed $items items to add
     * @return bool         return true on successful add
     */
    public function addItems(array $items): bool
    {
        $arrayLength = count($items);
       for ($i = 0; $i<$arrayLength; $i++) {
            array_push($this->_list, $items[$i]);
        }
        return true;
    }
}
