<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Setting;

class VideoController extends Controller
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
    public function index(Video $video)
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        $video = Video::all();
        return view('admin.video.index', compact('video', 'setting_get'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        return view('admin.video.add', compact('setting_get'));
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
            'video_url' => 'required',
        ]);

        $input = Video::create([
            'video_url' => $request->video_url,
        ]);

        if($input){
            return redirect()->route('admin.videos')->with(['success' => 'Data berhasil disimpan']);
        } else{
            return redirect()->route('admin.videos')->with(['error' => 'Data gagal disimpan']);
        }
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $data = Video::findOrFail($video->video_id);
        $data->delete();

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.videos')->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('admin.videos')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
