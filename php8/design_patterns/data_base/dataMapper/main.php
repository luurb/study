<?php

use data_base\dataMapper\Registry;
use data_base\dataMapper\Venue;
use data_base\dataMapper\VenueMapper;

require_once('../../autoload.php');

$mapper = new VenueMapper();
$venue = $mapper->find(1);
print_r($venue);

$venue = new Venue(-1, "The Likey Lounge");
// add the object to the database
$mapper->insert($venue);
// find the object again – just to prove it works!
$venue = $mapper->find($venue->getId());
print_r($venue);
// alter our object
$venue->setName("The Bibble Beer Likey Lounge");
// call update to enter the amended data
$mapper->update($venue);
// once again, go back to the database to prove it worked
$venue = $mapper->find($venue->getId());
print_r($venue);

echo "<br /><br />";

///////////////////
$reg = Registry::instance();

$collection = $reg->getVenueCollection();
$collection->add(new Venue(-1, "Loud and Thumping"));
$collection->add(new Venue(-1, "Eeezy"));
$collection->add(new Venue(-1, "Duck and Badger"));

foreach ($collection as $venue) {
    print $venue->getName() . "\n";
}