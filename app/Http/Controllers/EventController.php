<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// UPDATE IMAGE
use Illuminate\Support\Facades\Storage;
use App\Models\DestinationType;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Event $event)
    {
        $event = Event::latest()->paginate(5);
        $event_latest = Event::limit(3)->inRandomOrder()->get();
        $destination_type = DestinationType::all();

        return view('event.events', compact('event', 'event_latest', 'destination_type'));
    }

    public function search(Request $request){
        $keyword = $request->event_name;

        $event = Event::where('event_name', 'like', "%" . $keyword . "%")->paginate(5);
        $event_latest = Event::limit(3)->latest()->get();
        $destination_type = DestinationType::all();
        
        return view('event.events', compact('event', 'event_latest', 'destination_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            return redirect()->route('event.index')->with(['success' => 'Data berhasil disimpan']);
        } else{
            return redirect()->route('event.index')->with(['error' => 'Data gagal disimpan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $event_latest = Event::limit(3)->get();
        $destination_type = DestinationType::all();
        return view('event.event-detail', compact('event', 'event_latest', 'destination_type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('event.edit', compact('event'));
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
            return redirect()->route('event.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('event.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        Storage::disk('local')->delete('public/events/'.$event->event_image);
        $data->delete();

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('event.index')->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('event.index')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
