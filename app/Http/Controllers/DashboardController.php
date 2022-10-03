<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('dashboard', [
            'title' => 'User Setting',
            'user' => auth()->user(),
        ]);
    }
}
