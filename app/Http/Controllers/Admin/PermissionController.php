<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;
use BalajiDharma\LaravelAdminCore\Requests\StorePermissionRequest;
use BalajiDharma\LaravelAdminCore\Requests\UpdatePermissionRequest;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Permission::latest()->paginate(5);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePermissionRequest $request)
    {
        return Permission::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        return $permission;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        $permission->update($request->all());
        $permission->refresh();
        return $permission;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        return $permission->delete();
    }
}
