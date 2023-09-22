<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::whereNot('id', 1)->get();
        return view('backend.user.user', compact('users'));
    }

    public function webmaster(User $user) {
        if($user->hasRole('webmaster')) {

            $user->removeRole('webmaster');
            $user->assignRole('user');

            return back()->with('warning', 'Role Changed to User');
        } else {

            $user->removeRole('user');
            $user->assignRole('webmaster');

            return back()->with('success', 'Role Changed to WebMaster');
        }
    }

    public function destroy(User $user) {
        
        $user->delete();

        return back()->with('danger', 'User Deleted');
    }
}
