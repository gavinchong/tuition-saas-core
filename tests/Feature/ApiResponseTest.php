<?php

use Platform\Shared\Application\ApiResponse;

it('returns success format', function () {

    $response = ApiResponse::success(['id' => 1]);

    expect($response['success'])->toBeTrue();
    expect($response['data']['id'])->toBe(1);
});
