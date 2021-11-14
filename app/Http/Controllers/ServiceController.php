<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {   
        $setting_get = Setting::where('setting_id', 1)->first();
        $service = Service::all();

        return view('admin.service.index', compact('service', 'setting_get'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $input = Service::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        if($input){
            return redirect()->route('admin.services')->with(['success' => 'Data berhasil disimpan']);
        } else{
            return redirect()->route('admin.services')->with(['error' => 'Data gagal disimpan']);
        }
    }
    public function edit(Service $service)
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        return view('admin.service.edit', compact('service', 'setting_get'));
    }
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $data = Service::findOrFail($service->id);

        $data->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.services')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.services')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    public function destroy(Service $service)
    {
        $data = Service::findOrFail($service->id);
        $data->delete();

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.services')->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('admin.services')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
