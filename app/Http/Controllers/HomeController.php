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
use App\Models\Info;
use App\Models\About;
use App\Models\Testimoni;
use App\Models\Video;
use App\Models\Team;
use App\Models\Art;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::limit(2)->latest()->get();  
        $destination_type = DestinationType::all();
        $setting_get = Setting::where('setting_id', 1)->first();
        $slider = Slider::all();
        $testimoni = Testimoni::all();
        $info = Info::limit(2)->latest()->get();
        
        return view('event.index', compact('info', 'event', 'destination_type', 'setting_get', 'slider', 'testimoni'));
    }
    public function about()
    {
        $destination_type = DestinationType::all();
        $setting_get = Setting::where('setting_id', 1)->first();
        $about = About::where('id', 1)->first();
        $team = Team::all();
        
        return view('event.about', compact('about', 'team', 'destination_type', 'setting_get'));
    }

    public function events(Event $event)
    {
        $event = Event::latest()->paginate(5);
        $event_latest = Event::limit(3)->inRandomOrder()->get();
        $destination_type = DestinationType::all();
        $setting_get = Setting::where('setting_id', 1)->first();

        return view('event.events', compact('event', 'event_latest', 'destination_type', 'setting_get'));
    }
    
    public function infos(Info $info)
    {
        $info = Info::latest()->paginate(5);
        $info_latest = Info::limit(3)->inRandomOrder()->get();
        $destination_type = DestinationType::all();
        $setting_get = Setting::where('setting_id', 1)->first();

        return view('event.infos', compact('info', 'info_latest', 'destination_type', 'setting_get'));
    }

    public function arts(Art $art)
    {
        $destination_type = DestinationType::all();
        $setting_get = Setting::where('setting_id', 1)->first();
        $art = Art::all();
        
        return view('event.arts', compact('destination_type', 'art', 'setting_get'));
    }

    public function eventSearch(Request $request){
        $keyword = $request->event_name;

        $event = Event::where('event_name', 'like', "%" . $keyword . "%")->paginate(5);
        $event_latest = Event::limit(3)->inRandomOrder()->get();
        $destination_type = DestinationType::all();
        $setting_get = Setting::where('setting_id', 1)->first();
        
        return view('event.events', compact('event', 'event_latest', 'destination_type', 'setting_get'));
    }

    public function infoSearch(Request $request){
        $keyword = $request->info_title;

        $info = Info::where('info_title', 'like', "%" . $keyword . "%")->paginate(5);
        $info_latest = Info::limit(3)->inRandomOrder()->get();
        $destination_type = DestinationType::all();
        $setting_get = Setting::where('setting_id', 1)->first();
        
        return view('event.infos', compact('info', 'info_latest', 'destination_type', 'setting_get'));
    }
    
    public function eventShow(Event $event)
    {
        $event_latest = Event::limit(3)->inRandomOrder()->get();
        $destination_type = DestinationType::all();
        $setting_get = Setting::where('setting_id', 1)->first();
        
        return view('event.event-detail', compact('event', 'event_latest', 'destination_type', 'setting_get'));
    }
    
    public function infoShow(Info $info)
    {
        $info_latest = Info::limit(3)->inRandomOrder()->get();
        $destination_type = DestinationType::all();
        $setting_get = Setting::where('setting_id', 1)->first();
        
        return view('event.info-detail', compact('info', 'info_latest', 'destination_type', 'setting_get'));
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
