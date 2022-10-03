<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard',[
            'title' =>'Dashboard',
            'user' => auth()->user(),
        ]);
    }

    public function userSetting()
    {
        return view('user-setting', [
            'title' => 'User Setting',
            'user' => auth()->user(),
        ]);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'current_password',
            'new_password' => 'string|min:8|confirmed',
        ]);

        $data = ['password' => Hash::make($request->new_password)];
        $user = $request->user();
        $user->update($data);
        $user->refresh();

        return redirect('/dashboard')->with('success', 'Password has been updated successfully!');
    }
}
