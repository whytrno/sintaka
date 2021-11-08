<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use App\Models\Setting;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {   
        $setting_get = Setting::where('setting_id', 1)->first();
        $testimoni = Testimoni::all();

        return view('admin.testimoni.index', compact('testimoni', 'setting_get'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimoni.add');
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
            'name' => 'required',
            'content' => 'required',
        ]);

        $input = Testimoni::create([
            'name' => $request->name,
            'content' => $request->content,
        ]);

        if($input){
            return redirect()->route('admin.testimonis')->with(['success' => 'Data berhasil disimpan']);
        } else{
            return redirect()->route('admin.testimonis')->with(['error' => 'Data gagal disimpan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimoni $testimoni)
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        return view('admin.testimoni.edit', compact('testimoni', 'setting_get'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        $data = Testimoni::findOrFail($testimoni->testimoni_id);

        $data->update([
            'name' => $request->name,
            'content' => $request->content,
        ]);

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.testimonis')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.testimonis')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimoni $testimoni)
    {
        $data = Testimoni::findOrFail($testimoni->testimoni_id);
        $data->delete();

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.testimonis')->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('admin.testimonis')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
