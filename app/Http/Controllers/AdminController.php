<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Destination;
use App\Models\DestinationType;
use App\Models\DestinationImage;
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
    
    public function editEvent(Event $event)
    {
        return view('admin.event.edit', compact('event'));
    }

    public function editEventProccess(Request $request, Event $event)
    {
        var_dump($event->event_id);
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
            Storage::disk('local')->delete('public/events'.$data->event_image);

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

    public function destinations()
    {
        $destination = Destination::join('destination_types', 'destinations.destination_type_id', '=', 'destination_types.destination_type_id')
                                    ->get();
        return view('admin.destination.index', compact('destination'));
    }
    
    public function addDestination(DestinationType $destinationtype)
    {
        $destinationtype = DestinationType::all();
        return view('admin.destination.add', compact('destinationtype'));
    }
    
    public function storeDestination(Request $request)
    {
        $request->validate([
            'destination_type_id' => 'required',
            'destination_name' => 'required',
            'destination_profil' => 'required',
            'destination_facility' => 'required',
            'destination_ticket_price' => 'required',
            'destination_address' => 'required',
        ]);

        $input = Destination::create([
            'destination_type_id' => $request->destination_type_id,
            'destination_name' => $request->destination_name,
            'destination_profil' => $request->destination_profil,
            'destination_facility' => $request->destination_facility,
            'destination_ticket_price' => $request->destination_ticket_price,
            'destination_address' => $request->destination_address,
        ]);

        if($input){
            return redirect()->route('admin.destinations')->with(['success' => 'Data berhasil disimpan']);
        } else{
            return redirect()->route('admin.destinations')->with(['error' => 'Data gagal disimpan']);
        }
    }

    public function destroyDestination(Destination $destination)
    {
        $data = Destination::findOrFail($destination->destination_id);
        $destination_image = DestinationImage::join('destinations', 'destinations.destination_id', '=', 'destination_images.destination_id')
                                    ->where('destinations.destination_id', $destination->destination_id)
                                    ->get();
        foreach($destination_image as $image){
            Storage::disk('local')->delete('public/destinations/'.$image->destination_image);
        }
        $data->delete();

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.destinations')->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('admin.destinations')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }

    
    // ================================================================================================================================
    public function imageDestination(Destination $destination)
    {
        $image = DestinationImage::where('destination_id', $destination->destination_id)->get();
        return view('admin.destination.image', compact('destination', 'image'));
    }
    public function addDestinationImage(Destination $destination)
    {
        return view('admin.destination.addImage', compact('destination'));
    }
    public function storeDestinationImage(Request $request)
    {
        $request->validate([
            'destination_id' => 'required',
            'destination_image' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $image = $request->file('destination_image');
        $image->storeAs('public/destinations', $image->hashName());

        $input = DestinationImage::create([
            'destination_id' => $request->destination_id,
            'destination_image' => $image->hashName()
        ]);

        if($input){
            return redirect()->route('admin.imageDestination', $request->destination_id)->with(['success' => 'Data berhasil disimpan']);
        } else{
            return redirect()->route('admin.imageDestination', $request->destination_id)->with(['error' => 'Data gagal disimpan']);
        }
    }
    public function destroyDestinationImage(DestinationImage $destinationimage)
    {
        $data = DestinationImage::findOrFail($destinationimage->destination_image_id);
        Storage::disk('local')->delete('public/destinations/'.$destinationimage->destination_image);
        $data->delete();

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.imageDestination', $destinationimage->destination_id)->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('admin.imageDestination', $destinationimage->destination_id)->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
