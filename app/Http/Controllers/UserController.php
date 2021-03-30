<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit(User $user){

if(Gate ::denies('edit_users')){
    return redirect()->route('admin.users.index');
};
$roles=Role::all();
return view(admin.users.edit,[
'user'=>$user,
'roles'=>$roles

]);

    }
    public function delete(User $user){

        if(Gate ::denies('delete_users')){
            return redirect()->route('admin.users.index');
        };
        $roles=Role::all();
        return view(admin.users.delete,[
        $user->roles->detach(),
        $user->delete()
        
        ]);
        
            }
}
