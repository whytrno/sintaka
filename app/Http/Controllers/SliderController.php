<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function addSlider()
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        return view('admin.slider.add', compact('setting_get'));
    }
    public function editSlider(Slider $slider)
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        return view('admin.slider.edit', compact('slider', 'setting_get'));
    }
    public function storeSlider(Request $request){
        $request->validate([
            'slider_title' => 'required',
            'slider_desc' => 'required',
            'slider_img' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $image = $request->file('slider_img');
        $image->storeAs('public/sliders', $image->hashName());

        $input = Slider::create([
            'slider_title' => $request->slider_title,
            'slider_desc' => $request->slider_desc,
            'slider_img' => $image->hashName()
        ]);

        if($input){
            return redirect()->route('admin.index')->with(['success' => 'Data berhasil disimpan']);
        } else{
            return redirect()->route('admin.index')->with(['error' => 'Data gagal disimpan']);
        }
    }
    public function updateSlider(Request $request, Slider $slider)
    {
        
        $request->validate([
            'slider_title' => 'required',
            'slider_desc' => 'required',
            'slider_img' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $data = Slider::findOrFail($slider->slider_id);

        if($request->file('slider_img') == ""){
            $data->update([
                'slider_title' => $request->slider_title,
                'slider_desc' => $request->slider_desc,
            ]);
        } else {
            Storage::disk('local')->delete('public/sliders/'.$data->event_image);

            $image = $request->file('slider_img');
            $image->storeAs('public/sliders', $image->hashName());

            $data->update([
                'slider_title' => $request->slider_title,
                'slider_desc' => $request->slider_desc,
                'slider_img' => $image->hashName()
            ]);
        }

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    public function destroySlider(Slider $slider)
    {
        $data = Slider::findOrFail($slider->slider_id);
        Storage::disk('local')->delete('public/sliders/'.$slider->slider_img);
        $data->delete();

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.index')->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('admin.index')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
