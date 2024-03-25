<?php

namespace App\Http\Controllers;

use App\Models\Petition;
use Illuminate\Http\Request;

class CheckStatusController extends Controller
{
    public function cekStatus()
    {
        return view('reservasi.cekstatus');
    }

    public function resultCheck(Request $request)
    {
        $kode_reservasi = $request->kode_reservasi;
        // check kode reservasi ini sama dengan kode reservasi yang ada di database tidak?
        $data = Petition::where('token', $kode_reservasi)->first();
        if (!$data) {
            flash()->addError('Kode Reservasi tidak ditemukan');
            return back();
        }
        return redirect()->route('reservasi.result.token', [
            'token' => $data->token
        ]);
    }

    public function resultToken($token)
    {
        $reservasi = Petition::with('dinas')->where('token', $token)->first();
        if (!$reservasi) {
            flash()->addError('Kode Reservasi tidak ditemukan');
            return redirect()->route('reservasi.cekstatus');
        }
        return view('reservasi.show', compact('reservasi'));
    }
}
