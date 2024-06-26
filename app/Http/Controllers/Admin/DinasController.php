<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dinas;
use Illuminate\Http\Request;

class DinasController extends Controller
{
    public function index()
    {
        $listDinas = Dinas::get();
        return view('sirekudace.dashboard.dinas.index', compact('listDinas'));
    }

    public function create()
    {
        return view('sirekudace.dashboard.dinas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_dinas' => 'required|string|max:255',
            'nama_dinas' => 'required|string|max:255'
        ]);

        Dinas::create([
            'kode_dinas' => $request->kode_dinas,
            'nama_dinas' => $request->nama_dinas
        ]);

        flash()->addSuccess('OPD berhasil ditambahkan');
        return redirect()->route('dinas.index');
    }

    public function edit(Dinas $dina)
    {
        return view('sirekudace.dashboard.dinas.edit', compact('dina'));
    }

    public function update(Request $request, Dinas $dina)
    {
        $request->validate([
            'nama_dinas' => 'required|string|max:255'
        ]);

        // Hanya ambil atribut yang diperlukan dari request
        $dina->update([
            'nama_dinas' => $request->nama_dinas,
            'kode_dinas' => $dina->kode_dinas
        ]);

        flash()->addSuccess('OPD berhasil diupdate');
        return redirect()->route('dinas.index');
    }

    public function destroy(Dinas $dina)
    {
        $dina->delete();
        flash()->addSuccess('OPD berhasil dihapus');
        return back();
    }
}
