<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::when(request()->q, function($query) {
            $query->where('name', 'like', '%'. request()->q .'%');
        })->with('roles')->latest()->paginate(5);

        $users->appends(['q' => request()->q]);

        return inertia('Admin/Users/Index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        $roles = Role::all();

        return inertia('Admin/Users/Create', [
            'roles' => $roles
        ]);
    }

    public function store(UserRequest $request)
    {
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $user->assignRole($request->roles);

        return redirect()->route('admin.users.index');
    }

    public function edit($id)
    {
        $user = User::with('roles')->findOrFail($id);
        $roles = Role::all();

        return inertia('Admin/Users/Edit', [
            'user'  => $user,
            'roles' => $roles
        ]);
    }

    public function update(UserRequest $request, User $user)
    {
        $data = [
            'name'  => $request->name,
            'email' => $request->email
        ];

        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        $user->syncRoles($request->roles);

        return redirect()->route('admin.users.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
