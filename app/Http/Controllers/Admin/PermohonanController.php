<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dinas;
use App\Models\Petition;

class PermohonanController extends Controller
{
    public function permohonanAdmin()
    {
        $permohonanAdmin = Petition::latest()->get();
        return view('sirekudace.dashboard.permohonan', compact('permohonanAdmin'));
    }

    public function resultDinas()
    {
        $listDinas = Dinas::latest()->get();
        return view('sirekudace.dashboard.opd', compact('listDinas'));
    }

    public function adminSirekudace()
    {
        return view('sirekudace.dashboard.pengelola');
    }

    public function riwayatPermohonan()
    {
        $riwayatPermohonan = Petition::latest()->get();
        return view('sirekudace.dashboard.riwayat', compact('riwayatPermohonan'));
    }

    // Dalam controller
    public function getPermohonanStats()
    {
        $totalPermohonan = Petition::get();
        $permohonanDisetujui = Petition::where('status', 'approved')->count();
        $menungguPersetujuan = Petition::where('status', 'pending')->count();
        $permohonanDitolak = Petition::where('status', 'rejected')->count();

        dd($menungguPersetujuan);
        return view('sirekudace.dashboard.index', compact('totalPermohonan', 'permohonanDisetujui', 'menungguPersetujuan', 'permohonanDitolak'));
    }
}
