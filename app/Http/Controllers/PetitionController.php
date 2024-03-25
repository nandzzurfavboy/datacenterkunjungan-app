<?php

namespace App\Http\Controllers;

use App\Models\Dinas;
use App\Models\Petition;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PetitionController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $listDinas = Dinas::latest()->get();
        return view('reservasi.create-reservasi', compact('listDinas'));
    }


    public function store(Request $request)
    {
        if ($request->check == "checked") {
            $data = $request->except('_token');
            $data['dinas_id'] = $request->dinas_id;
            $data['slug'] = str($request->name . ' ' . str()->random(6))->slug();
            $data['date'] = Carbon::parse($request->date)->format('Y-m-d');
            // create random string token
            $data['token'] = "JKT" . str()->random(20) . date('Y');
            unset($data['check']);
            // return $data;
            Petition::create($data);
            flash()->addSuccess('Reservasi berhasil dibuat');
            return redirect()->route('success', [
                'slug' => $data['slug'],
                $data['token']
            ]);
        } else {
            flash()->addError('Anda harus menyetujui syarat dan ketentuan');
            return back();
        }
    }


    public function show(Petition $petition)
    {
        //
    }

    public function edit(Petition $petition)
    {
        //
    }

    public function update(Request $request, Petition $petition)
    {
        //
    }

    public function destroy(Petition $petition)
    {
        //
    }

    public function success(Request $request, $slug)
    {
        $petition = Petition::where('slug', $slug)->first();
        // return $petition;
        return view('reservasi.success', compact('petition'));
    }
}
