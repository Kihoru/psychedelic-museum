<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Event;
use App\Picture;
use App\Http\Requests\EventRequest;

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

    public function create_event(EventRequest $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'event_date' => 'required',
            'content' => 'required',
            'video_uri' => 'Max:255',
            'picture' => 'image'
        ]);

        $event = Event::create($request->all());

        if (!empty($request->input('picture'))) {
            $img = $request->file('picture'); // Objet Laravel
            $ext = $img->getClientOriginalExtension();
            $uri = str_random(12) . '.' . $ext;

            $picture = Picture::create([
                'uri' => $uri,
                'event_id' => $event->id
            ]);

            $img->move('./uploads', $uri);
        }
        return redirect('dashboard');
    }
}
