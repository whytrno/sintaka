<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Art;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class ArtController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {   
        $setting_get = Setting::where('setting_id', 1)->first();
        $art = Art::all();

        return view('admin.art.index', compact('art', 'setting_get'));
    }
    public function create()
    {
        return view('admin.art.add');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'image' => 'required|image|mimes:png,jpg,jpeg'
        // ]);

        // $image = $request->file('image');
        // $image->storeAs('public/arts', $image->hashName());

        // $input = Art::create([
        //     'name' => $request->name,
        //     'image' => $image->hashName()
        // ]);

        // if($input){
        //     return redirect()->route('admin.arts')->with(['success' => 'Data berhasil disimpan']);
        // } else{
        //     return redirect()->route('admin.arts')->with(['error' => 'Data gagal disimpan']);
        // }
        foreach($request->file('file') as $image)
        {
            $imageName=$image->getClientOriginalName();
            // $image->move(public_path().'public/destinations/', $imageName);  
            $image->storeAs('public/arts', $imageName);
            $fileNames[] = $imageName;

            Art::create([
                    'name' => $request->name,
                    'image' => $imageName
                ]);
            return back()
                ->with(['success' => 'Gambar berhasil di upload'])
                ->with('files',$fileNames);
        }
    }
    public function destroy(Art $art)
    {
        $data = Art::findOrFail($art->id);
        Storage::disk('local')->delete('public/arts/'.$art->image);
        $data->delete();

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.arts')->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('admin.arts')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
