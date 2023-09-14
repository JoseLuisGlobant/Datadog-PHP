<?php

namespace SkyBilling\App;

class Service
{
    public function helloWorld()
    {
        return 'Hello world';
    }

    public function get($key)
    {
        return "$key";
    }

}