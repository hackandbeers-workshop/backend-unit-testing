<?php
require_once './Item.php';

class Order
{
    protected $items;

    public function __construct()
    {
        $this->items = array();
    }

    public function addItems(Item $item, $quantity = 1)
    {
        $this->items[] = array(
            'item' => $item,
            'quantity' => $quantity
        );
    }

    public function getTotalAmount()
    {
        $total = 0;

        foreach ($this->items as $row) {
            $total += $row['item']->getPrice() * $row['quantity'];
        }

        return $total;
    }

    public function getItemSummary()
    {
        $summary = '';
        
        foreach ($this->items as $row) {
            $summary .= sprintf(
                "\n%s: %d x %d = $ %d", 
                $row['item']->getDescription(), 
                $row['quantity'], 
                $row['item']->getPrice(), 
                $row['item']->getPrice() * $row['quantity']
            );
        }

        return $summary;
    }

    public function getSummary()
    {
        $summary = $this->getItemSummary();
        $summary .= sprintf("\nTotal owed is: $%d\n", $this->getTotalAmount());

        return $summary;
    }

}
