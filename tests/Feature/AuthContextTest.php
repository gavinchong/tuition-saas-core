<?php

use Illuminate\Support\Facades\Route;

it('initializes auth context', function () {

    Route::get('/auth-test', function () {
        return \Platform\Auth\Context\AuthContext::user();
    });

    $response = $this->getJson('/auth-test');

    $response->assertOk()
        ->assertJson([
            'id' => 'user-1',
        ]);
});
