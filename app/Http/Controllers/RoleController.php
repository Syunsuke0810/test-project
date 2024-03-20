<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    public function attach(Request $request,User $user){
        $roled=request()->input('role');
        $user->roles()->input($roled);
        return back();
    }

    public function detach(Request $request,User $user){
        $roled=request()->input('role');
        $user->roles()->input($roled);
    }
}
