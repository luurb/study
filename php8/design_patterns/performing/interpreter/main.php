<?php

use performing\interpreter\InterpreterContext;
use performing\interpreter\LiteralExpression;

include_once('../../autoload.php');

$context = new InterpreterContext();
$literal = new LiteralExpression('four');
$literal->interpret($context);
print $context->lookUp($literal) . "\n";