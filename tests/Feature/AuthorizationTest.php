<?php

use Illuminate\Support\Facades\Route;

it('blocks unauthenticated access', function () {

    Route::get('/secure', function () {
        return 'ok';
    })->middleware(\App\Http\Middleware\InitializeAuth::class);

    $response = $this->getJson('/secure');

    $response->assertOk();
});
