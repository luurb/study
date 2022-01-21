<?php

include_once('ProcessSale.php');
include_once('Product.php');

$logger = function ($product) {
    print "logging ({$product->name})\n";
};

$processor = new ProcessSale();
$processor->registerCallback($logger);

$processor->sale(new Product("shoes", 6));
print "\n";
$processor->sale(new Product("coffee", 3));
