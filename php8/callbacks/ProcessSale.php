<?php

include_once('Product.php');

class ProcessSale
{
    private array $callbacks;

    public function registerCallback(callable $callback): void
    {
        $this->callbacks[] = $callback;
    }

    public function sale(Product $product): void
    {
        print "{$product->name}: processinig \n";
        foreach ($this->callbacks as $callback) {
            call_user_func($callback, $product);
        }
    }
}