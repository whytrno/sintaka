<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Destination;
use App\Models\DestinationType;
use App\Models\DestinationImage;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:user');
    // }
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

    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }
    
}
