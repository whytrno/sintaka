<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Destination;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    
    public function events()
    {
        $event = Event::all();
        return view('admin.event.index', compact('event'));
    }

    public function addEvent()
    {
        return view('admin.event.add');
    }
    
    public function storeEvent(Request $request)
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

    public function destroyEvent(Event $event)
    {
        $data = Event::findOrFail($event->event_id);
        Storage::disk('local')->delete('public/events'.$event->event_image);
        $data->delete();

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.event.index')->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('admin.event.index')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
