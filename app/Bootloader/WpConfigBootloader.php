<?php

namespace App\Bootloader;

use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Boot\DirectoriesInterface;

class WpConfigBootloader extends Bootloader {
    public function __construct(
        private readonly DirectoriesInterface $dirs
    )
    {
        
    }
    
    public function boot() {
        // define WordPress root directory
        define('ABSPATH', $this->dirs->get('root'));
    }
}
