<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{

    public function dashboard()
    {
        $user = Auth::user();
        if ($user->usertype == 1) { // admin
            return redirect()->route('admin.dashboard');
        } elseif ($user->usertype == 2) { // doctor
            return redirect()->route('doctor.dashboard');
        } else { // user
            return redirect()->route('user.dashboard');
        }
    }
}
