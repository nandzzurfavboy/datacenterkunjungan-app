<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckStatusController extends Controller
{
    public function cekStatus()
    {
        return view('reservasi.cekstatus');
    }
}
