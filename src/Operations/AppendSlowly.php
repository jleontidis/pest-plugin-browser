<?php

declare(strict_types=1);

namespace Pest\Browser\Operations;

use Pest\Browser\Contracts\Operation;

/**
 * @internal
 */
final readonly class AppendSlowly implements Operation
{
    /**
     * Creates an operation instance.
     */
    public function __construct(
        private string $selector,
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
        $selector = json_encode($this->selector);

        return "await page.locator({$selector}).press('End'); await page.keyboard.type('{$this->text}', { delay: {$this->duration} });";
    }
}
