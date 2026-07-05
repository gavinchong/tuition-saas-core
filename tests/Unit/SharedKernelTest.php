<?php

use Platform\Shared\Support\Id;

it('generates ulid', function () {

    expect(Id::new())->toBeString();
});
