<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Destination;
use App\Models\DestinationType;
use App\Models\DestinationImage;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
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
    public function index()
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        $slider = Slider::all();
        $testimoni = Testimoni::all();
        $count_destination = Destination::count();
        $count_event = Event::count();
        return view('admin.setting', compact('setting_get', 'slider', 'testimoni', 'count_destination', 'count_event'));
    }

    public function login()
    {
        return view('admin.login');
    }

    public function setting(Setting $setting)
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        $slider = Slider::all();
        $testimoni = Testimoni::all();
        $count_destination = Destination::count();
        $count_event = Event::count();
        return view('admin.setting', compact('setting_get', 'slider', 'testimoni', 'count_destination', 'count_event'));
    }
    public function updateSetting(Request $request, Setting $setting)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'no_hp' => 'required',
            'address' => 'required',
            'email' => 'required',
            'address_url' => 'required',
            'logo' => 'image|mimes:png,jpg,jpeg'
        ]);

        $data = Setting::findOrFail($setting->setting_id);

        $data->update([
            'name' => $request->name,
            'description' => $request->description,
            'no_hp' => $request->no_hp,
            'address' => $request->address,
            'email' => $request->email,
            'address_url' => $request->address_url,
        ]);

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    public function changeLogo(Request $request)
    {
        $image = $request->file('logo');
        $name = "logo.jpg";
        Storage::disk('local')->delete('public/settings/'.$name);
        $image->storeAs('public/settings', $name);
        return redirect()->route('admin.index')->with(['success' => 'Logo berhasil di ubah']);
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('home');
        }else{
            return redirect()->route('admin.index')->with(['success' => 'Logo berhasil di ubah']);
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
    
}
