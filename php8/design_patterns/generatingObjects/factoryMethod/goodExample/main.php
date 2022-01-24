<?php

include_once('../../../autoload.php');

use generatingObjects\factoryMethod\goodExample\BloggsCommsManager;
use generatingObjects\factoryMethod\goodExample\MegaCommsManager;

$mgr = new BloggsCommsManager();
print $mgr->getHeaderText();
print $mgr->getApptEncoder()->encode();
print $mgr->getFooterText();

echo "<br />";

$mgr = new MegaCommsManager();
print $mgr->getHeaderText();
print $mgr->getApptEncoder()->encode();
print $mgr->getFooterText();
