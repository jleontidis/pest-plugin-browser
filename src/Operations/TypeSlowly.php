<?php

declare(strict_types=1);

namespace Pest\Browser\Operations;

use Pest\Browser\Contracts\Operation;

final readonly class TypeSlowly implements Operation
{
    /**
     * Creates an operation instance.
     */
    public function __construct(
        private string $element,
        private string $text,
        private int $duration = 100,
    ) {
        //
    }

    /**
     * Compile the operation.
     */
    public function compile(): string
    {
        return "await page.locator('{$this->element}'); await page.keyboard.type('{$this->text}', { delay: {$this->duration} });";
    }
}
