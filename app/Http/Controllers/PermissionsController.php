<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class PermissionsController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('permissions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions',
        ]);

        Permission::create(['name' => $request->name]);

        return redirect('/permissions')->with('status', 'Permission created successfully');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();

        // Detach the permission from all users
        User::whereHas('permissions', function ($query) use ($permission) {
            $query->where('id', $permission->id);
        })->get()->each(function ($user) use ($permission) {
            $user->permissions()->detach($permission->id);
        });

        return redirect('/permissions')->with('status', 'Permission deleted successfully');
    }
}

