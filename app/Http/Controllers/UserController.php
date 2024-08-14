<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return view("admin.users.list", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;

        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $filePath = $file->store('profile_photos', 'public');
            $user->profile_photo_path = $filePath;
        }

        $user->password = Hash::make('password');
        $user->save();

        return redirect()->route('user.index')->with('message', 'User Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('admin.article.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        // Update user details
            $user->name = $request->name;
            $user->email = $request->email;
            $user->address = $request->address;

            if ($request->hasFile('profile_photo')) {
                // Delete old profile photo if exists
                if ($user->profile_photo_path) {
                    Storage::disk('public')->delete($user->profile_photo_path);
                }

                // Store the new profile photo
                $file = $request->file('profile_photo');
                $filePath = $file->store('profile_photos', 'public');
                $user->profile_photo_path = $filePath;
            }

            $user->save();

            return redirect()->route('user.index')->with('message', 'User updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        // Delete profile photo if exists
        if ($user->profile_photo_path) {
            Storage::disk('public')->delete($user->profile_photo_path);
        }

        $user->delete();

        return redirect()->route('user.index')->with('message', 'User deleted successfully');
    }
}
