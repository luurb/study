<?php

namespace performing\observer;

class SecurityMonitor extends LoginObserver
{
    public function doUpdate(Login $login): void
    {
        $status = $login->getStatus();
        if ($status[0] == Login::LOGIN_WRONG_PASS) {
            print __CLASS__. ": sending mail to sysadmin\n";
        }
    }
}