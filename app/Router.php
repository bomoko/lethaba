<?php namespace Lethaba;


class Router
{
    protected $routes = [];

    public function __construct()
    {

    }

    public function registerGet($path, $function)
    {
        $this->routes[$path] = $function;
    }

    public function hasRoute($path)
    {
        if(isset($this->routes[$path]))
        {
            return TRUE;
        }

        return FALSE;
    }

    public function matchRoute($path)
    {
        if(in_array($path, array_keys($this->routes)))
        {
            if(is_callable($this->routes[$path]))
            {
                return ($this->routes[$path])();
            }
        }
    }

}