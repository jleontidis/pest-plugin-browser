<?php

declare(strict_types=1);

namespace Pest\Browser\Operations;

use Pest\Browser\Contracts\Operation;

/**
 * @internal
 */
final readonly class ClickLink implements Operation
{
    /**
     * Creates an operation instance.
     */
    public function __construct(
        private string $text,
        private string $element = 'a',
    ) {
        //
    }

    /**
     * Compile the operation.
     */
    public function compile(): string
    {
        return "await page.locator('{$this->element}').filter({ hasText: /{$this->text}/i }).click();";
    }
}
