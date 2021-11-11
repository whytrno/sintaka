<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
// UPDATE IMAGE
use Illuminate\Support\Facades\Storage;
use App\Models\DestinationType;
use App\Models\Setting;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        $event = Event::all();
        return view('admin.event.index', compact('event', 'setting_get'));
    }
    public function active()
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        $event = Event::whereDate('event_date_start', '>=', Carbon::today()->format('Y-m-d'))->get();
        return view('admin.event.index', compact('event', 'setting_get'));
    }
    public function history()
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        $event = Event::whereDate('event_date_start', '<=', Carbon::today()->format('Y-m-d'))->get();
        return view('admin.event.index', compact('event', 'setting_get'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        return view('admin.event.add', compact('setting_get'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required',
            'event_desc' => 'required',
            'event_place' => 'required',
            'event_date_start' => 'required',
            'event_date_end' => 'required',
            'event_image' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $image = $request->file('event_image');
        $image->storeAs('public/events', $image->hashName());

        $input = Event::create([
            'event_name' => $request->event_name,
            'event_desc' => $request->event_desc,
            'event_place' => $request->event_place,
            'event_date_start' => $request->event_date_start,
            'event_date_end' => $request->event_date_end,
            'event_image' => $image->hashName()
        ]);

        if($input){
            return redirect()->route('admin.events')->with(['success' => 'Data berhasil disimpan']);
        } else{
            return redirect()->route('admin.events')->with(['error' => 'Data gagal disimpan']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        return view('admin.event.edit', compact('event', 'setting_get'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'event_name' => 'required',
            'event_desc' => 'required',
            'event_place' => 'required',
            'event_date_start' => 'required',
            'event_date_end' => 'required',
            'event_image' => 'image|mimes:png,jpg,jpeg'
        ]);

        $data = Event::findOrFail($event->event_id);

        if($request->file('event_image') == ""){
            $data->update([
                'event_name' => $request->event_name,
                'event_desc' => $request->event_desc,
                'event_place' => $request->event_place,
                'event_date_start' => $request->event_date_start,
                'event_date_end' => $request->event_date_end,
            ]);
        } else {
            Storage::disk('local')->delete('public/events/'.$data->event_image);

            $image = $request->file('event_image');
            $image->storeAs('public/events', $image->hashName());

            $data->update([
                'event_name' => $request->event_name,
                'event_desc' => $request->event_desc,
                'event_place' => $request->event_place,
                'event_date_start' => $request->event_date_start,
                'event_date_end' => $request->event_date_end,
                'event_image' => $image->hashName()
            ]);
        }

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.events')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.events')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $data = Event::findOrFail($event->event_id);
        Storage::disk('local')->delete('public/events'.$event->event_image);
        $data->delete();

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.events')->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('admin.events')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
