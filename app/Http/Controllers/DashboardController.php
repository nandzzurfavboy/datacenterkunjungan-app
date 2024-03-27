<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dinas;

class DashboardController extends Controller
{
    public function index()
    {
        return view('sirekudace.dashboard.index');
    }
}
