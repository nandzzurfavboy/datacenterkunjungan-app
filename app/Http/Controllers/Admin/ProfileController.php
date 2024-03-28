<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('sirekudace.dashboard.profile.index');
    }

    public function update(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|min:3|max:255',
        // ]);

        $user = auth()->user();
        $user->nip = $request->nip;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->jabatan = $request->jabatan;
        $user->gender = $request->gender;

        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        //  if ($request->hasFile('foto')) {
        //     if ($user->foto) {
        //         Storage::delete('public/' . $user->foto);
        //     }
        //     $user->foto = $request->file('foto')->store('files/profiles', 'public');
        // } else {
        //     $user->foto = $user->foto;
        // };

        $user->save();
        flash()->addSuccess('Profile berhasil diupdate');
        return redirect()->back();
    }
}
