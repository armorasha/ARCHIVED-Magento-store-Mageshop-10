<?php

namespace SimplifiedMagento\FirstModule\Model;

class HeavyService
{
    public function __construct()
    {
        echo "Heavy Service instantiated<br><br>";
    }

    public function printHeavyServiceMessage()
    {
        echo "message from HeavyService class";
    }
}
