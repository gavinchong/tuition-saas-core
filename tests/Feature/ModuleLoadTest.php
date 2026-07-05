<?php

test('loads tenant module route', function () {

    $this->get('/tenant')
        ->assertOk()
        ->assertSee('Tenant Module Loaded');
});
