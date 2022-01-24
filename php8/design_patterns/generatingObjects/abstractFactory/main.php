<?php

include_once('../../autoload.php');

use generatingObjects\abstractFactory\BloggsCommsManager;

$mgr = new BloggsCommsManager();
print $mgr->getHeaderText();
print $mgr->make(BloggsCommsManager::CONTACT)->encode();
print $mgr->getFooterText();
