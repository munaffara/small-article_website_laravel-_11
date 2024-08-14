<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\PermissionGroup;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::with('permissions')->get();
        return view("admin.roles.list", compact("roles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissionGroups = PermissionGroup::with('permissions')->get();
        return view("admin.roles.create", compact("permissionGroups"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = new Role;
        $role->name = $request->name;
        $role->save();

        // Get the permission names based on the IDs from the request
        $permissions = Permission::whereIn('id', $request->permission_ids)->pluck('name')->toArray();

        // Sync permissions with the role
        $role->syncPermissions($permissions);

        return redirect()->back()->with('message', 'Role created with selected permissions successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::with('permissions')->find($id);
        $permissionGroups = PermissionGroup::with('permissions')->get();
        return view('admin.roles.edit', compact("role", "permissionGroups"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Create the new role
        $role = Role::find($id);
        $role->name = $request->name;
        $role->save();

        // Get the permission names based on the IDs from the request
        $permissions = Permission::whereIn('id', $request->permission_ids)->pluck('name')->toArray();

        // Sync permissions with the role
        $role->syncPermissions($permissions);

        return redirect()->back()->with('message', 'Role updated with selected permissions successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->back()->with('message','Role Deleted Successfully');
    }
}
