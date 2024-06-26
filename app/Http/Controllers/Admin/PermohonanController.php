<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dinas;
use App\Models\Petition;
use Carbon\Carbon;

class PermohonanController extends Controller
{
    public function permohonanAdmin()
    {
        $permohonanAdmin = Petition::latest()->whereStatus('pending')->get();
        return view('sirekudace.dashboard.permohonan', compact('permohonanAdmin'));
    }

    public function edit($slug)
    {
        $editPermohonan = Petition::where('slug', $slug)->first();
        $listDinas = Dinas::latest()->get();
        // dd($editPermohonan);
        return view('sirekudace.dashboard.edit-permohonan', compact(['editPermohonan', 'listDinas']));
    }

    public function update(Request $request, $slug)
    {
        $data = $request->except('_token', '_method');
        $data['date'] = Carbon::parse($request->date)->format('Y-m-d');
        $data['note'] = $request->note;
        // dd($data);
        Petition::where('slug', $slug)->update($data);
        flash()->addSuccess('Data berhasil diupdate');
        return redirect()->route('dashboard.riwayat');
    }

    public function destroy($slug)
    {
        Petition::where('slug', $slug)->delete();
        flash()->addSuccess('Data berhasil dihapus');
        return back();
    }

    public function riwayatPermohonan()
    {
        $riwayatPermohonan = Petition::latest()->get();
        return view('sirekudace.dashboard.riwayat', compact('riwayatPermohonan'));
    }

    public function cetakLaporan()
    {
        $riwayatPermohonan = Petition::latest()->get();
        return view('sirekudace.dashboard.laporan', compact('riwayatPermohonan'));
    }
}
