<?php

use Illuminate\Support\Facades\Route;

it('formats exception response', function () {

    Route::get('/fail', function () {
        throw new InvalidArgumentException('Broken!');
    });

    $response = $this->getJson('/fail');

    $response->assertStatus(422)
        ->assertJsonStructure([
            'success',
            'error' => [
                'message',
                'type'
            ]
        ]);
});
