<?php

declare(strict_types=1);

use Platform\Foundation\Platform;

it('has version', function () {

    expect(Platform::version())

        ->toBe('1.0.0');

});
