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
            $classToggleEvents = 'board';
            $user = $request->user();
            return view('admin.parts.eventsboard', compact('user', 'classToggleEvents'));
        }
    }

    public function showEventList(Request $request)
    {
        if ($request->user())
        {
            $classToggleEvents = 'list';
            $user = $request->user();
            return view('admin.parts.event-list', compact('user', 'classToggleEvents'));
        }
    }

    public function showSettings(Request $request)
    {
        if ($request->user())
        {
            $classToggleEvents = 'settings';
            $user = $request->user();
            return view('admin.parts.settings', compact('user', 'classToggleEvents'));
        }
    }

    public function showUsers(Request $request)
    {
        if ($request->user())
        {
            $classToggleEvents = 'users';
            $user = $request->user();
            return view('admin.parts.usersboard', compact('user', 'classToggleEvents'));
        }
    }
}
