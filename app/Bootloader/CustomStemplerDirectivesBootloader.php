<?php

declare(strict_types=1);

namespace App\Bootloader;

use App\Stempler\FrameworkDirectives;
use App\Stempler\PhpDirectives;
use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Stempler\Bootloader\StemplerBootloader as BaseStemplerBootloader;

final class CustomStemplerDirectivesBootloader extends Bootloader
{
    public function boot(BaseStemplerBootloader $stempler): void
    {
        $stempler->addDirective(PhpDirectives::class);
        $stempler->addDirective(FrameworkDirectives::class);
    }
}
