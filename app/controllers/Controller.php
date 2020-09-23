<?php


class Controller
{
    public function __construct()
    {

    }

    public function __call($method,$params)
    {
        throw new Exception("Call to undefined method $method in ".get_class($this));
    }
}