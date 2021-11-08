<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Event;
use App\Models\DestinationType;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Video;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::limit(3)->latest()->get();
        $destination_type = DestinationType::all();
        $setting_get = Setting::where('setting_id', 1)->first();
        $slider = Slider::all();
        
        return view('event.index', compact('event', 'destination_type', 'setting_get', 'slider'));
    }

    public function videos()
    {
        $destination_type = DestinationType::all();
        $video = Video::all();
        $setting_get = Setting::where('setting_id', 1)->first();
        return view('event.videos', compact('destination_type', 'video', 'setting_get'));
    }
}
