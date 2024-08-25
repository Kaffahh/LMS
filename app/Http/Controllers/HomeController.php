<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $user = Auth::User();

        if ($user->status == 'Ad') {
            return view('admin.admin');
        }

        return view('welcome');
    }

    public function guru()
    {
        $user = Auth::User();

        if ($user->status == 'Ad') {
            return view('admin.teacher.dashboard-tc');
        }

        return view('welcome');
    }
}
