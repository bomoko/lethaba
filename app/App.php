<?php namespace Lethaba;

use Bomoko\Lethaba\DIContainer;

/**
 * Lethaba App Controller
 * Provides the Entry Point for the entire application
 * Regiters the DIContainer
 */

 class App {
 
    private $dic = null;

    public function __construct() {
        $this->dic = new DIContainer;
    }
    
    public function getDic() {
        return $this->dic;
    }


 }