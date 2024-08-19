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
            return view('admin.admin-new');
        }

        return view('welcome');
    }
}
