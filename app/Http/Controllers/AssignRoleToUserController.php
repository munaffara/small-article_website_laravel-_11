<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AssignRoleToUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('roles')->get();
        return view('admin.assign-user-roles.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::get();
        $roles = Role::get();
        return view('admin.assign-user-roles.create', compact('users','roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::find($request->user_id);
        $user->syncRoles($request->role_names);

        return redirect()->back()->with('message',"Role Assigned to $user->email Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $selectesUser = User::with('roles')->find($id);
        $users = User::get();
        $roles = Role::get();
        return view('admin.assign-user-roles.edit', compact('selectesUser', 'users', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $selectesUser = User::with('roles')->find($id);
        return view('admin.assign-user-roles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        // $role = Role::find($request->role_id);

        $user->syncRoles($request->role_id);

        return redirect()->back()->with('message',"Role Udated to $user->email Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $selectesUser = User::with('roles')->find($id);
        $selectesUser->delete();

        return redirect()->route('assign-role-user.index')->with('message', 'Assign Role to user deleted successfully.');
    }
}
