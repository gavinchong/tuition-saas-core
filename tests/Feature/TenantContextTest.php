<?php

use Illuminate\Support\Facades\Route;

it('sets tenant context from header', function () {

    Route::get('/test-tenant', function () {
        return tenant();
    });

    $response = $this->withHeaders([
        'X-Tenant-ID' => 'tenant-123'
    ])->getJson('/test-tenant');

    $response->assertOk()
        ->assertJson([
            'tenant_id' => 'tenant-123',
        ]);
});
