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
use App\Models\About;
use App\Models\Testimoni;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

use Redirect,Response;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function calendar(){
        if(request()->ajax()) 
        {
 
         $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
         $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
 
         $data = Event::whereDate('event_date_start', '>=', $start)->whereDate('event_date_end',   '<=', $end)->get(['event_id','event_name','event_date_start', 'event_date_end']);
         return Response::json($data);
        }
        return view('admin.calendar');
    }
    public function createCalendar(Request $request)
    {  
        $insertArr = [ 'event_name' => $request->title,
                       'event_date_start' => $request->start,
                       'event_date_end' => $request->end
                    ];
        $event = Event::insert($insertArr);   
        return Response::json($event);
    }
    public function updateCalendar(Request $request)
    {   
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
        $event  = Event::where($where)->update($updateArr);
 
        return Response::json($event);
    } 
 
 
    public function destroyCalendar(Request $request)
    {
        $event = Event::where('id',$request->id)->delete();
   
        return Response::json($event);
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
        $about = About::where('id', 1)->first();
        $count_destination = Destination::count();
        $count_event = Event::count();
        $team = Team::all();
        return view('admin.setting', compact('setting_get', 'team', 'about', 'slider', 'testimoni', 'count_destination', 'count_event'));
    }

    public function login()
    {
        return view('admin.login');
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
    }public function updateAbout(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'desc' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg'
        ]);
        
        $image = $request->file('image');
        $data = About::findOrFail($about->id);

        if($image){
            $name = "about-logo.jpeg";
            Storage::disk('local')->delete('public/settings/'.$name);
            $image->storeAs('public/settings', $name);
        }else{
    
            $data->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'desc' => $request->desc,
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
