<?php

class AdminerIpRestriction
{
    public $allowList = array();

    public function __construct($ips)
    {
        $this->allowList = func_get_args();
    }

    public function login($login, $password)
    {
        $ip = $_SERVER['REMOTE_ADDR'];

        if (in_array($ip, $this->allowList) === true) {
            return true;
        } else {
            return false;
        }
    }
}
