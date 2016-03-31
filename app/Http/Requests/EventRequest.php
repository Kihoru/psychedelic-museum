<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Event;
use Carbon\Carbon;

class EventRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'event_date_begin' => 'required|Min:10|Max:10',
            'event_date_end' => 'required|Min:10|Max:10',
            'localisation' => 'required',
            'content' => 'required',
            'status' => 'Min:1|Max:50',
            'video_uri' => 'Max:255',
            'picture' => 'image'
        ];
    }
}
