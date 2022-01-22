<?php

include_once('IModule.php');

class FtpModule implements IModule
{
    public function setHost(string $host): void
    {
        print "FtpModule::setHost(): $host\n";
    }

    public function setUser(string|int $user): void
    {
        print "FtpModule::setUser(): $user\n";
    }

    public function execute(): void
    {

    }
}