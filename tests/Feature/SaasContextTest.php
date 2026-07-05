<?php

use Illuminate\Support\Facades\Route;

it('resolves full SaaS context', function () {

    Route::get('/saas', function () {
        return tenant();
    });

    $response = $this->withHeaders([
        'X-Tenant-ID' => 't1',
        'X-Org-ID' => 'org1',
        'X-Branch-ID' => 'b1',
    ])->getJson('/saas');

    $response->assertOk()
        ->assertJson([
            'tenant_id' => 't1',
            'organization_id' => 'org1',
            'branch_id' => 'b1',
        ]);
});
