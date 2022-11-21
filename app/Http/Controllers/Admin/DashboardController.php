<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pangkat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $pkwt = Pangkat::where('status_pangkat', 'PKWT')->count();
        $cpns = Pangkat::where('status_pangkat', 'CPNS')->count();
        $pns = Pangkat::where('status_pangkat', 'PNS')->count();
        $thl = Pangkat::where('status_pangkat', 'THL/BLUD')->count();
        $honda = Pangkat::where('status_pangkat', 'Kontrak Daerah')->count();

        return view('admin.dashboard', compact('cpns', 'pkwt', 'pns', 'thl', 'honda'));
    }
}
