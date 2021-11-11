<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function create()
    {
        return view('admin.team.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/teams', $image->hashName());

        $input = Team::create([
            'name' => $request->name,
            'role' => $request->role,
            'image' => $image->hashName()
        ]);

        if($input){
            return redirect()->route('admin.index')->with(['success' => 'Data berhasil disimpan']);
        } else{
            return redirect()->route('admin.index')->with(['error' => 'Data gagal disimpan']);
        }
    }
    public function edit(Team $team)
    {
        $setting_get = Setting::where('setting_id', 1)->first();
        return view('admin.team.edit', compact('team', 'setting_get'));
    }
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $data = Team::findOrFail($team->id);

        if($request->file('image') == ""){
            $data->update([
                'name' => $request->name,
                'role' => $request->role,
            ]);
        } else {
            Storage::disk('local')->delete('public/teams/'.$data->image);

            $image = $request->file('image');
            $image->storeAs('public/teams', $image->hashName());

            $data->update([
                'name' => $request->name,
                'role' => $request->role,
                'image' => $image->hashName()
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
    public function destroy(Team $team)
    {
        $data = Team::findOrFail($team->id);
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
