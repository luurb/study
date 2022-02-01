<?php

use enterprise\pageController\AddVenueController;

require_once('../../autoload.php');

$addvenue = new AddVenueController();
$addvenue->init();
$addvenue->process();