<?php

declare(strict_types=1);

test('appends text to the input with a delay', function (): void {
    $this->visit('/test/form-inputs')
        ->type('#email', 'jane.doe')
        ->assertInputValue('#email', 'jane.doe')
        ->appendSlowly('#email', '@pestphp.com', 100)
        ->assertInputValue('#email', 'jane.doe@pestphp.com');
});
