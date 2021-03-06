<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Event;
use App\Models\DestinationType;
use App\Models\Destination;
use App\Models\DestinationImage;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Testimoni;
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
        $event = Event::limit(4)->latest()->get();
        $destination_type = DestinationType::all();
        $setting_get = Setting::where('setting_id', 1)->first();
        $slider = Slider::all();
        $testimoni = Testimoni::all();
        
        return view('event.index', compact('event', 'destination_type', 'setting_get', 'slider', 'testimoni'));
    }

    public function events(Event $event)
    {
        $event = Event::latest()->paginate(5);
        $event_latest = Event::limit(3)->inRandomOrder()->get();
        $destination_type = DestinationType::all();
        $setting_get = Setting::where('setting_id', 1)->first();

        return view('event.events', compact('event', 'event_latest', 'destination_type', 'setting_get'));
    }

    public function eventSearch(Request $request){
        $keyword = $request->event_name;

        $event = Event::where('event_name', 'like', "%" . $keyword . "%")->paginate(5);
        $event_latest = Event::limit(3)->inRandomOrder()->get();
        $destination_type = DestinationType::all();
        $setting_get = Setting::where('setting_id', 1)->first();
        
        return view('event.events', compact('event', 'event_latest', 'destination_type', 'setting_get'));
    }
    
    public function eventShow(Event $event)
    {
        $event_latest = Event::limit(3)->inRandomOrder()->get();
        $destination_type = DestinationType::all();
        $setting_get = Setting::where('setting_id', 1)->first();
        
        return view('event.event-detail', compact('event', 'event_latest', 'destination_type', 'setting_get'));
    }
    
    public function destinations(Request $request)
    {   
        $destination = Destination::all();
        $setting_get = Setting::where('setting_id', 1)->first();

        return view('event.destinations', compact('destination', 'request', 'setting_get'));
    }

    public function type(DestinationType $destinationtype)
    {
        $keyword = $destinationtype->destination_type_id;
        
        $destination_get = Destination::where('destination_type_id', $keyword)->get();
        $destination_type = DestinationType::all();
        $setting_get = Setting::where('setting_id', 1)->first();
        
        return view('event.destinations', compact('destination_get', 'destination_type', 'keyword', 'setting_get'));
    }
    
    public function destinationShow(Destination $destination)
    {
        $destination_type = DestinationType::all();
        $image = DestinationImage::where('destination_id', $destination->destination_id)->get();
        $setting_get = Setting::where('setting_id', 1)->first();
        
        return view('event.destination-detail', compact('destination', 'destination_type', 'image', 'setting_get'));
    }

    public function videos()
    {
        $destination_type = DestinationType::all();
        $video = Video::all();
        $setting_get = Setting::where('setting_id', 1)->first();
        return view('event.videos', compact('destination_type', 'video', 'setting_get'));
    }
}
