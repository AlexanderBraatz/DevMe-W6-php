<?php

require __DIR__ . "/vendor/autoload.php";

// Create an class that represents a shopping basket. It should have a property, `items`, that keeps track of the items in the basket. It should have an `add` method to add items to the basket. It should have a `total` method that returns the value of all the items' prices. It should have a `items` method that returns an array of item names.


class Basket
{
    private $contents = [];

    public function add(BasketItem $BasketItem) : Basket
    {
        $this->contents[] = $BasketItem;
        return $this;
    }

    public function total() : string
    { 
        $prices = collect($this->contents)->reduce(fn($sum, $BasketItem) => $sum + $BasketItem->getPrice(), 0);
        if(preg_match("/\.\d$/","{$prices}") === 1){
            $prices = "{$prices}0";

        }else if(preg_match("/\.\d\d$/","{$prices}") === 0){
            $prices = "{$prices}.00";
        }
        return "£{$prices}";
    }

    public function items() : array
    {
       $receipt = collect($this->contents)->map(fn($BasketItem) => $BasketItem->getItem())->all();
       return $receipt;
    }
}

class BasketItem
{
    private $item;
    private $price;

    public function __construct(string $item, float $price)
    {
        $this->item  = $item;   
        $this->price = $price;
    }

    public function getItem() : string
    {
        return $this->item;
    }        

    public function getPrice() : float
    {
        return $this->price;
    }    
}

$basket = new Basket();

$item1 = new BasketItem("coffee", 3.50);
$item2 = new BasketItem("tea", 2.50);

$basket->add($item1);
$basket->add($item2);

dump($basket->total()); // £6.00
dump($basket->items()); // ["coffee","tea"]