<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $users = User::all();
      $roles = Role::all();
      $permissions = Permission::all();
      return view('users.index', compact('users', 'roles', 'permissions'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $roles = Role::all();
      $permissions = Permission::all();
      return view('users.create', compact('roles', 'permissions'));  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $new_user =  User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $role = $request->input('role');
        if($role == 2){
            $role = 'admin';
            $new_user->assignRole($role);
        }else{
            $role = 'default';
            $new_user->assignRole($role);
        }

        $permissions = $request->input('permissions'); // $permissions is an array

        if ($permissions) {
            $new_user->givePermissionTo($permissions);
        }
                
        // dd($new_user);
        $new_user->save();
        return redirect('/users')->with('status', 'User Added successfully !!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('users.view', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $roles = Role::all();
        $permissions = Permission::all();
        return view('users.edit', compact('user', 'roles', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the form input
        $request->validate([
            'role' => 'required', 
            'permissions' => 'array', 
        ]);
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('users.index')->with('error', 'User not found');
        }

        // Update the user's role
        $role = $request->input('role');
        if($role == 2){
            $role = 'admin';
            $user->syncRoles($role);
        }else{
            $role = 'default';
            $user->syncRoles($role);
        }

         // Update the user's role
    // $newRole = $request->input('role');
    
    // // Detach the old roles and assign the new one
    // $user->syncRoles([$newRole]);

    
        // Update the user's permissions
        $permissions = $request->input('permissions', []);
        $user->syncPermissions($permissions);
        
        $user->update();

        return redirect()->route('users.index')->with('status', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if(!$user)
        {
        return redirect('/users')->with('status', 'No users found');
        }
        $user->delete();
        return redirect('/users')->with('status', 'user is Deleted');
    }
}
