<?php

use enterprise\registry\Registry;

include_once('Registry.php');
include_once('Request.php');

$reg = Registry::instance();
print_r($reg->getRequest());