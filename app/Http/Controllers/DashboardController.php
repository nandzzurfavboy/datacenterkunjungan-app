<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dinas;
use App\Models\Petition;

class DashboardController extends Controller
{
    public function index()
    {
        $data['totalPermohonan'] = Petition::count();
        $data['permohonanDisetujui'] = Petition::where('status', 'approved')->count();
        $data['menungguPersetujuan'] = Petition::where('status', 'pending')->count();
        $data['permohonanDitolak'] = Petition::where('status', 'rejected')->count();
        return view('sirekudace.dashboard.index', $data);
    }
}
