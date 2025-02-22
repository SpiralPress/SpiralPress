<?php

declare(strict_types=1);

namespace App\Stempler;

use Spiral\Stempler\Directive\AbstractDirective;

final class FrameworkDirectives extends AbstractDirective
{
    public function renderSpiralVersion(): string
    {
        return '<?php echo \App\Kernel::VERSION; ?>';
    }
}
