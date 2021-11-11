<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Setting;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        $info = Info::all();

        return view('admin.information.index', compact('info', 'setting_get'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.information.add');
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
            'info_title' => 'required',
            'info_desc' => 'required',
        ]);

        $input = Info::create([
            'info_title' => $request->info_title,
            'info_desc' => $request->info_desc,
        ]);

        if($input){
            return redirect()->route('admin.infos')->with(['success' => 'Data berhasil disimpan']);
        } else{
            return redirect()->route('admin.infos')->with(['error' => 'Data gagal disimpan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(Info $info)
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        return view('admin.information.edit', compact('info', 'setting_get'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Info $info)
    {
        $request->validate([
            'info_title' => 'required',
            'info_desc' => 'required',
        ]);

        $data = Info::findOrFail($info->info_id);

        $data->update([
            'info_title' => $request->info_title,
            'info_desc' => $request->info_desc,
        ]);

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.infos')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.infos')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info $info)
    {
        $data = Info::findOrFail($info->info_id);
        $data->delete();

        // if($data){
        //     //redirect dengan pesan sukses
        //     return redirect()->route('admin.infos')->with(['success' => 'Data Berhasil Dihapus!']);
        //  }else{
        //    //redirect dengan pesan error
        //    return redirect()->route('admin.infos')->with(['error' => 'Data Gagal Dihapus!']);
        //  }
        return redirect()->route('admin.infos')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
