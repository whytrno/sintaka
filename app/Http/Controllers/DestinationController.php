<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\DestinationImage;
use Illuminate\Http\Request;
use App\Models\DestinationType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Setting;

class DestinationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        $destination = Destination::join('destination_types', 'destinations.destination_type_id', '=', 'destination_types.destination_type_id')
                                    ->get();
        return view('admin.destination.index', compact('destination', 'setting_get'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(DestinationType $destinationtype)
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        $destinationtype = DestinationType::all();
        return view('admin.destination.add', compact('destinationtype', 'setting_get'));
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
            'destination_type_id' => 'required',
            'destination_name' => 'required',
            'destination_profil' => 'required',
            'destination_facility' => 'required',
            'destination_ticket_price' => 'required',
            'destination_address' => 'required',
            'destination_image' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $image = $request->file('destination_image');
        $image->storeAs('public/destinations', $image->hashName());

        $input = Destination::create([
            'destination_type_id' => $request->destination_type_id,
            'destination_name' => $request->destination_name,
            'destination_profil' => $request->destination_profil,
            'destination_facility' => $request->destination_facility,
            'destination_ticket_price' => $request->destination_ticket_price,
            'destination_address' => $request->destination_address,
            'destination_image' => $image->hashName()
        ]);

        if($input){
            return redirect()->route('admin.destinations')->with(['success' => 'Data berhasil disimpan']);
        } else{
            return redirect()->route('admin.destinations')->with(['error' => 'Data gagal disimpan']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        $destination_get = Destination::join('destination_types', 'destinations.destination_type_id', '=', 'destination_types.destination_type_id')
                                    ->where('destinations.destination_id', $destination->destination_id)
                                    ->get();
        $destinationtype = DestinationType::all();
        return view('admin.destination.edit', compact('destination', 'destination_get', 'destinationtype', 'setting_get'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
        $request->validate([
            'destination_type_id' => 'required',
            'destination_name' => 'required',
            'destination_profil' => 'required',
            'destination_facility' => 'required',
            'destination_ticket_price' => 'required',
            'destination_address' => 'required',
            'destination_image' => 'image|mimes:png,jpg,jpeg'
        ]);
        
        $data = Destination::findOrFail($destination->destination_id);

        if($request->file('destination_image') == ""){
            $data->update([
                'destination_type_id' => $request->destination_type_id,
                'destination_name' => $request->destination_name,
                'destination_profil' => $request->destination_profil,
                'destination_facility' => $request->destination_facility,
                'destination_ticket_price' => $request->destination_ticket_price,
                'destination_address' => $request->destination_address,
            ]);
        } else {
            Storage::disk('local')->delete('public/destinations/'.$data->destination_image);

            $image = $request->file('destination_image');
            $image->storeAs('public/destinations', $image->hashName());

            $data->update([
                'destination_type_id' => $request->destination_type_id,
                'destination_name' => $request->destination_name,
                'destination_profil' => $request->destination_profil,
                'destination_facility' => $request->destination_facility,
                'destination_ticket_price' => $request->destination_ticket_price,
                'destination_address' => $request->destination_address,
                'destination_image' => $image->hashName()
            ]);
        }

        if($data){
            return redirect()->route('admin.destinations')->with(['success' => 'Data berhasil disimpan']);
        } else{
            return redirect()->route('admin.destinations')->with(['error' => 'Data gagal disimpan']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
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

    // ===============================================================
    public function imageDestination(Destination $destination)
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        $image = DestinationImage::where('destination_id', $destination->destination_id)->get();
        return view('admin.destination.image', compact('destination', 'image', 'setting_get'));
    }
    public function addDestinationImage(Destination $destination)
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        return view('admin.destination.addImage', compact('destination', 'setting_get'));
    }
    public function storeDestinationImage(Request $request)
    {
        foreach($request->file('file') as $image)
        {
            $imageName=$image->getClientOriginalName();
            // $image->move(public_path().'public/destinations/', $imageName);  
            $image->storeAs('public/destinations', $imageName);
            $fileNames[] = $imageName;

            DestinationImage::create([
                    'destination_id' => $request->destination_id,
                    'destination_image' => $imageName
                ]);
            return back()
                ->with(['success' => 'Gambar berhasil di upload'])
                ->with('files',$fileNames);
        }

        // $images = json_encode($fileNames);
        // $images2 = json_decode($images);
        
        // Store $images image in DATABASE from HERE 
        // DestinationImage::create([
        //     'destination_id' => $request->destination_id,
        //     'destination_image' => $images
        // ]);

        // return back()
        //     ->with('success','You have successfully file uplaod.')
        //     ->with('files',$fileNames);

        // $request->validate([
        //     'destination_id' => 'required',
        //     'destination_image' => 'required|image|mimes:png,jpg,jpeg'
        // ]);

        // $image = $request->file('destination_image');
        // $image->storeAs('public/destinations', $image->hashName());
        

        
        // $input = DestinationImage::create([
        //     'destination_id' => $request->destination_id,
        //     'destination_image' => $image->hashName()
        // ]);

        // if($input){
        //     return redirect()->route('admin.imageDestination', $request->destination_id)->with(['success' => 'Data berhasil disimpan']);
        // } else{
        //     return redirect()->route('admin.imageDestination', $request->destination_id)->with(['error' => 'Data gagal disimpan']);
        // }
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
