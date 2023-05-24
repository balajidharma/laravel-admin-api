<?php

Route::group([
    'namespace'  => 'App\Http\Controllers\Admin',
    'prefix'     => 'admin',
], function () {
    Route::apiResource('permissions', 'PermissionController');
});