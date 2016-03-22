<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Event;
use App\Picture;
use App\Http\Requests\EventRequest;
use File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

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
            $events = Event::all();
            $classToggleEvents = 'list';
            $user = $request->user();
            return view('admin.parts.event-list', compact('user', 'classToggleEvents', 'events'));
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
            $users = User::all();
            return view('admin.parts.usersboard', compact('user', 'classToggleEvents', 'users'));
        }
    }

    public function showEdit(Request $request, $id)
    {
        if ($request->user())
        {
            $event = Event::find($id);
            $classToggleEvents = 'list';
            $user = $request->user();
            return view('admin.parts.edit', compact('event', 'user', 'classToggleEvents'));
        }
    }

    public function editUser(Request $request, $id)
    {
        if($request->user())
        {
            $user = User::find($id);
            $password = Hash::make($user->password);
            $classToggleEvents = 'users';
            return view('admin.parts.userEdit', compact('user', 'classToggleEvents', 'password'));
        }
    }

    /**
     * @param EventRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function create_event(EventRequest $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'event_date' => 'required',
            'content' => 'required',
            'video_uri' => 'Max:255',
            'picture' => 'required|image|min:1|max:10000'
        ]);

        $abstract = substr($request->input('content'), 0, 15);

        $event = Event::create([
            'name' => $request->input('name'),
            'event_date' => $request->input('event_date'),
            'abstract' => $abstract,
            'content' => $request->input('content'),
            'video_uri' => $request->input('video_uri')
            ]);
        if(!empty($request->only('picture')))
        {
            $picture = new Picture;
            $file = $request->file('picture');
            $destination_path = 'uploads/';
            $name = $file->getClientOriginalName();
            $filename = str_random(6).'_'.$name;
            $picture = Picture::create([
                'uri' => $filename,
                'name' => $name,
                'event_id' => $event->id
            ]);
            $file->move($destination_path, $filename);

            $picture->uri = $destination_path . $filename;
            $picture->save();
        }
        return redirect('dashboard');
    }

    public function update(Request $request, $id)
{
    $event = Event::find($id);
    $im = $request->file('picture');
    if (!is_null($im)) {
        if (!empty($event->picture))
            $this->deletePicture($event);
        $this->upload($im, $event->id);
    }

    $abstract = substr($request->input('content'), 0, 15);

    $event->update([
        'name' => $request->input('name'),
        'event_date' => $request->input('event_date'),
        'abstract' => $abstract,
        'content' => $request->input('content'),
        'video_uri' => $request->input('video_uri')
    ]);
    return redirect('eventlist');
}

    private function deletePicture(Event $event)
    {
        if (!is_null($event->picture)) {
            $fileName = $event->picture->uri;
            if (File::exists($fileName))
                var_dump('test');
            $event->picture->delete();
            return true;
        }
        return false;
    }

    private function upload($im, $id)
    {
        $ext = $im->getClientOriginalExtension();
        $uri = str_random(12) . '.' . $ext;
        $name = $im->getClientOriginalName();
        Picture::create([
            'uri'        => $uri,
            'name' => $name,
            'event_id' => $id
        ]);
        $im->move(env('UPLOAD_PATH', './uploads'), $uri);
    }

    public function destroy($id)
    {
        $event = Event::find($id);

        if (!is_null($event->picture)) {
            File::delete($event->picture->uri);
            $event->picture->delete();
        }

        $event->delete();

        return back();
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }

    public function createUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|Max:15',
            'password' => 'required|Max:20',
            'email' => 'required|'
        ]);

        $passwordToHash = $request->input('password');
        $passwordForVerif = $request->input('password_verif');

        if($passwordToHash == $passwordForVerif)
        {
            $user = User::create([
                'name' => $request->input('name'),
                'password' => Hash::make($passwordToHash),
                'email' => $request->input('email')
            ]);
        }
        return back()->with(['message', 'utilisateur créer']);
    }
}
