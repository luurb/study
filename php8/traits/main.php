<?php

spl_autoload_register(function($class_name) {
    include_once str_replace("\\", "/", $class_name) . ".php";
}); 

$p = new ShopProduct();
print $p->calculateTax(100) . "\n";
print $p->generateId() . "\n";

$u = new UtilityService();
print $u->calculateTax(50) . "\n";
print $u->basicTax(50) . "\n";