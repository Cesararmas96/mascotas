<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }

    public function create()
    {
        $roles = Role::get();
        $personas = Persona::where('status', '1')->pluck('id', 'id');
        return view('admin.users.create', compact('personas', 'roles'));
    }

    public function store(Request $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->persona_id),
            'persona_id' => $request->persona_id
        ]); //Retrieving only the email and password data

        $roles = $request['roles']; //Retrieving the roles field
        //Checking if a role was selected
        if (isset($roles)) {

            foreach ($roles as $role) {
                $role_r = Role::where('id', '=', $role)->firstOrFail();
                $user->assignRole($role_r); //Assigning role to user
            }
        }
        //Redirect to the users.index view and display message
        return redirect()->route('admin.users.index', $user)->with('info', 'Guardado con Exito!');
    }


    public function edit(User $user)
    {
        $roles = Role::all();

        return view('admin.users.edit', compact('user', 'roles'));
    }


    public function update(Request $request, User $user)

    {
        // $personas = Persona::where('status', '1')->pluck('id', 'id');
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.edit', $user)->with('info', 'Se Asigno los roles');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('info', 'Eliminado con exito');
    }
}
