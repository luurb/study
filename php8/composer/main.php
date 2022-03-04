<?php

use classes\Example;
use classes\library\Book;
use classes\Shop;

require_once('vendor/autoload.php');

$example = new Example();
$example->example();
$book = new Book();
$book->hello();
$shop = new Shop();
$shop->shop();