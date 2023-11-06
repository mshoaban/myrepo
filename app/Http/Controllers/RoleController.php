<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\RoleFormRequest;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleFormRequest $request)
    {
        $data = $request->validated();

        $role = new Role;
        $role->name = $data['name'];
        $role->save();

        return redirect('/roles')->with('status', 'Role added successfully !!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::find($id);
        return view('roles.view', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::find($id);
        return view('roles.view', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::find($id);

        // Check if the role exists
        if (!$role) {
            return redirect('/roles')->with('error', 'Role not found!');
        }

        // Detach the role from users
        $usersWithRole = $role->users;
        $role->users()->detach();

        // You can also delete the role after detaching it from users, if needed
        $role->delete();

        return redirect('/roles')->with('status', 'Role Deleted successfully !!!');
    }
}
