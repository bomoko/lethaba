<?php namespace Lethaba;

use Bomoko\Lethaba\DIContainer;

/**
 * Lethaba App Controller
 * Provides the Entry Point for the entire application
 * Regiters the DIContainer
 */

 class App {
 
    private $dic = null;

    private function __construct()
    {
        $this->dic = new DIContainer;
    }
    
    public static run()
    {
        $instance = new App;
        $instance->init();
        $instance->handleRequest();
    }

    private function init() //Note that the distinction between init() and run() probably makes more sense when this pattern is implemented in statically typed languages
    {
        //Setup goes here
    }

 }