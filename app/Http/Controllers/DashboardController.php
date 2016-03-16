<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class DashboardController extends Controller
{
    public function showDashboard(Request $request)
    {
        if ($request->user())
        {
            $user = $request->user();
            return view('admin.dashboard', compact('user'));
        }
    }
}
