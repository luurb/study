<?php

use generatingObjects\prototype\EarthForest;
use generatingObjects\prototype\EarthPlains;
use generatingObjects\prototype\EarthSea;
use generatingObjects\prototype\TerrainFactory;

include_once('../../autoload.php');

$factory = new TerrainFactory(new EarthSea(1), new EarthPlains(),
new EarthForest);

print_r($factory->getSea());
print_r($factory->getPlains());
print_r($factory->getForest());

