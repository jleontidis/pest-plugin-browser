<?php

declare(strict_types=1);

test('types some text into the input with a delay', function (): void {
    $this->visit('/test/form-inputs')
        ->clear('#email')
        ->typeSlowly('#email', 'jane.doe@pestphp.com', 100)
        ->assertInputValue('#email', 'jane.doe@pestphp.com');
});
